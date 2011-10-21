<?php

namespace Soul;

interface Collaborator
{
    /**
     * @static
     * @abstract
     * @param callback $app
     * @param array $options
     * @return callable
     */
    static function collaborate($app, array $options = array());
}
