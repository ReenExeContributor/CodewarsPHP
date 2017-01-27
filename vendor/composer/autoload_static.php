<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3a07240f1358b5ee87555257144f92a1
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Source\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Source\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3a07240f1358b5ee87555257144f92a1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3a07240f1358b5ee87555257144f92a1::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
