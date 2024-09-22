<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit07ec2e3539396437e896c527750f77bd
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Receivers\\' => 10,
        ),
        'I' => 
        array (
            'Invokers\\' => 9,
        ),
        'C' => 
        array (
            'Commands\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Receivers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Receivers',
        ),
        'Invokers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Invokers',
        ),
        'Commands\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Commands',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit07ec2e3539396437e896c527750f77bd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit07ec2e3539396437e896c527750f77bd::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit07ec2e3539396437e896c527750f77bd::$classMap;

        }, null, ClassLoader::class);
    }
}
