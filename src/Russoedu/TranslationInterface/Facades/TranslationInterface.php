<?php namespace Russoedu\TranslationInterface\Facades;

use Illuminate\Support\Facades\Facade;

class TranslationInterface extends Facade
{

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'translationinterface';
    }

}