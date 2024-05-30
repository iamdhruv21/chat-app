<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function home(Request $request): View
    {
        $chats = [
            [
                'image' => 'image/user2.jpg',
                'name' => 'Arpit Patidar',
                'last_message' => 'Hey there, sup ?',
                'unread_count' => 2
            ],
            [
                'image' => 'image/user4.jpg',
                'name' => 'Dhruv Kothari',
                'last_message' => 'Hey there, sup ?',
                'unread_count' => 5
            ],
            [
                'image' => 'image/user6.jpg',
                'name' => 'Arpit Patidar',
                'last_message' => 'Hey there, sup ?',
                'unread_count' => 3
            ],
            [
                'image' => 'image/user.jpg',
                'name' => 'Arpit Patidar',
                'last_message' => 'Hey there, sup ?',
                'unread_count' => 1
            ],
            [
                'image' => 'image/user3.jpg',
                'name' => 'Arpit Patidar',
                'last_message' => 'Hey there, sup ?',
                'unread_count' => 0
            ],
            [
                'image' => 'image/user7.jpg',
                'name' => 'Arpit Patidar',
                'last_message' => 'Hey there, sup ?',
                'unread_count' => 0
            ],
        ];

        return view('app.app', ['chats' => $chats]);
    }

    public function login(Request $request): View
    {
        return view('auth.login');
    }

    public function register(Request $request): View
    {
        return view('auth.register');
    }
}
