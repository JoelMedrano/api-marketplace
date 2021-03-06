<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit71140cc6ec59582d72be5fe2910a18f8
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Firebase\\JWT\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit71140cc6ec59582d72be5fe2910a18f8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit71140cc6ec59582d72be5fe2910a18f8::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit71140cc6ec59582d72be5fe2910a18f8::$classMap;

        }, null, ClassLoader::class);
    }
}
