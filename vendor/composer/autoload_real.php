<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitc2c19d6d65ce86b730079011f759719c
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

        spl_autoload_register(array('ComposerAutoloaderInitc2c19d6d65ce86b730079011f759719c', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitc2c19d6d65ce86b730079011f759719c', 'loadClassLoader'));

        $includePaths = require __DIR__ . '/include_paths.php';
        $includePaths[] = get_include_path();
        set_include_path(implode(PATH_SEPARATOR, $includePaths));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitc2c19d6d65ce86b730079011f759719c::getInitializer($loader));

        $loader->register(true);

        $includeFiles = \Composer\Autoload\ComposerStaticInitc2c19d6d65ce86b730079011f759719c::$files;
        foreach ($includeFiles as $fileIdentifier => $file) {
            composerRequirec2c19d6d65ce86b730079011f759719c($fileIdentifier, $file);
        }

        return $loader;
    }
}

/**
 * @param string $fileIdentifier
 * @param string $file
 * @return void
 */
function composerRequirec2c19d6d65ce86b730079011f759719c($fileIdentifier, $file)
{
    if (empty($GLOBALS['__composer_autoload_files'][$fileIdentifier])) {
        $GLOBALS['__composer_autoload_files'][$fileIdentifier] = true;

        require $file;
    }
}
