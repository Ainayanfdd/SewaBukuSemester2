<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <title>Detail Buku</title>
  <style>
    .underline-content {
      text-decoration: underline;
    }
  </style>
</head>

<body>
  @include('components/header')

  <div class="flex text-center align-center justify-center items-center p-5 p-32">
    <div class="flex-1 w-32 p-5">
      <img src="{{ $DetailBuku->gambar }}" alt="{{$DetailBuku->nama_buku}}" class="p-4 align-center justify-center items-center mx-auto">
      <a href={{route('paymentgateway', ['ISBN' => $DetailBuku->ISBN])}}>
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
          Borrow
        </button>
      </a>

  </div>
  <div class="flex-1 w-14 ...">
    <h1 class="underline font-bold">Detail Buku: </h1> <br>
    <div class="text-center">
        <h2 class="font-bold">Judul: </h2> {{$DetailBuku->nama_buku}}
        <h2 class="font-bold">Pengarang: </h2> {{$DetailBuku->pengarang}}
        <h2 class="font-bold">Penerbit: </h2> {{$DetailBuku->penerbit}}
        <h2 class="font-bold">ISBN: </h2> {{$DetailBuku->ISBN}}
        <h2 class="font-bold">Sinopsis:</h2>
        <h3>{{$DetailBuku->keterangan}}</h3>
    </div>
  </div>
</div>

  @include('components/footer')

</body>

</html>