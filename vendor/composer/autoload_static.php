<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit34dd30d36eb15e959a419787ab76d1df
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'DBlackborough\\Quill\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'DBlackborough\\Quill\\' => 
        array (
            0 => __DIR__ . '/..' . '/deanblackborough/php-quill-renderer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit34dd30d36eb15e959a419787ab76d1df::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit34dd30d36eb15e959a419787ab76d1df::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit34dd30d36eb15e959a419787ab76d1df::$classMap;

        }, null, ClassLoader::class);
    }
}
