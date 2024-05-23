<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Kategori</title>
    <style>
        .underline-content {
        text-decoration: underline;
        }
    </style>
</head>
<body>
@include('components/header')

<div class="bg-purple-600 flex justify-between px-10 w-full font-bold">
    <div class="relative" x-data="{ open: false }">
        <button @click="open = !open" class="bg-purple-700 text-white font-bold py-2 px-4 rounded inline-flex items-center">
            <span>Kategori Buku</span>
            <svg class="fill-current h-4 w-4 ml-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path x-show="!open" fill-rule="evenodd" clip-rule="evenodd" d="M10 14l-7-7 1.5-1.5L10 11l5.5-5.5L17 7z"/>
                <path x-show="open" fill-rule="evenodd" clip-rule="evenodd" d="M3 6.5L10 13l7-6.5L17.5 8 10 15.5 2.5 8z"/>
            </svg>
        </button>
        <ul x-show="open" @click.away="open = false" class="absolute text-gray-700 pt-1 w-full bg-white border rounded mt-1">
            <li class="hover:bg-gray-100 py-2 px-4 block whitespace-no-wrap">Fiksi</li>
            <li class="hover:bg-gray-100 py-2 px-4 block whitespace-no-wrap">Non Fiksi</li>
            <li class="hover:bg-gray-100 py-2 px-4 block whitespace-no-wrap">Agama</li>
            <li class="hover:bg-gray-100 py-2 px-4 block whitespace-no-wrap">Budaya</li>
            <li class="hover:bg-gray-100 py-2 px-4 block whitespace-no-wrap">Referensi</li>
        </ul>
    </div>
</div>
<div class="bg-purple-300 flex justify-between px-10 w-full font-bold">
    <h1>Fiksi</h1>
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

<script src="https://cdn.jsdelivr.net/npm/alpinejs@2.x.x/dist/alpine.min.js"></script>
<script>
    // Add Alpine.js CDN before this script if you haven't already
    window.addEventListener('DOMContentLoaded', () => {
        const dropdownButtons = document.querySelectorAll('[x-data] [x-show]');
        dropdownButtons.forEach(button => {
            button.addEventListener('click', event => {
                event.stopPropagation(); // Prevent click event from propagating to parent elements
            });
        });
    });
</script>
</body>
</body>

</html>


