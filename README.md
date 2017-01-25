Custom admin look and feel library for the Laravel 5 framework - developed by gndlovu.

Installation.

Pull this package in through Composer.
    {
        "require": {
            "gndlovu/admin": "0.1.0"
        }
    }

Add the service provider to your config/app.php file:

    'providers'     => array(

        //...
        gndlovu\admin\AdminServiceProvider::class,

    ),
