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
    <img src="{{ asset('images/buku/tekad.jpg') }}" alt="Buku Tekad" class="p-4 align-center justify-center items-center mx-auto">
    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
    Borrow
    </button>

  </div>
  <div class="flex-1 w-14 ...">
    <h1>Detail Buku: </h1> <br>
    <div class="underline-content text-center">
        <h2>
            Judul: Tekad
        </h2>
        <h2>Pengarang: Wahyudi Pratama</h2>
        <h2>Penerbit: Kawah Mwdia Pustaka</h2>
        <h2>ISBN:312421</h2> <br>
        <h2>Sinopsis:</h2>
        <h3>Novel ini mengungkapkan bagaimana kecantikan bisa menjadi sebuah kutukan dan bagaimana perempuan sering kali menjadi objek eksploitasi dan kekerasan. Novel Cantik Itu Luka memasukkan unsur-unsur realisma magis yang menjadi ciri khas karya Eka Kurnawan.</h3>
    </div>
  </div>
</div>

@include('components/footer')

</body>

</html>