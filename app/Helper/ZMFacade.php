<?php
namespace App\Helper;
use Illuminate\Support\Facades\Facade;

class ZMFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'zm';
    }
}