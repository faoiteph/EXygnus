<?php

namespace DeFaoite\FPC\Listeners;

use Spatie\ResponseCache\Facades\ResponseCache;
use DeFaoite\Marketing\Repositories\URLRewriteRepository;

class URLRewrite
{
    /**
     * Create a new listener instance.
     *
     * @return void
     */
    public function __construct(protected URLRewriteRepository $urlRewriteRepository) {}

    /**
     * After URL Rewrite update
     *
     * @param  \DeFaoite\Marketing\Contracts\URLRewrite  $urlRewrite
     * @return void
     */
    public function afterUpdate($urlRewrite)
    {
        ResponseCache::forget('/'.$urlRewrite->request_path);
    }

    /**
     * Before URL Rewrite delete
     *
     * @param  int  $urlRewriteId
     * @return void
     */
    public function beforeDelete($urlRewriteId)
    {
        $urlRewrite = $this->urlRewriteRepository->find($urlRewriteId);

        ResponseCache::forget('/'.$urlRewrite->request_path);
    }
}
