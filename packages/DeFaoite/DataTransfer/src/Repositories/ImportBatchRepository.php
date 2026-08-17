<?php

namespace DeFaoite\DataTransfer\Repositories;

use DeFaoite\Core\Eloquent\Repository;
use DeFaoite\DataTransfer\Contracts\ImportBatch;

class ImportBatchRepository extends Repository
{
    /**
     * Specify model class name.
     */
    public function model(): string
    {
        return ImportBatch::class;
    }
}
