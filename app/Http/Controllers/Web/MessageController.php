<?php

namespace App\Http\Controllers\Web;

use App\Http\Contracts\Web\IMessageService;
use App\Http\Controllers\Controller;
use App\Http\Requests\Message\MessageStoreRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    /**
     * @var IMessageService
     */
    private IMessageService $messageService;

    /**
     * @param IMessageService $messageService
     */
    public function __construct(IMessageService $messageService)
    {
        $this->messageService = $messageService;
    }

    /**
     * @param MessageStoreRequest $request
     * @return JsonResponse
     */
    public function store(MessageStoreRequest $request): JsonResponse
    {
        $message = $this->messageService->store($request->all());
        if (!$message) {
            return response()->json(["message" => "Mesajınız gönderilemedi..."]);
        }
        return response()->json(["message" => "Mesajınız gönderildi..."]);
    }
}
