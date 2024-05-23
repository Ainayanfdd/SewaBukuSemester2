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
@include('components/header')
<div class="mt-12 my-12">  
<tr>
    <td class="my-4">
        <img src="images/buku/pesan.png" class="size-6" style="float: left; margin-right: 10px;">
        <div>Masa peminjaman buku pulang-Tereliye sudah habis</div>
    </td>
    <hr>
</tr>
<tr>
<td class="my-4">
    <img src="images/buku/pesan.png" class="size-6" style="float: left; margin-right: 10px;">
        <div>Waktu pinjam kamu sudah hampir habis</div>
    </td>
    <hr>    
</tr>
<tr>
    <td class="my-4">
    <img src="images/buku/pesan.png" class="size-6" style="float: left; margin-right: 10px;">
        <div>Diskon 30% untuk peminjaman pertama yuk buruan!</div>
    </td>
    <hr>  
</tr>
<tr>
    <td class="my-4">
    <img src="images/buku/pesan.png" class="size-6" style="float: left; margin-right: 10px;">
        <div>HAI!! Selamat bergabung dengan intelek!!</div>
    </td>
    <hr>  
</tr>
</div>
</body>
@include('components/footer')
</html>