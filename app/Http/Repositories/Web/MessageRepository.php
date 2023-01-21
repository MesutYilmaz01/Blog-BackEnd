<?php

namespace App\Http\Repositories\Web;

use App\Models\Message;
use Illuminate\Database\Eloquent\Collection;

class MessageRepository
{
    /**
     * @param array $data
     * @return Message|null
     */
    public function store(array $data): ?Message
    {
        return Message::create($data);
    }
}
