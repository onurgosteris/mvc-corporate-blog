<?php

class App
{
    protected $nowPath;
    protected $nowMethod;
    protected static $routes = [];
    protected $home;


    public function __construct($config)
    {
        $this->nowPath = $_SERVER['REQUEST_URI'];
        $this->nowMethod = $_SERVER['REQUEST_METHOD'];
        $this->home = $config[0]['home'];
        $this->startRoute();
    }


    public static function getAction($link, $path, $auth = false, $area = null)
    {
        self::$routes[] = ['GET', $link, $path, $auth, $area];
    }

    public static function postAction($link, $path, $auth = false, $area = null)
    {
        self::$routes[] = ['POST', $link, $path, $auth, $area];
    }

    public function startRoute()
    {
        foreach (self::$routes as $routes) {

            list($method, $link, $path, $auth, $area) = $routes;
            $methodCheck = $this->nowMethod == $method;
            if ($_SERVER['REQUEST_URI'] == '/') {
                $pathCheck = preg_match("@^{$link}$@", $this->nowPath, $params);

            } else {
                $pathCheck = preg_match("@^{$link}$@", rtrim($this->nowPath,"/"), $params);
            }


            if ($methodCheck && $pathCheck) {

                $uri = explode("/", $path);
                list($activeModul, $activeMethod) = $uri;

                if ($this->nowPath == '/') {
                    $module = $this->home['modul'];
                    $controller = $this->home['modul'] . "Controller";
                    $method = $this->home['method'];
                } else {
                    if (($auth == TRUE and $area == "frontend" and isset($_SESSION['users']))
                        or
                        ($auth == TRUE and $area == "backend" and isset($_SESSION['admins']))
                        or
                        $auth == FALSE) {
                        $module = $activeModul;
                        $controller = $activeModul . "Controller";
                        $method = $activeMethod;
                    } else {
                        if ($area == "frontend") {
                            header("location:/login");
                            exit;
                        } elseif ($area=="backend"){
                            header("location:/ogpanel/login");
                            exit;
                        }
                    }

                }

                if (file_exists($file = DIRECTORY . "/moduls/{$module}/controller/{$controller}.php")) {

                    require_once $file;

                    if (class_exists($controller)) {

                        $class = new $controller;

                        if (method_exists($class, $method)) {
                            array_shift($params);
                            return call_user_func_array([$class, $method], array_values($params));
                        } else {
                            echo "Method Not Found.";
                            echo "<br>";
                        }

                    } else {
                        echo "Class Not Found.";
                        echo "<br>";
                    }
                } else {
                    echo "Controller Not Found.";
                    echo "<br>";
                }
            }
        }


        header("location:/404");


    }


}


?>