<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.0.2/dist/flowbite.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.11.1/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Pembayaran</title>

<body>
    <div class="navbar bg-purple-100 flex justify-center items-center">
        <a class="btn btn-ghost text-xl flex items-center">Borrow</a>
    </div>
    <div class="flex max-h-24">
        <div class="w-1/2">
            <img src="/images/form.png">
        </div>
        <div class="w-1/2">
            <form class="bg-gray-200 p-4">
                <!-- <div class="mb-4">
                    <label for="kategori" class="block text-gray-700">Kategori:</label>
                    <input type="text" id="kategori" name="kategori" 
                        class="w-full bg-white border-gray-300 rounded-md p-2 focus:outline-none focus:border-violet-700"
                        required>
                </div> -->
                <div class="mb-4">
                    <label for="nama_buku" class="block text-gray-700">Judul:</label>
                    <input type="text" id="nama_buku" name="nama_buku" value="{{$BeliBuku->nama_buku}}"
                        class="w-full bg-white border-gray-300 rounded-md p-2 focus:outline-none focus:border-violet-700"
                        required disabled>
                </div>
                <div class="mb-4">
                    <label for="pengarang" class="block text-gray-700">Pengarang:</label>
                    <input type="pengarang" id="pengarang" name="pengarang" value="{{$BeliBuku->pengarang}}"
                        class="w-full bg-white border-gray-300 rounded-md p-2 focus:outline-none focus:border-violet-700"
                        required disabled>
                </div>
                <div class="mb-4">
                    <label for="penerbit" class="block text-gray-700">Penerbit:</label>
                    <input id="penerbit" name="penerbit" value="{{$BeliBuku->penerbit}}"
                        class="w-full bg-white border-gray-300 rounded-md p-2 focus:outline-none focus:border-violet-700"
                        required disabled>
                </div>
                <div class="mb-4">
                    <label for="pesan" class="block text-gray-700">ISBN:</label>
                    <input type="text" id="text" name="ISBN" value="{{$BeliBuku->ISBN}}"
                        class="w-full bg-white border-gray-300 rounded-md p-2 focus:outline-none focus:border-violet-700"
                        required disabled>
                </div>
                <div class="mb-4">
                    <label for="harga" class="block text-gray-700">Harga:</label>
                    <input type="text" id="harga" name="harga" value="{{$BeliBuku->harga}}"
                        class="w-full bg-white border-gray-300 rounded-md p-2 focus:outline-none focus:border-violet-700"
                        required disabled>
                </div>
            </form>
            @include('midtrans')
        </div>
    </div>

</body>