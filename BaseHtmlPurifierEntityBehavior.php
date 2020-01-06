<?php
/**
 * @author Basic App Dev Team <dev@basic-app.com>
 * @license MIT
 * @link http://basic-app.com
 */
namespace BasicApp\HtmlPurifier;

use BasicApp\HtmlPurifier\HtmlPurifierHelper;
use BasicApp\Events\EntityBeforeFillEvent;

abstract class BaseHtmlPurifierEntityBehavior extends \BasicApp\Core\EntityBehavior
{

    public $attributes = [];

    public function onBeforeFill(EntityBeforeFillEvent $event)
    {
        if (!is_array($event->data))
        {
            return;
        }

        $service = service('htmlPurifier');

        foreach($this->attributes as $attribute)
        {
            if (array_key_exists($attribute, $event->data))
            {
                $event->data[$attribute] = $service->purify($event->data[$attribute]);
            }
        }
    }

}