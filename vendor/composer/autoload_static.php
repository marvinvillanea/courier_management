<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit77b90cb603b2436c7a87d2cc5cfe71ee
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Twilio\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Twilio\\' => 
        array (
            0 => __DIR__ . '/..' . '/twilio/sdk/src/Twilio',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit77b90cb603b2436c7a87d2cc5cfe71ee::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit77b90cb603b2436c7a87d2cc5cfe71ee::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit77b90cb603b2436c7a87d2cc5cfe71ee::$classMap;

        }, null, ClassLoader::class);
    }
}
