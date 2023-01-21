<?php

namespace App\Http\Contracts\Web;

use App\Models\Message;

interface IMessageService
{
    /**
     * @param array $data
     * @return Message|null
     */
    public function store(array $data): ?Message;
}
