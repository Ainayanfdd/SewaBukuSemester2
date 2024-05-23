<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>History</title>
    <style>
        .underline-content {
        text-decoration: underline;
        }
    </style>
</head>
<body>
@include('components/header')

<div class="bg-purple-600 flex justify-between px-10 w-full font-bold">
    <h1>History</h1>
</div>

<div class="container">
    <div class="grid grid-cols-2 gap-4  text-center align-center justify-center items-center">
        <div class="grid bg-purple-200 p-4 m-4">
            <img src="{{ asset('images/buku/pulang.jpg') }}" alt="Buku Pulang" class="p-4 align-center justify-center items-center mx-auto">
        </div>

        <div class="p-4 h-full">
            <div class="grid bg-purple-400 p-4 h-full">
                <h2 class="pt-5 font-bold">01-07 Maret 2024</h2>
                <h2>Judul: Pulang</h2>
                <h2>Pengarang: Tere Liye</h2>
                <h2>ISBN: 3312345</h2>
            </div>
        </div>
    </div>
    <hr>
    <div style="height:300px;"></div>
</div>


@include('components/footer')

</body>

</html>


