<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0ff99603864abbfaf1322b0572c59e1f
{
    public static $files = array (
        '5ff2501974ebd86c0be698ddfca6451e' => __DIR__ . '/..' . '/yahnis-elsts/plugin-update-checker/load-v5p0.php',
    );

    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0ff99603864abbfaf1322b0572c59e1f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0ff99603864abbfaf1322b0572c59e1f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0ff99603864abbfaf1322b0572c59e1f::$classMap;

        }, null, ClassLoader::class);
    }
}
