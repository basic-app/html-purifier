<?php

namespace BasicApp\HtmlPurifier;

class HtmlPurifierValidator
{

    public function html_purifier($str, & $error = null)
    {
        $str = html_entity_decode($str);

        $str2 = HtmlPurifierHelper::purify($str);

        $str = preg_replace("|\s|u", "", $str);

        $str = str_replace('{', '%7B', $str);

        $str = str_replace('}', '%7D', $str);

        $str2 = preg_replace("|\s|u", "", $str2);

        if ($str2 != $str)
        {
            $error = t('errors', 'HTML is not safe.');

            return false;
        }

        return true;
    }

}