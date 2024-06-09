<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pembayaran</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.0.2/dist/flowbite.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.11.1/dist/full.min.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <div class="navbar bg-purple-100 flex justify-center items-center">
        <a class="btn btn-ghost text-xl flex items-center">Borrow</a>
    </div>
    <div class="flex max-h-24">
        <div class="w-1/2" >
            <img src="/images/form.png">
        </div>
        <div class="w-1/2">
            <form class="bg-gray-200 p-4">
            <div class="mb-4">
                    <label for="kategori" class="block text-gray-700">Kategori:</label>
                    <input type="text" id="kategori" name="kategori" class="w-full bg-white border-gray-300 rounded-md p-2 focus:outline-none focus:border-violet-700" required>
                </div>
                <div class="mb-4">
                    <label for="nama" class="block text-gray-700">Judul:</label>
                    <input type="text" id="nama" name="nama" class="w-full bg-white border-gray-300 rounded-md p-2 focus:outline-none focus:border-violet-700" required>
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-gray-700">Pengarang:</label>
                    <input type="email" id="email" name="email" class="w-full bg-white border-gray-300 rounded-md p-2 focus:outline-none focus:border-violet-700" required>
                </div>
                <div class="mb-4">
                    <label for="pesan" class="block text-gray-700">Penerbit:</label>
                    <textarea id="pesan" name="pesan" class="w-full bg-white border-gray-300 rounded-md p-2 focus:outline-none focus:border-violet-700" required></textarea>
                </div>
                <div class="mb-4">
                    <label for="pesan" class="block text-gray-700">ISBN:</label>
                    <input type="text" id="text" name="ISBN" class="w-full bg-white border-gray-300 rounded-md p-2 focus:outline-none focus:border-violet-700" required>
                </div>
                <div class="mb-4">
                    <label for="pesan" class="block text-gray-700">Jumlah:</label>
                    <input type="number" id="text" name="jumlah" class="w-full bg-white border-gray-300 rounded-md p-2 focus:outline-none focus:border-violet-700" required>
                </div>
                <div class="mb-4">
                    <label for="pesan" class="block text-gray-700">Harga:</label>
                    <input type="number" id="text" name="harga" class="w-full bg-white border-gray-300 rounded-md p-2 focus:outline-none focus:border-violet-700" required>
                </div>
                <div class="grid place-items-end">
                    <button type="submit" class="btn btn-primary">Konfirmasi</button>
                </div>
            </form>
        </div>
    </div>

</body>
</html>
