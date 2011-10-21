<?php

namespace Soul\Collaborator;

class Head implements \Soul\Collaborator
{
    /**
     * @static
     * @param callback $app
     * @param array $options
     * @return callable
     */
    static function collaborate($app, array $options = array())
    {
        return function($env) use ($app)
        {
            $res = $app($env);
            if ('HEAD' === $env['REQUEST_METHOD']) {
                $res[2] = '';
            }
            return $res;
        };
    }
}
