<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb4442204e1d279367c2216641f79eace
{
    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'Ieleny\\casaApostas\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Ieleny\\casaApostas\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb4442204e1d279367c2216641f79eace::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb4442204e1d279367c2216641f79eace::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}