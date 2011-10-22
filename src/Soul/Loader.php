<?php

namespace Soul;

class Loader
{
    /**
     * @static
     * @param array $options
     * @return Handler
     */
    static function auto(array $options = array())
    {
        switch (PHP_SAPI) {
            case 'cli':
                if (version_compare(PHP_VERSION, '5.4.0beta1') < 0) {
                    if (isset($_SERVER['beat_version'])) {
                        return self::load('Beat', $options);
                    }
                    return self::load('BeatWebServer', $options);
                }
                return self::load('BuiltinWebServer', $options);
            default:
                return self::load('Simple', $options);
        }
    }

    /**
     * @static
     * @param string $handler
     * @param array $options
     * @return Handler
     */
    static function load($handler, array $options = array())
    {
        $class = "Soul\\Handler\\$handler";
        return new $class();
    }
}
