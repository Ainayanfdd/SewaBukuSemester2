<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.0.2/dist/flowbite.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.11.1/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    @php
        $user = Auth::user();
    @endphp
    <header>
        <div class="grid grid-rows-2">
            <div class="bg-purple-600 flex justify-between px-10">
                <div class="drawer">
                    <input id="my-drawer" type="checkbox" class="drawer-toggle" />
                    <div class="drawer-content">
                        <!-- Page content here -->
                        <label for="my-drawer"><svg width="60" height="40" viewBox="0 0 94 65" fill="none"
                                xmlns="http://www.w3.org/2000/svg" class="mt-8 bg-violet-500 hover:bg-violet-700">
                                <path d="M0 0H94V18H0V0Z" fill="black" fill-opacity="0.55" />
                                <path d="M0 24H94V41H0V24Z" fill="black" fill-opacity="0.55" />
                                <path d="M0 47H94V65H0V47Z" fill="black" fill-opacity="0.55" />
                            </svg>
                        </label>
                    </div>
                    <div class="drawer-side">
                        <label for="my-drawer" aria-label="close sidebar" class="drawer-overlay"></label>
                        <ul class="menu p-4 w-80 min-h-full bg-base-200 text-base-content">
                            <!-- Sidebar content here -->
                            @if(!$user)
                                <a><img src="images/buku/image.png" class="size-24"><b>Melody</b></a>
                            @else
                                <a><img src="images/buku/image.png" class="size-24"><b>{{$user->namaDepan}}
                                        {{$user->namaBelakang}}</b></a>
                            @endif
                            <li><a href="{{route('contact')}}">Note</a></li>
                            <li><a href="{{route('legalandhelp')}}">Legal and Help</a></li>
                            <li><a href="{{route('actionlogout')}}">Logout</a></li>
                        </ul>
                    </div>
                </div>
                <div class="flex items-center justify-center px-96 text-white font-bold">
                    <img src="{{ asset('images/buku/logointelek.png') }}" alt="Intelek" style="height:60px;width:90px;">
                    <h1>INTELEK</h1>
                </div>
                <div class="flex items-center justify-center">
                    @if(!$user)
                        <a href="{{route('login')}}">
                            <button
                                class="bg-blue-400 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded flex items-center">MASUK
                            </button>
                        </a>
                    @else
                        <span class="ml-auto flex items-center">Hello,&nbsp;<h2 class="font-bold">{{$user->namaDepan}}!</h2>
                            </span>
                        <!-- <a href="{{route('actionlogout')}}">
                            <button class="bg-blue-400 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded flex items-center ml-5">LOGOUT</button>
                        </a> -->
                    @endif
                </div>
            </div>
            <nav>
                <div class="grid grid-cols-5 bg-purple-300 font-bold">
                    <div class="text-center items-center justify-center p-2 bg-violet-200 hover:bg-violet-700">
                        <a href="/kategori">
                            <img src="{{ asset('images/buku/kategori.png') }}" alt="Kategori"
                                style="height: 70px;width: 70px;"
                                class="p-3 align-center justify-center items-center mx-auto">
                            Kategori</a>
                    </div>
                    <div class="text-center items-center justify-center p-2 bg-violet-200 hover:bg-violet-700">
                        <a href="/wishlist">
                            <img src="{{ asset('images/buku/wishlist.png') }}" alt="Wishlist"
                                style="height: 70px;width: 70px;"
                                class="p-3 align-center justify-center items-center mx-auto">
                            Wishlist</a>
                    </div>
                    <div class="text-center items-center justify-center p-2 bg-violet-200 hover:bg-violet-700">
                        <a href="/library">
                            <img src="{{ asset('images/buku/library.png') }}" alt="Library"
                                style="height: 70px;width: 70px;"
                                class="p-3 align-center justify-center items-center mx-auto">
                            Library</a>
                    </div>
                    <div class="text-center items-center justify-center p-2 bg-violet-200 hover:bg-violet-700">
                        <a href="/history">
                            <img src="{{ asset('images/buku/history.png') }}" alt="History"
                                style="height: 70px;width: 70px;"
                                class="p-3 align-center justify-center items-center mx-auto">
                            History</a>
                    </div>
                    <div class="text-center items-center justify-center p-2 bg-violet-200 hover:bg-violet-700">
                        <a href="/notify">
                            <img src="{{ asset('images/buku/notify.png') }}" alt="Notify"
                                style="height: 70px;width: 70px;"
                                class="p-3 align-center justify-center items-center mx-auto">
                            Notify</a>
                    </div>
                </div>
            </nav>
    </header>

    <script>
        var msg = '{{Session::get('alert')}}';
        var exist = '{{Session::has('alert')}}';
        if (exist) {
            alert(msg);
        }
    </script>

</body>

</html>