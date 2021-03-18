<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4175652a2091b6dd614832ab3b4fe7d4
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'League\\Plates\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'League\\Plates\\' => 
        array (
            0 => __DIR__ . '/..' . '/league/plates/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'B' => 
        array (
            'Bramus' => 
            array (
                0 => __DIR__ . '/..' . '/bramus/router/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4175652a2091b6dd614832ab3b4fe7d4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4175652a2091b6dd614832ab3b4fe7d4::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit4175652a2091b6dd614832ab3b4fe7d4::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit4175652a2091b6dd614832ab3b4fe7d4::$classMap;

        }, null, ClassLoader::class);
    }
}
