<?php

namespace LEXO\DeferVite\Services;

use Illuminate\Foundation\Vite;

class DeferViteService extends Vite
{
    /**
     * Generate a script tag for the given URL.
     *
     * @param  string  $url
     * @return string
     */
    protected function makeScriptTag($url)
    {
        return sprintf('<script type="module" src="%s" defer></script>', $url);
    }
}
