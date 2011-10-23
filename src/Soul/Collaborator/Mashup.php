<?php

namespace Soul\Collaborator;

class Mashup implements \Soul\Collaborator
{
    /**
     * @static
     * @param callback $app
     * @param array $options
     * @return callback
     */
    static function collaborate($app, array $options = array())
    {
        foreach (static::$collaborators as $collaborator) {
            $collaborator = \Soul\Util::_fix_class_name($collaborator, __NAMESPACE__);

            /* @var $collaborator \Soul\Collaborator */
            $app = $collaborator::collaborate($app, $options);
        }
        return $app;
    }
}
