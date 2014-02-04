<?php namespace Russoedu\TranslationInterface;

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class TranslationInterfaceCommand extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'translationinterface';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Say hello';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function fire()
    {
        app('translationinterface')->hello($this->argument('verb'));
    }

    /**
     * Get the console command arguments.
     *
     * @return array
     */
    protected function getArguments()
    {
        return array(
            array('verb', InputArgument::REQUIRED, 'verb'),
        );
    }

}

//Route::filter('LaravelLocalizationRedirectFilter', function () {
//    global $app;
//    $currentLocale = $app['laravellocalization']->getCurrentLocale();
//    $defaultLocale = $app['laravellocalization']->getDefault();
//    $params        = explode('/', Request::path());
//    if (count($params) > 0) {
//        $localeCode = $params[0];
//        $locales    = $app['laravellocalization']->getSupportedLocales();
//
//        if (!empty($locales[$localeCode])) {
//            if ($localeCode === $defaultLocale && $app['laravellocalization']->hideDefaultLocaleInURL()) {
//                return Redirect::to($app['laravellocalization']->getCleanRoute(), 302)->header('Vary', 'Accept-Language');
//            }
//        } else if ($currentLocale !== $defaultLocale || !$app['laravellocalization']->hideDefaultLocaleInURL()) {
//            // If the current url does not contain any locale
//            // The system redirect the user to the very same url "localized"
//            // we use the current locale to redirect him
//            return Redirect::to($currentLocale . '/' . Request::path(), 302)->header('Vary', 'Accept-Language');
//        }
//    }
//});
//
///**
// *    This filter would set the translated route name
// */
//Route::filter('LaravelLocalizationRoutes', function () {
//    global $app;
//    $router = $app['router'];
//    if (App::make('laravel-localization.4.1')) {
//        // Laravel 4.1
//        $routeName = $app['laravellocalization']->getRouteNameFromAPath($router->current()->uri());
//    } else {
//        // Laravel 4.0
//        $routeName = $app['laravellocalization']->getRouteNameFromAPath($router->getCurrentRoute()->getPath());
//    }
//    $app['laravellocalization']->setRouteName($routeName);
//
//    return;
//});
//
//class UnsupportedLocaleException extends Exception
//{
//
//}
