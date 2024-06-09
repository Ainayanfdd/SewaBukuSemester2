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
        <h1>Kategori Buku</h1>
    </div>

    <div class="bg-purple-300 flex justify-between px-10 w-full font-bold">
        <form id="categoryForm" method="GET" action="{{ route('kategori') }}">
            <select name="category" id="categorySelect"
                class="bg-purple-400 text-white font-bold py-2 px-4 rounded inline-flex items-center"
                onchange="this.form.submit()">
                <option value="SemuaBuku" {{ $category == 'SemuaBuku' ? 'selected' : '' }}>Semua Buku</option>
                <option value="Fiksi" {{ $category == 'Fiksi' ? 'selected' : '' }}>Fiksi</option>
                <option value="Non Fiksi" {{ $category == 'Non Fiksi' ? 'selected' : '' }}>Non Fiksi</option>
                <!-- <option value="Agama" {{ $category == 'Agama' ? 'selected' : '' }}>Agama</option>
                    <option value="Budaya" {{ $category == 'Budaya' ? 'selected' : '' }}>Budaya</option>
                    <option value="Referensi" {{ $category == 'Referensi' ? 'selected' : '' }}>Referensi</option> -->
            </select>
        </form>
    </div>

    <div id='bookContainer'
        class="container flex w-full text-center align-center justify-center items-center gap-3 flex-wrap max-w-screen-lg mx-auto">
        <!-- <div class="flex-2 w-64 bg-purple-200 p-4 m-3 rounded">
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
        </div> -->
        @foreach ($books as $buku)
            <div class="flex-2 w-64 bg-purple-200 p-4 m-3 rounded">
                <a href="{{ route('detailbuku', $buku->ISBN) }}">
                    <img src="{{ $buku->gambar }}" alt="{{ $buku->namaBuku }}"
                        class="p-4 align-center justify-center items-center mx-auto" style="height:300px;width:250px;">
                    <h2>{{ $buku->namaBuku }}</h2>
                    <h2>{{ $buku->harga }}/minggu</h2>
                    <h2>{{ $category }}</h2>
                </a>
            </div>
        @endforeach
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