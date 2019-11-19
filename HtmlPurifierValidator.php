<?php

namespace BasicApp\HtmlPurifier;

class HtmlPurifierValidator
{

    public function html_purifier($str, & $error = null)
    {
        $str2 = HtmlPurifierHelper::purify($str);

        if ($str2 != $str)
        {
            $error = t('errors', 'HTML is not safe.');

            return false;
        }

        return true;
    }

}