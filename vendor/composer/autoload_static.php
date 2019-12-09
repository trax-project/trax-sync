<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4cd7b659cb7ad76dc7d5d02197b6f719
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Trax\\Sync\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Trax\\Sync\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4cd7b659cb7ad76dc7d5d02197b6f719::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4cd7b659cb7ad76dc7d5d02197b6f719::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}