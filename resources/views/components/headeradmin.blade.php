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
                    <h1>Admin</h1>
                    <img src="{{ asset('images/buku/image.png') }}" alt="Photo Profile" class="p-1"
                        style="height:40px;width:40px;">
                    <img src="{{ asset('images/dropdown.png') }}" alt="Dropdown" style="height:20px;width:20px;">

                </div>
            </div>
    </header>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
</body>

</html>