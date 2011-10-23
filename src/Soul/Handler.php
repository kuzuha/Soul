<?php

namespace Soul;

interface Handler
{
    /**
     * @abstract
     * @param callback $app
     * @return void
     */
    function run($app);
}
