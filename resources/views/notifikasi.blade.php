<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.0.2/dist/flowbite.css" rel="stylesheet">
    <style>
        .underline-content {
            text-decoration: underline;
        }
    </style>
</head>
<body>
<header>
    <div class="grid grid-rows-2">
        <div class="bg-purple-600 flex justify-between px-10">
            <div class="flex items-center justify-center">
                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M5 7h14M5 12h14M5 17h14"/>
                </svg>
            </div>
            <div class="flex items-center justify-center text-white font-bold">
                <img src="{{ asset('images/intelek.png') }}" alt="Intelek" style="height:80px;width:80px;">
                <h1>INTELEK</h1>
            </div>
            <div class="flex items-center justify-center">
                <button class="bg-blue-400 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded flex items-center"> 
                MASUK 
                </button>
            </div>
    </div>
    <nav>
        <div class="grid grid-cols-5 bg-purple-300 font-bold">
            <div class="text-center items-center justify-center p-2">
                <a href="/kategori">
                <img src="{{ asset('images/buku/kategori.png') }}" alt="Kategori" style="height: 70px;width: 70px;" class="p-3 align-center justify-center items-center mx-auto">
                    Kategori</a>
            </div>
            <div class="text-center items-center justify-center p-2">
                <a href="/wishlist">
                <img src="{{ asset('images/buku/wishlist.png') }}" alt="Wishlist" style="height: 70px;width: 70px;" class="p-3 align-center justify-center items-center mx-auto">
                    Wishlist</a>
            </div>
            <div class="text-center items-center justify-center p-2">
                <a href="/library">
                <img src="{{ asset('images/buku/library.png') }}" alt="Library" style="height: 70px;width: 70px;" class="p-3 align-center justify-center items-center mx-auto">
                    Library</a>
            </div>
            <div class="text-center items-center justify-center p-2">
                <a href="/history">
                <img src="{{ asset('images/buku/history.png') }}" alt="History" style="height: 70px;width: 70px;" class="p-3 align-center justify-center items-center mx-auto">
                    History</a>
            </div>
            <div class="text-center items-center justify-center p-2">
                <a href="/notify">
                <img src="{{ asset('images/buku/notify.png') }}" alt="Notify" style="height: 70px;width: 70px;" class="p-3 align-center justify-center items-center mx-auto">
                    Notify</a>
            </div>
        </div>
    </nav>
    <!-- Penutup navbar -->
<div class="container px-7 mx-auto mt-9">
    <div class="max-w-4xl mx-auto mt-10 bg-white rounded-lg shadow-md overflow-hidden">
    <div class="text-center">
        <h1 class="text-4xl font-bold mt-10">Notifikasi</h1>
    </div>
    <div class="max-w-4xl mx-auto mt-10 bg-white rounded-lg shadow-md overflow-hidden">
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
                <tr>
                    <td 
     class="table-container">
        <table>
            <thead>
            </thead>
            <tbody>
            <tr>
    <td>Masa peminjaman buku pulang-Tereliye sudah habis</td>
</tr>
            <tr>
    <td>Waktu pinjam kamu sudah hampir habis!!!</td>
</tr>
            <tr>
    <td>Diskon 30 % untuk peminjaman pertama yuk buruan!!</td>
</tr>
            <tr>
                    <td>HAI!! Selamat bergabung dengan intelek!!</td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- Add more tables here if needed -->
</body>
</html>
</header>

</body>
</html>