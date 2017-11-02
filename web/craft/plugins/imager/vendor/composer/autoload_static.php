<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd3433048d9f6c319304da7837dbca0c8
{
    public static $files = array (
        '74ed299072414d276bb7568fe71d5b0c' => __DIR__ . '/..' . '/tinify/tinify/lib/Tinify.php',
        '9635627915aaea7a98d6d14d04ca5b56' => __DIR__ . '/..' . '/tinify/tinify/lib/Tinify/Exception.php',
    );

    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Tinify\\' => 7,
        ),
        'C' => 
        array (
            'ColorThief\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Tinify\\' => 
        array (
            0 => __DIR__ . '/..' . '/tinify/tinify/lib/Tinify',
        ),
        'ColorThief\\' => 
        array (
            0 => __DIR__ . '/..' . '/ksubileau/color-thief-php/lib/ColorThief',
        ),
    );

    public static $prefixesPsr0 = array (
        'I' => 
        array (
            'Imgix\\' => 
            array (
                0 => __DIR__ . '/..' . '/imgix/imgix-php/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd3433048d9f6c319304da7837dbca0c8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd3433048d9f6c319304da7837dbca0c8::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitd3433048d9f6c319304da7837dbca0c8::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
