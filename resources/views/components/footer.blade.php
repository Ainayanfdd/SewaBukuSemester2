<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><link href="https://cdn.jsdelivr.net/npm/daisyui@4.11.1/dist/full.min.css" rel="stylesheet" type="text/css" />
<script src="https://cdn.tailwindcss.com"></script>
    <title>Wishlist</title>
    <style>
        .underline-content {
        text-decoration: underline;
        }
    </style>
</head>
<body>
<footer class="footer">
    <div class="bg-purple-600 items-center justify-center grid grid-cols-5 p-10 w-full"> 
    <!-- <div class="grid grid-cols-5 bg-purple-600"> -->

        <div class="spacer">
            <img src="{{ asset('images/intelek.png') }}" alt="Intelek" style="height:100px;width:100px;">
        </div>
        <div class="section flex flex-col">
            <h1 class="text-white font-bold">Perusahaan</h1>
            <h2 class="text-white">Mitra</h2>
            <h2 class="text-white">Tentang Kami</h2>
            <h2 class="text-white">Hubungi Kami</h2>
            <h2 class="text-white">Syarat Penggunaan</h2>
        </div>
        <div class="section flex flex-col">
            <h1 class="text-white font-bold">Sosial</h1>
            <h2 class="text-white">Facebook</h2>
            <h2 class="text-white">Instagram</h2>
        </div>
        <div class="section flex flex-col">
            <h1 class="text-white font-bold">Service</h1>
            <h2 class="text-white">Masukan</h2>
            <h2 class="text-white">Laporan Bug</h2>
        </div>
        <div class="spacer"></div>
    </div>

</footer>

</body>
</html>