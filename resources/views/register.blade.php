<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar</title>
    <link rel="icon" type="image" href="/images/login.png">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.7.3/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
@include('Session')

<body class="h-screen">
    <div class="container flex h-screen">
        <div class="image-section w-1/2 bg-cover bg-right relative" style="background-image: url('/images/login.jpeg')"></div>
        <div class="w-1/2 flex justify-center items-center p-8">
            <div class="bg-violet-200 p-16 rounded-lg w-full">
                <form action="{{route('actionregister')}}" method="POST">
                    @csrf
                    <div class="text-5xl font-extrabold mb-4 text-black text-center text-blue-800">DAFTAR</div>
                    <br>
                    <div class="mb-4">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" placeholder="Email" class="w-full bg-violet-400 border-violet-700 hover:bg-violet-500 rounded-md p-2 focus:outline-none focus:border-violet-700 text-white" required>
                    </div>
                    <div class="mb-4">
                        <label for="namaDepan">Nama Depan:</label>
                        <input type="text" id="namaDepan" name="namaDepan" placeholder="Nama Depan" class="w-full bg-violet-400 border-violet-700 hover:bg-violet-500 rounded-md p-2 focus:outline-none focus:border-violet-700 text-white" required>
                    </div>
                    <div class="mb-4">
                        <label for="namaBelakang">Nama Belakang:</label>
                        <input type="text" id="namaBelakang" name="namaBelakang" placeholder="Nama Belakang" class="w-full bg-violet-400 border-violet-700 hover:bg-violet-500 rounded-md p-2 focus:outline-none focus:border-violet-700 text-white" required>
                    </div>
                    <div class="mb-4">
                        <label for="alamat">Alamat:</label>
                        <input type="text" id="alamat" name="alamat" placeholder="Alamat" class="w-full bg-violet-400 border-violet-700 hover:bg-violet-500 rounded-md p-2 focus:outline-none focus:border-violet-700 text-white" required>
                    </div>
                    <div class="mb-4">
                        <label for="password">Password:</label>
                        <input type="password" id="password" name="password" placeholder="Password" class="w-full bg-violet-400 border-violet-700 hover:bg-violet-500 rounded-md p-2 focus:outline-none focus:border-violet-700 text-white" required>
                        <div class="flex items-center mb-4">
                            <input type="checkbox" id="agree" class="checkbox-primary checkbox-sm" required>
                            <label for="agree" class="ml-1 text-sm">Saya menyetujui Syarat Ketentuan dan Kebijakan Privasi yang berlaku.</label>
                        </div>
                        <button type="masuk" class="bg-blue-800 text-white font-semibold py-1 px-4 rounded-md hover:bg-blue-900 font-poppins justify-self-end">Daftar</button>
                        <div class="text-sm mb-4 text-black">Sudah punya akun?<a href="{{route('login')}}"" class=" text-blue-500 hover:text-blue-700">Klik disini untuk login</a></div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>