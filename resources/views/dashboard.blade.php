<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.0.2/dist/flowbite.css" rel="stylesheet">
    
<link href="https://cdn.jsdelivr.net/npm/daisyui@4.11.1/dist/full.min.css" rel="stylesheet" type="text/css" />
<script src="https://cdn.tailwindcss.com"></script>

    <title>Sewa Buku Online</title>
</head>
<body>
    @include('components/header')
    <div class="flex justify-between bg-purple-600 px-10 w-full font-bold">
        <div class="relative">
            <button class="bg-purple-700 text-white font-bold py-2 px-4 rounded inline-flex items-center">
                <span>Kategori Buku</span>
                <svg class="fill-current h-4 w-4 ml-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10 14l-7-7 1.5-1.5L10 11l5.5-5.5L17 7z"/>
                </svg>
            </button>
        </div>
    </div>
    
    <div class="carousel w-full">
  <div id="item1" class="carousel-item w-full">
    <img src="images/buku/carousel1.png" class="w-full" />
  </div> 
  <div id="item2" class="carousel-item w-full">
    <img src="images/buku/carousel2.png" class="w-full" />
  </div> 
  <div id="item3" class="carousel-item w-full">
    <img src="images/buku/carousel3.png" class="w-full" />
  </div> 
</div> 
<div class="flex justify-center w-full py-2 gap-2">
  <a href="#item1" class="btn btn-xs">1</a> 
  <a href="#item2" class="btn btn-xs">2</a> 
  <a href="#item3" class="btn btn-xs">3</a> 
</div>
<button class="bg-purple-500 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded">
    Tren
    </button>
    <div class="flex flex-wrap justify-center mt-8 space-x-4 py-12 space-y-6">
        <div class="w-64 bg-purple-200 p-4 rounded">
            <img src="{{ asset('images/buku/soul.png') }}" alt="Buku Soul" class="mx-auto" style="height:300px;width:250px;">
            <h2 class="text-center mt-4">10.000/minggu</h2>
            <h2 class="text-center">FIKSI</h2>
        </div>
        <div class="w-64 bg-purple-200 p-4 rounded">
            <img src="{{ asset('images/buku/alone.png') }}" alt="Buku Alone" class="mx-auto" style="height:300px;width:250px;">
            <h2 class="text-center mt-4">10.000/minggu</h2>
            <h2 class="text-center">FIKSI</h2>
        </div>
        <div class="w-64 bg-purple-200 p-4 rounded">
            <img src="{{ asset('images/buku/spirit.png') }}" alt="Buku Spirit Demon" class="mx-auto" style="height:300px;width:250px;">
            <h2 class="text-center mt-4">10.000/minggu</h2>
            <h2 class="text-center">FIKSI</h2>
        </div>
        <div class="w-64 bg-purple-200 p-4 rounded">
            <img src="{{ asset('images/buku/alone.png') }}" alt="Buku Alone" class="mx-auto" style="height:300px;width:250px;">
            <h2 class="text-center mt-4">10.000/minggu</h2>
            <h2 class="text-center">FIKSI</h2>
        </div>
        <div class="w-64 bg-purple-200 p-4 rounded">
            <img src="{{ asset('images/buku/never.png') }}" alt="Buku Never Ending Sky" class="mx-auto" style="height:300px;width:250px;">
            <h2 class="text-center mt-4">10.000/minggu</h2>
            <h2 class="text-center">FIKSI</h2>
        </div>
        <div class="w-64 bg-purple-200 p-4 rounded">
            <img src="{{ asset('images/buku/soul.png') }}" alt="Buku Soul" class="mx-auto" style="height:300px;width:250px;">
            <h2 class="text-center mt-4">10.000/minggu</h2>
            <h2 class="text-center">FIKSI</h2>
        </div>
    </div>
</body>
@include('components/footer')
</html>
