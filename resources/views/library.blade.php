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

    <h1 class="font-bold text-xl mt-5 text-center">Buku yang saat ini dipinjam:</h1>
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
                    @if ($data->status == "Dipinjam")
                        <div class="mt-4">
                            <a href="{{$data->data_buku}}" class="block">
                                <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                                    Buka Buku
                                </button>
                            </a>    
                        </div>
                    @elseif ($data->status == "Habis")
                        <div class="mt-4">
                            <button class="bg-red-300 hover:bg-red-600 text-white font-bold py-2 px-4 rounded" disabled>
                                Habis
                            </button>
                        </div>
                    @else
                        <div class="mt-4">
                            <button class="bg-blue-300 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded" disabled>
                                Pembayaran Gagal
                            </button>
                        </div>
                    @endif
                    <div class="text-center mt-4">
                        <a href="{{ route('detailbuku', $data->ISBN) }}">
                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                Perpanjang/Pinjam Lagi
                            </button>
                        </a>
                        <a href={{route('waktuHabis', ['Pinjam_ID' => $data->Pinjam_ID])}}>
                            <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                                Hapus
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <h1 class="font-bold text-xl mt-5 text-center">Buku yang pernah dipinjam:</h1>
    <div
        class="container mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-5 justify-center items-center text-center self-center w-full">
        @foreach ($bukuLampau as $data)
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
                    @if ($data->status == "Dipinjam")
                        <div class="mt-4">
                            <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                                Buka Buku
                            </button>
                        </div>
                    @elseif ($data->status == "Habis")
                        <div class="mt-4">
                            <button class="bg-red-300 hover:bg-red-600 text-white font-bold py-2 px-4 rounded" disabled>
                                Habis
                            </button>
                        </div>
                    @else
                        <div class="mt-4">
                            <button class="bg-blue-300 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded" disabled>
                                Pembayaran Gagal
                            </button>
                        </div>
                    @endif
                    <div class="text-center mt-4">
                        <a href="{{ route('detailbuku', $data->ISBN) }}">
                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                Perpanjang/Pinjam Lagi
                            </button>
                        </a>
                        <a href={{route('waktuHabis', ['Pinjam_ID' => $data->Pinjam_ID])}}>
                            <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                                Hapus
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <h1 class="font-bold text-xl mt-5 text-center">Buku yang perlu dibayar:</h1>
    <div
        class="container mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-5 justify-center items-center text-center self-center w-full">
        @foreach ($bukuDiproses as $data)
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
                    @if ($data->status == "Dipinjam")
                        <div class="mt-4">
                            <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                                Buka Buku
                            </button>
                        </div>
                    @elseif ($data->status == "Habis")
                        <div class="mt-4">
                            <button class="bg-red-300 hover:bg-red-600 text-white font-bold py-2 px-4 rounded" disabled>
                                Habis
                            </button>
                        </div>
                    @else
                        <div class="mt-4">
                            <button class="bg-blue-300 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded" disabled>
                                Pembayaran Gagal
                            </button>
                        </div>
                    @endif
                    <div class="text-center mt-4">
                        <a href="{{ route('detailbuku', $data->ISBN) }}">
                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                Perpanjang/Pinjam Lagi
                            </button>
                        </a>
                        <a href={{route('waktuHabis', ['Pinjam_ID' => $data->Pinjam_ID])}}>
                            <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                                Hapus
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    @include('components/footer')

</body>

</html>