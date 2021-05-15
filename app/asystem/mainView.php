<?php


class view
{
    public static function frontView($module, $method, $data = null, $return = false)
    {


        $db = new crudPDO();
        $indexModel = new defaultModel();
        $data['settings'] = $indexModel->indexSettingsModel();
        $data['menuler'] = $indexModel->indexMenuModel();
        $data['footerBasliklar'] = $indexModel->footerBaslikModel();
        $data['footerAltBasliklar'] = $indexModel->footerAltBaslikModel();
        foreach ($data['settings'] as $key) {
            $data[$key['settings_key']] = $key['settings_value'];
        }

        if ($return == false) {
            ob_start();
            if (file_exists(DIRECTORY . "/moduls/{$module}/view/{$method}View.php")) {
                require(DIRECTORY . "/moduls/{$module}/view/{$method}View.php");
            } else {
                echo "Page Not Found<br>";
                echo DIRECTORY . "/moduls/{$module}/view/{$method}View.php";
            }
        } else {
            ob_start();
            if (file_exists(DIRECTORY . "/moduls/{$module}/view/{$method}View.php")) {
                require(DIRECTORY . "/moduls/{$module}/view/{$method}View.php");
                $text = ob_get_contents();
                ob_end_clean();
                return $text;
            } else {
                echo "Page Not Found<br>";
                echo DIRECTORY . "/moduls/{$module}/view/{$method}View.php";
            }
        }
    }

    public static function frontLayout($area, $layout, $module, $method, $data = null)
    {
        $db = new crudPDO();
        $indexModel = new defaultModel();
        $data['settings'] = $indexModel->indexSettingsModel();
        $data['menuler'] = $indexModel->indexMenuModel();
        $data['footerBasliklar'] = $indexModel->footerBaslikModel();
        $data['footerAltBasliklar'] = $indexModel->footerAltBaslikModel();
        foreach ($data['settings'] as $key) {
            $data[$key['settings_key']] = $key['settings_value'];
        }

        $data['view'] = $method != NULL ? view::frontView($module, $method, $data, true) : NULL;

        require_once DIRECTORY . "/layout/{$area}/{$layout}Layout.php";
    }
}




