<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.0.2/dist/flowbite.css" rel="stylesheet">
    <style>
        .underline-content {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <header>
        <div class="grid grid-rows-1">
            <div class="bg-purple-600 flex justify-between px-10 text-white">
                <div class="flex items-center justify-center text-white font-bold">
                    <img src="{{ asset('images/intelek.png') }}" alt="Intelek" style="height:80px;width:80px;">
                    <h1>INTELEK</h1>
                </div>
                <div class="flex items-center justify-center">
                    @if (Auth::check())
                        <h1>{{Auth::user()->namaDepan}}</h1>
                    @else
                        <h1>Melody</h1>
                    @endif
                    <img src="{{ asset('images/buku/image.png') }}" alt="Photo Profile" class="p-1"
                        style="height:40px;width:40px;">
                    <!-- <img src="{{ asset('images/dropdown.png') }}" alt="Dropdown" style="height:20px;width:20px;"> -->

                    <button id="dropdownDefaultButton1" data-dropdown-toggle="dropdown1"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                        type="button">
                        <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 4 4 4-4" />
                        </svg>
                    </button>

                    <!-- Dropdown menu -->
                    <div id="dropdown1"
                        class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                            aria-labelledby="dropdownDefaultButton1">
                            <li>
                                <a href="{{ route('actionlogout')}}"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
    </header>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <script>
        var msg = '{{Session::get('alert')}}';
        var exist = '{{Session::has('alert')}}';
        if (exist) {
            alert(msg);
        }
    </script>
</body>

</html>