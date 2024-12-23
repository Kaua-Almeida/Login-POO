<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitc5aca18f9459890b5c800c63a8e58917
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInitc5aca18f9459890b5c800c63a8e58917', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitc5aca18f9459890b5c800c63a8e58917', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitc5aca18f9459890b5c800c63a8e58917::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
