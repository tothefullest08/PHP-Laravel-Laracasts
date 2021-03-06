<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8427b52bb28642ea72a239abdb964662
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Acme\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Acme\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8427b52bb28642ea72a239abdb964662::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8427b52bb28642ea72a239abdb964662::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
