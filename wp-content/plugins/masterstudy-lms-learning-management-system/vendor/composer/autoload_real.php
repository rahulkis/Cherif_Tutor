<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit96a50f34e3dd2473330cb6cc5daedbaa
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

        spl_autoload_register(array('ComposerAutoloaderInit96a50f34e3dd2473330cb6cc5daedbaa', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit96a50f34e3dd2473330cb6cc5daedbaa', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit96a50f34e3dd2473330cb6cc5daedbaa::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
