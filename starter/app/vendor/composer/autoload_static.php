<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6a1b80abf7089d6fdc2bb41a7f64523b
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Ajax\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Ajax\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmv/php-mv-ui/Ajax',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6a1b80abf7089d6fdc2bb41a7f64523b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6a1b80abf7089d6fdc2bb41a7f64523b::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
