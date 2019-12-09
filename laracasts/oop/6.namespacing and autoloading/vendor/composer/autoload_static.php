<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7b6c2e958c85024e99ffc24b171486ac
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit7b6c2e958c85024e99ffc24b171486ac::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7b6c2e958c85024e99ffc24b171486ac::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}