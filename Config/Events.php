<?php
/**
 * @author Basic App Dev Team <dev@basic-app.com>
 * @license MIT
 * @link http://basic-app.com
 */
use BasicApp\System\SystemEvents;

SystemEvents::onValidation(function($event)
{
    $event->ruleSets[] = BasicApp\HtmlPurifier\HtmlPurifierValidator::class;
});