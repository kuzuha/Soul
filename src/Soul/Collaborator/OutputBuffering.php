<?php

namespace Soul\Collaborator;

class OutputBuffering implements \Soul\Collaborator
{
    /**
     * @static
     * @param callback $app
     * @param array $options
     * @return callback
     */
    static function collaborate($app, array $options = array())
    {
        return function(array $env) use ($app)
        {
            ob_start();
            $res = $app($env);
            ob_end_clean();
            return $res;
        };
    }
}
