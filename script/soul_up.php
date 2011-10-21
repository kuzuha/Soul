<?php
require 'bootstrap.php';
array_shift($argv);
Soul\Util::soul_up(realpath($argv[0]));
