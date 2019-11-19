<?php

namespace BasicApp\HtmlPurifier;

use HTMLPurifier;
use HTMLPurifier_Config;
use BasicApp\HtmlPurifier\Config\HtmlPurifier as Config;

class HtmlPurifierHelper
{

    public static function purify($str)
    {
        $config = config(Config::class);

        $html_config = HTMLPurifier_Config::createDefault();

        foreach(get_object_vars($config) as $key => $value)
        {
            $key = str_replace('_', '.', $key);

            $html_config->set($key, $value);
        }

        $purifier = new HTMLPurifier($html_config);
        
        return $purifier->purify($str);
    }

}