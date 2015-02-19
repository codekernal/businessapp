<?php

// autoload_real.php @generated by Composer

<<<<<<< HEAD
class ComposerAutoloaderInita0a63d7d64240198116b499aba465d9b
=======
class ComposerAutoloaderInit58d309a958d2a5c0464c2c964a7c71ad
>>>>>>> upstream/master
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

<<<<<<< HEAD
        spl_autoload_register(array('ComposerAutoloaderInita0a63d7d64240198116b499aba465d9b', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader();
        spl_autoload_unregister(array('ComposerAutoloaderInita0a63d7d64240198116b499aba465d9b', 'loadClassLoader'));
=======
        spl_autoload_register(array('ComposerAutoloaderInit58d309a958d2a5c0464c2c964a7c71ad', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader();
        spl_autoload_unregister(array('ComposerAutoloaderInit58d309a958d2a5c0464c2c964a7c71ad', 'loadClassLoader'));
>>>>>>> upstream/master

        $map = require __DIR__ . '/autoload_namespaces.php';
        foreach ($map as $namespace => $path) {
            $loader->set($namespace, $path);
        }

        $map = require __DIR__ . '/autoload_psr4.php';
        foreach ($map as $namespace => $path) {
            $loader->setPsr4($namespace, $path);
        }

        $classMap = require __DIR__ . '/autoload_classmap.php';
        if ($classMap) {
            $loader->addClassMap($classMap);
        }

        $loader->register(true);

        $includeFiles = require __DIR__ . '/autoload_files.php';
        foreach ($includeFiles as $file) {
<<<<<<< HEAD
            composerRequirea0a63d7d64240198116b499aba465d9b($file);
=======
            composerRequire58d309a958d2a5c0464c2c964a7c71ad($file);
>>>>>>> upstream/master
        }

        return $loader;
    }
}

<<<<<<< HEAD
function composerRequirea0a63d7d64240198116b499aba465d9b($file)
=======
function composerRequire58d309a958d2a5c0464c2c964a7c71ad($file)
>>>>>>> upstream/master
{
    require $file;
}
