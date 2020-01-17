<?php

namespace PHPMVC\LIB;

trait InputFilter {

    public function filterInt($intput)
    {
        return filter_var($intput, FILTER_SANITIZE_NUMBER_INT);
    }

    public function filterFloat($intput)
    {
        return filter_var($intput, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
    }

    public function filterString($intput)
    {
        return htmlentities(strip_tags($intput), ENT_QUOTES, "UTF-8");
    }
}