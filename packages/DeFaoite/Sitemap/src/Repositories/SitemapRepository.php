<?php

namespace DeFaoite\Sitemap\Repositories;

use DeFaoite\Core\Eloquent\Repository;
use DeFaoite\Sitemap\Contracts\Sitemap;

class SitemapRepository extends Repository
{
    /**
     * Specify model class name.
     */
    public function model(): string
    {
        return Sitemap::class;
    }

    /**
     * Create a new sitemap instance in storage.
     *
     * @return Sitemap
     */
    public function create(array $data)
    {
        $sitemap = parent::create($data);

        $sitemap->channels()->sync($data['channels']);

        return $sitemap;
    }

    /**
     * Update the specified sitemap instance in storage.
     *
     * @param  int  $id
     * @return Sitemap
     */
    public function update(array $data, $id)
    {
        $sitemap = parent::update($data, $id);

        $sitemap->channels()->sync($data['channels']);

        return $sitemap;
    }
}
