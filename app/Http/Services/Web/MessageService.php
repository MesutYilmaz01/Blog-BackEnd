<?php

namespace App\Http\Services\Web;

use App\Http\Contracts\Web\IMessageService;
use App\Http\Repositories\Web\MessageRepository;
use App\Models\Message;

class MessageService implements IMessageService
{
    /**
     * @var MessageRepository
     */
    private MessageRepository $messageRepository;

    /**
     * @param MessageRepository $messageRepository
     */
    public function __construct(MessageRepository $messageRepository)
    {
        $this->messageRepository = $messageRepository;
    }

    /**
     * @param array $data
     * @return Message|null
     */
    public function store(array $data): ?Message
    {
        return $this->messageRepository->store($data);

    }
}
