<?php
/**
 * Created by PhpStorm.
 * User: bishal
 * Date: 19/7/18
 * Time: 2:59 AM
 */
namespace App\Helpers;

use App\WebmasterSetting;

class Helper
{
    static function GeneralWebmasterSettings($var)
    {
        $WebmasterSetting = WebmasterSetting::find(1);
        return $WebmasterSetting->$var;
    }
}