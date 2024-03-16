<?php

namespace App\Services;

use App\Gateways\TelegramGateway;

/**
 * Class TelegramService
 * @package App\Services
 */
class TelegramService
{

    /**
     * Sends a message via the Telegram Bot API.
     *
     * @param int|string $chat_id The unique identifier for the target chat or username of the target channel.
     * @param int|null $message_thread_id Optional. Identifier of the message thread. If unspecified, the message will be sent to the main thread.
     * @param string $text The text of the message to be sent.
     * @param string|null $parse_mode Optional. Mode for parsing entities in the message text.
     * @param array|null $entities Optional. List of special entities that appear in the text, which can be specified instead of parse_mode.
     * @param array|null $link_preview_options Optional. Options for message link previews.
     * @param bool|null $disable_notification Optional. Disables notification for the message.
     * @param bool|null $protect_content Optional. Protects the content of the message from being intercepted by bots.
     * @param array|null $reply_parameters Optional. Additional parameters for replying to a message.
     * @param array|null $reply_markup Optional. Markup for replying to the message.
     * @return mixed The result of the API call.
     */
    public static function sendMessage($chat_id, $message_thread_id = null, $text, $parse_mode = null, $entities=null, $link_preview_options=null, $disable_notification=null, $protect_content=null, $reply_parameters=null, $reply_markup=null)
    {
        return TelegramGateway::send([
            'chat_id' => $chat_id,
            'message_thread_id' => $message_thread_id,
            'text' => $text,
            'parse_mode' => $parse_mode,
            'entities' => $entities,
            'link_preview_options' => $link_preview_options,
            'disable_notification' => $disable_notification,
            'protect_content' => $protect_content,
            'reply_parameters' => $reply_parameters,
            'reply_markup' => $reply_markup,
        ], 'sendMessage');
    }
}
