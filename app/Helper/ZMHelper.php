<?php

namespace App\Helper;

use ZM;
use DateTime;
use App\Models\AppSetting;

class ZMHelper
{

    public function appSetting()
    {
        $app_setting = AppSetting::first();

        return [
            // 'app_name'              => $app_setting->app_main_heading,
            // 'app_sub_name'          => $app_setting->app_sub_heading,
            // 'logo'                  => PR::getFile('AppSetting',$app_setting->logo),
            // 'favicon'               => PR::getFile('AppSetting',$app_setting->favicon),
            'app_name'              => "ZM LAW FIRM",
            'app_sub_name'          => "ZM LAW FIRM",
            'logo'                  => '',
            'favicon'               => '',
        ];
    }

    public function getFile($folder_name,$filename)
    {
        
        if ($filename != 'img/logo.png' && $filename != 'img/favicon.ico')  
        {
            $file_name = $folder_name.'/'.$filename;
            
            return asset('storage/'.$file_name);
        }
        else{
            return asset($filename);
        }
    }

    public function dateFormat($value)
    {
        // d-M-Y
        return date('M d,Y', strtotime($value));
    }

    public function getUrl()
    {
        $url = '';

        if(isset(explode('/', \URL::current())[3]))
        {
            $url = explode('/', \URL::current())[3];
        }

        return $url;

    }

    public function getGreetings()
    {
        date_default_timezone_set('Asia/Karachi');

        // 24-hour format of an hour without leading zeros (0 through 23)
        $Hour = date('G');
        
        if ( $Hour >= 5 && $Hour <= 11 ) {
            return "Good Morning";
        } else if ( $Hour >= 11 && $Hour <= 17 ) {
            return "Good Afternoon";
        } else if ( $Hour >= 17 && $Hour <= 20 ) {
            return "Good Evening";
        }
        else if ( $Hour >= 20 || $Hour <= 5 ) {
            return "Good Night";
        }
    }
}
