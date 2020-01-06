<?php
/**
 * @author Basic App Dev Team <dev@basic-app.com>
 * @license MIT
 * @link http://basic-app.com
 */
namespace BasicApp\HtmlPurifier\Config;

use BasicApp\HtmlPurifier\HtmlPurifierService;
use HTMLPurifier_Config;
use BasicApp\HtmlPurifier\Config\HtmlPurifier as HtmlPurifierConfig;

abstract class BaseServices extends \CodeIgniter\Config\BaseService
{

    public static function htmlPurifier($getShared = true)
    {
        if (!$getShared)
        {
            $appConfig = config(HtmlPurifierConfig::class);

            $config = HTMLPurifier_Config::createDefault();

            foreach(get_object_vars($appConfig) as $key => $value)
            {
                $key = str_replace('_', '.', $key);

                $config->set($key, $value);
            }
        
            $service = new HtmlPurifierService($config);

            return $service;
        }

        return static::getSharedInstance(__FUNCTION__);
    }

}