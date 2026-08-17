<?php

namespace DeFaoite\GDPR\Repositories;

use DeFaoite\Core\Eloquent\Repository;
use DeFaoite\GDPR\Contracts\GDPRDataRequest;

class GDPRDataRequestRepository extends Repository
{
    /**
     * Specify model class name.
     */
    public function model()
    {
        return GDPRDataRequest::class;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(array $data, $id)
    {
        $gdprRequest = $this->findOrFail($id);

        $gdprRequest->update($data);

        return $gdprRequest;
    }
}
