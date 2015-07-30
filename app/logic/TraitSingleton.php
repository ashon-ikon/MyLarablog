<?php
namespace MyBlog;

trait TraitSingleton {
    
    protected static $instance = null;
    private function __construct() {}

    /**
     * This is the instance entry point
     * @return self
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new self;
        }
        return static::$instance;
    }
    
    /**
     * Destroys the singleton
     */
    public static function selfDestroy()
    {
        if (static::$instance) {
            static::$instance = null;
        }
    }
}
