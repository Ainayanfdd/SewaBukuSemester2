<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.0.2/dist/flowbite.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.11.1/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>pembayaran</title>
<body>
    <div class="navbar bg-purple-100 flex justify-center items-center">
    <a class="btn btn-ghost text-xl flex items-center">Borrow</a>
    </div>
    <div class="container flex h-screen">
    <div class="image-section w-1/2 bg-cover bg-right relative" style="background-image: url('/images/login.jpeg')"></div>
    <div class="w-full bg-gray-200 rounded-md p-2">
        <label for="kategori" class="mb-2">kategori:</label>
        <input type="text" id="kategori" name="kategori" placeholder="kategori" class="w-full bg-violet-400 border-violet-700 hover:bg-violet-500 rounded-md p-2 focus:outline-none focus:border-violet-700 text-white" required>
        <label for="judul" class="mb-2">judul:</label>
        <input type="text" id="judul" name="judul" placeholder="Judul" class="w-full bg-violet-400 border-violet-700 hover:bg-violet-500 rounded-md p-2 focus:outline-none focus:border-violet-700 text-white" required>
        <label for="pengarang" class="mb-2">Pengarang:</label>
        <input type="text" id="pengarang" name="pengarang" placeholder="Pengarang" class="w-full bg-violet-400 border-violet-700 hover:bg-violet-500 rounded-md p-2 focus:outline-none focus:border-violet-700 text-white" required>
        <label for="penerbit" class="mb-2">Penerbit:</label>
        <input type="text" id="penerbit" name="penerbit" placeholder="Penerbit" class="w-full bg-violet-400 border-violet-700 hover:bg-violet-500 rounded-md p-2 focus:outline-none focus:border-violet-700 text-white" required>
        <label for="isbn" class="mb-2">ISBN:</label>
        <input type="text" id="isbn" name="isbn" placeholder="ISBN" class="w-full bg-violet-400 border-violet-700 hover:bg-violet-500 rounded-md p-2 focus:outline-none focus:border-violet-700 text-white" required>
        <label for="jumlah" class="mb-2">Jumlah:</label>
        <input type="number" id="jumlah" name="jumlah" placeholder="Jumlah" class="w-full bg-violet-400 border-violet-700 hover:bg-violet-500 rounded-md p-2 focus:outline-none focus:border-violet-700 text-white" required>
        <label for="harga" class="mb-2">Harga:</label>
        <input type="text" id="harga" name="harga" placeholder="Harga" class="w-full bg-violet-400 border-violet-700 hover:bg-violet-500 rounded-md p-2 focus:outline-none focus:border-violet-700 text-white" required>
        <label for="keterangan" class="mb-2">keterangan:</label>
        <input type="text" id="keterangan" name="keterangan" placeholder="keterangan    " class="w-full bg-violet-400 border-violet-700 hover:bg-violet-500 rounded-md p-2 focus:outline-none focus:border-violet-700 text-white" required>
        </div>
    @include('midtrans')
</div>

</body>