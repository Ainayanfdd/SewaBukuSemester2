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
    <center>
        <div
            class="container mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-5 justify-center items-center text-center self-center w-full">
            @foreach ($bukuDipinjam as $data)
                <div class="bg-white shadow-md rounded-lg my-4">
                    <div class="p-4">
                        <img src="{{$data->gambar}}" alt="{{$data->nama_buku}}" class="w-32 h-32 mx-auto rounded-full">
                    </div>
                    <div class="p-4">
                        <h1 class="text-xl font-bold text-center text-gray-800">Judul buku: {{ $data->judulBuku }}</h1>
                        <h2 class="text-md text-center text-gray-600">ISBN: {{ $data->ISBN }}</h2>
                        <h2 class="text-md text-center text-gray-600">Tanggal Peminjaman: {{ $data->tanggalPinjam }}</h2>
                        <h2 class="text-md text-center text-gray-600">Tanggal Akhir Deadline: {{ $data->tanggalAkhir }}</h2>
                        <h2 class="text-md text-center text-gray-600">Status Peminjaman: {{ $data->status }}</h2>
                        <div class="mt-4">
                            <p class="text-sm text-gray-700 font-bold">Harga: {{ $data->biayaPinjam }}</p>
                        </div>
                        <div class="mt-4">
                            <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                                Buka Buku
                            </button>
                        </div>

                        <div class="text-center mt-4">
                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                Perpanjang
                            </button>
                            <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                                Hapus
                            </button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </center>

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
    </div>

    @include('components/footer')

</body>

</html>