<?php

namespace DeFaoite\FPC\Listeners;

use Spatie\ResponseCache\Facades\ResponseCache;

class Channel
{
    /**
     * After channel update.
     *
     * @param  \DeFaoite\Core\Contracts\Channel  $channel
     * @return void
     */
    public function afterUpdate($channel)
    {
        ResponseCache::clear();
    }
}
