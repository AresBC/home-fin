<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit33f39b260af3d637bedfe015db8c32d4
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Core\\' => 5,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit33f39b260af3d637bedfe015db8c32d4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit33f39b260af3d637bedfe015db8c32d4::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit33f39b260af3d637bedfe015db8c32d4::$classMap;

        }, null, ClassLoader::class);
    }
}
