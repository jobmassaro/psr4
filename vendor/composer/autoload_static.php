<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit36321c2d3f61d67a85f253d28b033dff
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Models\\' => 7,
        ),
        'A' => 
        array (
            'ActiveRecord\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/Models',
        ),
        'ActiveRecord\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/ActiveRecord',
        ),
    );

    public static $classMap = array (
        'Models\\Cazzo' => __DIR__ . '/../..' . '/app/Models/Cazzo.php',
        'Models\\User' => __DIR__ . '/../..' . '/app/Models/User.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit36321c2d3f61d67a85f253d28b033dff::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit36321c2d3f61d67a85f253d28b033dff::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit36321c2d3f61d67a85f253d28b033dff::$classMap;

        }, null, ClassLoader::class);
    }
}
