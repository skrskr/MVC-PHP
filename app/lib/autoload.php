<?php

namespace PHPMVC\LIB;

// Register AutoLoading function

class AutoLoad {

    public static function autoload($className) {

        $className = str_replace('PHPMVC', '', $className);

        $className = str_replace("\\", '/', $className);
        $className = APP_PATH . DS .  strtolower($className) . '.php';

        if(file_exists($className))
        {
            require_once $className;
        }
    }
}

spl_autoload_register(__NAMESPACE__ .'\AutoLoad::autoload');