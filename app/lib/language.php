<?php

namespace PHPMVC\LIB;


class Language
{
    private $dictionary = [];

    public function load($path)
    {
        $defaultLanguage = APP_DEFAULT_LANGUAGE;
        if (isset($_SESSION['lang'])) {
            $defaultLanguage = $_SESSION['lang'];
        }
        $pathArray = explode('.', $path);
        $languageFileToLoad = LANGAUGE_PATH . $defaultLanguage . DS . $pathArray[0] . DS . $pathArray[1] . '.lang.php';
        if (file_exists($languageFileToLoad)) {
            require $languageFileToLoad;
            if (is_array($_) && !empty($_)) {
                foreach ($_ as $key => $value) {
                    $this->dictionary[$key] = $value;
                }
            }
        } else {
            trigger_error("Sorry the language file " . $languageFileToLoad . " not exist");
        }
    }

    public function getDictionary()
    {
        return $this->dictionary;
    }
}
