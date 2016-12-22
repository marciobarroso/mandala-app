<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit351f2f5646f0ee8890482e96379e9ffe
{
    public static $files = array (
        '253c157292f75eb38082b5acb06f3f01' => __DIR__ . '/..' . '/nikic/fast-route/src/functions.php',
        'c65d09b6820da036953a371c8c73a9b1' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/polyfills.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Component\\Translation\\' => 30,
            'Symfony\\Bridge\\Twig\\' => 20,
            'Slim\\Views\\' => 11,
            'Slim\\Flash\\' => 11,
            'Slim\\' => 5,
        ),
        'Q' => 
        array (
            'QuickShot\\Common\\Model\\' => 23,
            'QuickShot\\Common\\Middleware\\' => 28,
            'QuickShot\\Common\\Enum\\' => 22,
            'QuickShot\\Common\\Action\\' => 24,
            'QuickShot\\Common\\' => 17,
            'QuickShot\\' => 10,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
            'Psr\\Http\\Message\\' => 17,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
        ),
        'I' => 
        array (
            'Interop\\Container\\' => 18,
        ),
        'F' => 
        array (
            'FastRoute\\' => 10,
            'Facebook\\' => 9,
        ),
        'A' => 
        array (
            'App\\Service\\' => 12,
            'App\\Model\\' => 10,
            'App\\Middleware\\' => 15,
            'App\\Handler\\' => 12,
            'App\\Common\\' => 11,
            'App\\Action\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Component\\Translation\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/translation',
        ),
        'Symfony\\Bridge\\Twig\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/twig-bridge',
        ),
        'Slim\\Views\\' => 
        array (
            0 => __DIR__ . '/..' . '/slim/twig-view/src',
        ),
        'Slim\\Flash\\' => 
        array (
            0 => __DIR__ . '/..' . '/slim/flash/src',
        ),
        'Slim\\' => 
        array (
            0 => __DIR__ . '/..' . '/slim/slim/Slim',
        ),
        'QuickShot\\Common\\Model\\' => 
        array (
            0 => __DIR__ . '/..' . '/quickshot/common/src/quickshot/common/model',
        ),
        'QuickShot\\Common\\Middleware\\' => 
        array (
            0 => __DIR__ . '/..' . '/quickshot/common/src/quickshot/common/middleware',
        ),
        'QuickShot\\Common\\Enum\\' => 
        array (
            0 => __DIR__ . '/..' . '/quickshot/common/src/quickshot/common/enum',
        ),
        'QuickShot\\Common\\Action\\' => 
        array (
            0 => __DIR__ . '/..' . '/quickshot/common/src/quickshot/common/action',
        ),
        'QuickShot\\Common\\' => 
        array (
            0 => __DIR__ . '/..' . '/quickshot/common/src/quickshot/common',
        ),
        'QuickShot\\' => 
        array (
            0 => __DIR__ . '/..' . '/quickshot/common/src/quickshot',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
        'Interop\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/container-interop/container-interop/src/Interop/Container',
        ),
        'FastRoute\\' => 
        array (
            0 => __DIR__ . '/..' . '/nikic/fast-route/src',
        ),
        'Facebook\\' => 
        array (
            0 => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook',
        ),
        'App\\Service\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/service',
        ),
        'App\\Model\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/model',
        ),
        'App\\Middleware\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/middleware',
        ),
        'App\\Handler\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/handler',
        ),
        'App\\Common\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/common',
        ),
        'App\\Action\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/action',
        ),
    );

    public static $prefixesPsr0 = array (
        'T' => 
        array (
            'Twig_' => 
            array (
                0 => __DIR__ . '/..' . '/twig/twig/lib',
            ),
        ),
        'P' => 
        array (
            'Pimple' => 
            array (
                0 => __DIR__ . '/..' . '/pimple/pimple/src',
            ),
        ),
    );

    public static $classMap = array (
        'EasyPeasyICS' => __DIR__ . '/..' . '/phpmailer/phpmailer/extras/EasyPeasyICS.php',
        'PHPMailer' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.phpmailer.php',
        'PHPMailerOAuth' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.phpmaileroauth.php',
        'PHPMailerOAuthGoogle' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.phpmaileroauthgoogle.php',
        'POP3' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.pop3.php',
        'SMTP' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.smtp.php',
        'ntlm_sasl_client_class' => __DIR__ . '/..' . '/phpmailer/phpmailer/extras/ntlm_sasl_client.php',
        'phpmailerException' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.phpmailer.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit351f2f5646f0ee8890482e96379e9ffe::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit351f2f5646f0ee8890482e96379e9ffe::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit351f2f5646f0ee8890482e96379e9ffe::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit351f2f5646f0ee8890482e96379e9ffe::$classMap;

        }, null, ClassLoader::class);
    }
}