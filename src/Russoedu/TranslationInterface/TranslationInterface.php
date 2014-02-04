<?php namespace Russoedu\TranslationInterface;

//use Request;
//use Session;
//use App;
use View;

//use Config;
//use Redirect;
//use Route;

class TranslationInterface
{
    public static function hello($verb = 'you')
    {
        if (PHP_SAPI == 'cli') {
            echo 'Hello ' . $verb . '\n';
        } else {

            return View::make('translationinterface::hello');
        }
    }

}