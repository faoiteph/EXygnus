<?php

namespace DeFaoite\Theme\Exceptions;

class ViterNotFound extends \Exception
{
    /**
     * Create an instance.
     *
     * @param  string  $namespace
     * @return void
     */
    public function __construct($namespace)
    {
        parent::__construct("Viter with `$namespace` namespace not found. Please add `$namespace` namespace in the `config/exygnus-vite.php` file.", 1);
    }
}
