<?php

namespace app\engine;

class Autoload
{

    public function loadClass($className)
    {

        $fileName = str_replace(['app\\', '\\'], [DIR_ROOT . '/../', DS], $className) . ".php";
        // var_dump(DIR_ROOT . '../');
        if (file_exists($fileName)) {
            include $fileName;
        }
    }
}