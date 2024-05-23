<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Library</title>
    <style>
        .underline-content {
        text-decoration: underline;
        }
    </style>
</head>
<body>
@include('components/header')

<div class="bg-purple-600 flex justify-between px-10 w-full font-bold">
    <h1>Library</h1>
</div>

<div class="container">
    <div class="flex text-center align-center justify-center items-center gap-3 flex-wrap max-w-screen-lg mx-auto">
    <div class="flex-2 w-64 bg-purple-200 p-4 m-3 rounded">
        <img src="{{ asset('images/buku/spirit.png') }}" alt="Buku Spirit Demon" class="p-4 align-center justify-center items-center mx-auto" style="height:300px;width:250px;">
        <h2>10.000/minggu</h2>
        <h2>FIKSI</h2>
    </div>
    <div class="flex-2 w-64 bg-purple-200 p-4 m-3 rounded">
        <img src="{{ asset('images/buku/never.png') }}" alt="Buku Never Ending Sky" class="p-4 align-center justify-center items-center mx-auto" style="height:300px;width:250px;">
        <h2>10.000/minggu</h2>
        <h2>FIKSI</h2>
    </div>
    <div class="flex-2 w-64 bg-purple-200 p-4 m-3 rounded">
        <img src="{{ asset('images/buku/pulang.jpg') }}" alt="Buku Pulang" class="p-4 align-center justify-center items-center mx-auto" style="height:300px;width:250px;">
        <h2>10.000/minggu</h2>
        <h2>FIKSI</h2>
    </div>
    <div class="flex-2 w-64 bg-purple-200 p-4 m-3 rounded">
        <img src="{{ asset('images/buku/soul.png') }}" alt="Buku Soul" class="p-4 align-center justify-center items-center mx-auto" style="height:300px;width:250px;">
        <h2>10.000/minggu</h2>
        <h2>FIKSI</h2>
    </div>
    <div class="flex-2 w-64 bg-purple-200 p-4 m-3 rounded">
        <img src="{{ asset('images/buku/alone.png') }}" alt="Buku Alone" class="p-4 align-center justify-center items-center mx-auto" style="height:300px;width:250px;">
        <h2>10.000/minggu</h2>
        <h2>FIKSI</h2>
    </div>
    <div class="flex-2 w-64 bg-purple-200 p-4 m-3 rounded">
        <img src="{{ asset('images/buku/spirit.png') }}" alt="Buku Spirit Demon" class="p-4 align-center justify-center items-center mx-auto" style="height:300px;width:250px;">
        <h2>10.000/minggu</h2>
        <h2>FIKSI</h2>
    </div>
    <div class="flex-2 w-64 bg-purple-200 p-4 m-3 rounded">
        <img src="{{ asset('images/buku/alone.png') }}" alt="Buku Alone" class="p-4 align-center justify-center items-center mx-auto" style="height:300px;width:250px;">
        <h2>10.000/minggu</h2>
        <h2>FIKSI</h2>
    </div>
    <div class="flex-2 w-64 bg-purple-200 p-4 m-3 rounded">
        <img src="{{ asset('images/buku/never.png') }}" alt="Buku Never Ending Sky" class="p-4 align-center justify-center items-center mx-auto" style="height:300px;width:250px;">
        <h2>10.000/minggu</h2>
        <h2>FIKSI</h2>
    </div>
    <div class="flex-2 w-64 bg-purple-200 p-4 m-3 rounded">
        <img src="{{ asset('images/buku/soul.png') }}" alt="Buku Soul" class="p-4 align-center justify-center items-center mx-auto" style="height:300px;width:250px;">
        <h2>10.000/minggu</h2>
        <h2>FIKSI</h2>
    </div>
</div>

@include('components/footer')

</body>

</html>


