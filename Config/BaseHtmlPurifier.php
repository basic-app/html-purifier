<?php
/**
 * @author Basic App Dev Team <dev@basic-app.com>
 * @license MIT
 * @link http://basic-app.com
 */
namespace BasicApp\HtmlPurifier\Config;

abstract class BaseHtmlPurifier extends \CodeIgniter\Config\BaseConfig
{

    public $AutoFormat_DisplayLinkURI = false;

    public $AutoFormat_PurifierLinkify = false;

    public $AutoFormat_AutoParagraph = false;

    public $AutoFormat_RemoveEmpty_RemoveNbsp_Exceptions = [];
    
    public $AutoFormat_RemoveEmpty_RemoveNbsp = false;
    
    public $AutoFormat_RemoveEmpty = false;
    
    public $AutoFormat_RemoveSpansWithoutAttributes = false;

}