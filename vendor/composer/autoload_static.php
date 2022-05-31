<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd81c5dec21c52f6e7e4b14221f1fa891
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Pardis\\Iran\\' => 12,
        ),
        'F' => 
        array (
            'Firebase\\JWT\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Pardis\\Iran\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Firebase\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/firebase/php-jwt/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd81c5dec21c52f6e7e4b14221f1fa891::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd81c5dec21c52f6e7e4b14221f1fa891::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd81c5dec21c52f6e7e4b14221f1fa891::$classMap;

        }, null, ClassLoader::class);
    }
}