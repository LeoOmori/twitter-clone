<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc7da42385874e7da11eeca27762a79b8
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc7da42385874e7da11eeca27762a79b8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc7da42385874e7da11eeca27762a79b8::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
