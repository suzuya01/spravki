<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit9904a4bbb64319092c95a8f3a506d2ff
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

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInit9904a4bbb64319092c95a8f3a506d2ff', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit9904a4bbb64319092c95a8f3a506d2ff', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit9904a4bbb64319092c95a8f3a506d2ff::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
