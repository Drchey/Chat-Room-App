<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use models
use App\Models\ChatRoom;
use App\Models\Chats;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

// use Auth

class ChatController extends Controller
{
    public function chat_rooms(Request $request)
    {
        return ChatRoom::latest()->get();
    }

    public function chats(Request $request, $room_id)
    {
        return Chats::where('chat_room_id', $room_id)->with('user')->get();
    }

    public function messages(Request $request, $room_id)
    {
            // $chat = new Chats;
            // $chat->user_id = Auth::id();
            // $chat->chat_room_id = $room_id;

            // $chat->message = $request->message();
            // $chat->save();
            return ['message' => 'Hero'];


    }

}
