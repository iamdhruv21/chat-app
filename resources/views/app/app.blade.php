@extends('app.layouts.single-layout')

@section('content')
    <div class="w-[70%] bg-gray-900 p-2 flex h-screen overflow-hidden">
        <div class="w-[30%] border border-white py-6 px-2 h-full overflow-hidden rounded-tl-[3rem] rounded-bl-[3rem] bg-[#f9fafc]">
            <div class="w-[90%] my-3 px-3 py-2 mx-auto bg-[#dbdcff] rounded-xl flex items-center">
                <label for="search"></label>
                <button type="submit">
                    <svg fill="none" height="20" width="20" xmlns="http://www.w3.org/2000/svg">
                        <path clip-rule="evenodd" d="M12.258 11.667h.659l4.158 4.166-1.242 1.242-4.166-4.158v-.659l-.225-.233a5.393 5.393 0 0 1-3.525 1.308 5.417 5.417 0 1 1 5.416-5.416 5.393 5.393 0 0 1-1.308 3.525l.233.225zm-8.091-3.75a3.745 3.745 0 0 0 3.75 3.75 3.745 3.745 0 0 0 3.75-3.75 3.745 3.745 0 0 0-3.75-3.75 3.745 3.745 0 0 0-3.75 3.75z" fill="#111827" fill-rule="evenodd" opacity="1"/>
                    </svg>
                </button>
                <input class="w-[90%] text-xl mx-2 outline-none bg-transparent text-gray-900 border-none placeholder:text-gray-900" name="search" id="search" placeholder="Search" type="text"/>
            </div>

            <div class="w-full p-2 h-[90%]">
                @foreach($chats as $chat)
                    <div class="w-full cursor-pointer p-2 my-2 h-16 rounded-xl flex justify-between hover:bg-[#EEEEF8]">
                        <div class="w-[17%] rounded-lg overflow-hidden grid place-content-center">
{{--                            <img src="{{ $chat['image'] }}">--}}
                            <img src="{{ asset($chat['image']) }}" alt="image">
                        </div>
                        <div class="w-[68%]">
                            <p class="font-bold"> {{ $chat['name'] }} </p>
                            <p class="text-sm text-gray-500">{{ $chat['last_message'] }}</p>
                        </div>
                        <div class="w-[12%]">
                            <p class="text-gray-500 text-center">4m</p>
                            @if($chat['unread_count'] > 0)
                                <div class="w-5 h-5 font-bold rounded-2xl text-center my-0 mx-auto bg-[#FF7A55] text-white">{{ $chat['unread_count'] }}</div>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="w-[70%] p-4 h-full bg-[#EEEEF8] overflow-hidden rounded-tr-[3rem] rounded-br-[3rem]">
            <div class="w-[95%] mx-auto h-20 flex justify-between py-2 px-4 select-none">
                <div>
                    <p class="text-3xl font-semibold">Design Chats</p>
                    <p class="text-gray-500">23 members, 10 online</p>
                </div>
                <div class="flex justify-center items-center gap-3">
                    <svg class="cursor-pointer" width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path d="M16.6725 16.6412L21 21M19 11C19 15.4183 15.4183 19 11 19C6.58172 19 3 15.4183 3 11C3 6.58172 6.58172 3 11 3C15.4183 3 19 6.58172 19 11Z" stroke="#bdbcbc" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </g>
                    </svg>

                    <svg class="cursor-pointer" width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path d="M14.3308 15.9402L15.6608 14.6101C15.8655 14.403 16.1092 14.2384 16.3778 14.1262C16.6465 14.014 16.9347 13.9563 17.2258 13.9563C17.517 13.9563 17.8052 14.014 18.0739 14.1262C18.3425 14.2384 18.5862 14.403 18.7908 14.6101L20.3508 16.1702C20.5579 16.3748 20.7224 16.6183 20.8346 16.887C20.9468 17.1556 21.0046 17.444 21.0046 17.7351C21.0046 18.0263 20.9468 18.3146 20.8346 18.5833C20.7224 18.8519 20.5579 19.0954 20.3508 19.3L19.6408 20.02C19.1516 20.514 18.5189 20.841 17.8329 20.9541C17.1469 21.0672 16.4427 20.9609 15.8208 20.6501C10.4691 17.8952 6.11008 13.5396 3.35083 8.19019C3.03976 7.56761 2.93414 6.86242 3.04914 6.17603C3.16414 5.48963 3.49384 4.85731 3.99085 4.37012L4.70081 3.65015C5.11674 3.23673 5.67937 3.00464 6.26581 3.00464C6.85225 3.00464 7.41488 3.23673 7.83081 3.65015L9.40082 5.22021C9.81424 5.63615 10.0463 6.19871 10.0463 6.78516C10.0463 7.3716 9.81424 7.93416 9.40082 8.3501L8.0708 9.68018C8.95021 10.8697 9.91617 11.9926 10.9608 13.04C11.9994 14.0804 13.116 15.04 14.3008 15.9102L14.3308 15.9402Z" stroke="#bdbcbc" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </g>
                    </svg>

                    <svg class="cursor-pointer" width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path d="M12 12H12.01M12 6H12.01M12 18H12.01M13 12C13 12.5523 12.5523 13 12 13C11.4477 13 11 12.5523 11 12C11 11.4477 11.4477 11 12 11C12.5523 11 13 11.4477 13 12ZM13 18C13 18.5523 12.5523 19 12 19C11.4477 19 11 18.5523 11 18C11 17.4477 11.4477 17 12 17C12.5523 17 13 17.4477 13 18ZM13 6C13 6.55228 12.5523 7 12 7C11.4477 7 11 6.55228 11 6C11 5.44772 11.4477 5 12 5C12.5523 5 13 5.44772 13 6Z" stroke="#bdbcbc" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </g>
                    </svg>
                </div>
            </div>

            <div class="w-[95%] mx-auto h-[80%] p-4 flex flex-col justify-end overflow-y-scroll">
                <p class="receive">This is the message of my life line i</p>
                <p class="send">This is the message of my life line i Lorem ipsum dolor sit amet, consectetur elit. Dicta provident.</p>
                <p class="send">I Love you Babu 💕💖</p>
                <p class="receive">Ok Baby😘</p>
                <p class="send">Good Night Baby😘😘</p>
                <p class="receive">This is the message of my life line i</p>
                <p class="send">This is the message of my life line i Lorem ipsum dolor sit amet, consectetur elit. Dicta provident.</p>
                <p class="send">I Love you Babu 💕💖</p>
                <p class="receive">Ok Baby😘</p>
                <p class="send">Good Night Baby😘😘</p>
                <p class="receive">This is the message of my life line i</p>
                <p class="send">This is the message of my life line i Lorem ipsum dolor sit amet, consectetur elit. Dicta provident.</p>
                <p class="send">I Love you Babu 💕💖</p>
                <p class="receive">Ok Baby😘</p>
                <p class="send">Good Night Baby😘😘</p>

            </div>

            <div class="w-[95%] py-2 px-4 mb-2 mx-auto h-14 bg-[#dbdcff] rounded-2xl flex justify-evenly items-center">
                <svg class="cursor-pointer" width="30px" height="30px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>Attachment</title> <g id="Attachment" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <rect id="Container" x="0" y="0" width="24" height="24"> </rect> <path d="M17,17.5 L8.25,17.5 C5.35050506,17.5 3,15.1494949 3,12.25 C3,9.35050506 5.35050506,7 8.25,7 L18.5,7 C20.4329966,7 22,8.56700338 22,10.5 C22,12.4329966 20.4329966,14 18.5,14 L8.25,14 C7.28350169,14 6.5,13.2164983 6.5,12.25 C6.5,11.2835017 7.28350169,10.5 8.25,10.5 L18.5,10.5 L18.5,10.5" id="shape" stroke="#9091B9" stroke-width="2" stroke-linecap="round" stroke-dasharray="0,0" transform="translate(12.500000, 12.250000) rotate(-45.000000) translate(-12.500000, -12.250000) "> </path> </g> </g></svg>

                <label for="search"></label>
                <input class="w-[80%] text-xl outline-none bg-transparent text-gray-900 border-none placeholder:text-gray-900" name="search" id="search" placeholder="Your Message" type="text"/>

                <svg class="cursor-pointer" width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M19 10V12C19 15.866 15.866 19 12 19M5 10V12C5 15.866 8.13401 19 12 19M12 19V22M8 22H16M12 15C10.3431 15 9 13.6569 9 12V5C9 3.34315 10.3431 2 12 2C13.6569 2 15 3.34315 15 5V12C15 13.6569 13.6569 15 12 15Z" stroke="#9091B9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>

                <button type="submit">
                    <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M19.2111 2.06722L3.70001 5.94499C1.63843 6.46039 1.38108 9.28612 3.31563 10.1655L8.09467 12.3378C9.07447 12.7831 10.1351 12.944 11.1658 12.8342C11.056 13.8649 11.2168 14.9255 11.6622 15.9053L13.8345 20.6843C14.7139 22.6189 17.5396 22.3615 18.055 20.3L21.9327 4.78886C22.3437 3.14517 20.8548 1.6563 19.2111 2.06722ZM8.92228 10.517C9.85936 10.943 10.9082 10.9755 11.8474 10.6424C12.2024 10.5165 12.5417 10.3383 12.8534 10.1094C12.8968 10.0775 12.9397 10.0446 12.982 10.0108L15.2708 8.17974C15.6351 7.88831 16.1117 8.36491 15.8202 8.7292L13.9892 11.018C13.9553 11.0603 13.9225 11.1032 13.8906 11.1466C13.6617 11.4583 13.4835 11.7976 13.3576 12.1526C13.0244 13.0918 13.057 14.1406 13.4829 15.0777L15.6552 19.8567C15.751 20.0673 16.0586 20.0393 16.1147 19.8149L19.9925 4.30379C20.0372 4.12485 19.8751 3.96277 19.6962 4.00751L4.18509 7.88528C3.96065 7.94138 3.93264 8.249 4.14324 8.34473L8.92228 10.517Z" fill="#9091B9"></path> </g></svg>
                </button>
            </div>
        </div>
    </div>
@endsection


