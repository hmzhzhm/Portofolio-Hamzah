<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9a800c692fdfefa319f89159be08f75d
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9a800c692fdfefa319f89159be08f75d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9a800c692fdfefa319f89159be08f75d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9a800c692fdfefa319f89159be08f75d::$classMap;

        }, null, ClassLoader::class);
    }
}
