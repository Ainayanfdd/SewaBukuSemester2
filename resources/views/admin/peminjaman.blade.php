<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.0.2/dist/flowbite.css" rel="stylesheet">


    <title>Peminjaman</title>
    <style>
        .underline-content {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    @include('components/headeradmin')
    <div class="grid grid-cols-4">
        <div class="grid grid-rows-2 gap-4 bg-purple-100 w-2/10">
            <div class="flex flex-col w-4/10">
                <div class="w-3/10">
                    <div class="h-full flex flex-col justify-center items-center">
                        <img src="{{ asset('images/buku/image.png') }}" alt="Buku Photo Profile" class="p-4 mx-auto"
                            style="height: 150px; width: 150px;">
                    </div>
                </div>
                <div class="w-2/10">
                    <div class="h-full flex flex-col justify-center items-center">
                        @if (Auth::check())
                            <h2>{{Auth::user()->namaDepan}}</h2>
                        @else
                            <h2>Melody</h2>
                        @endif
                        <hr>
                        <h2>Online</h2>
                    </div>
                </div>
                <hr>
                <br>
                <br>
                <center>
                    <a href="{{ route('daftarbuku')}}">
                        <p class="underline mt-2">Daftar Buku</p>
                    </a>
                    <!-- <a href="{{ route('ketentuan')}}">
                        <p class="underline mt-2">Ketentuan</p>
                    </a> -->
                    <a href="{{ route('peminjaman')}}">
                        <p class="underline mt-2">Peminjaman</p>
                    </a>
                    <a href="{{ route('kadaluarsa')}}">
                        <p class="underline mt-2">Kadaluarsa</p>
                    </a>
                    <!-- <a href="{{ route('actionlogout')}}">
                        <p class="underline mt-2">Logout</p>
                    </a> -->
                </center>
            </div>
        </div>
        <div class="flex flex-col w-5/10 w-8/10 mx-auto col-span-3">
            <div class="p-5 m-5">
                <div class="relative overflow-x-auto">
                    <table
                        class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 border border-grey-500">
                        <thead class="text-xs text-gray-700 uppercase bg-blue-50 dark:bg-blue-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-center" colspan="3">
                                    Peminjaman
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-white border-b dark:bg-gray-800">
                                <td class="px-6 py-4" colspan="2">
                                    <div class="flex">
                                        <input type="text" class="border rounded-md px-3 py-2 w-full"
                                            placeholder="Search">
                                        <div class="justify-end">
                                            <button
                                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded flex items-center">
                                                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    fill="none" viewBox="0 0 24 24">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                                        d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z" />
                                                </svg>

                                                <span class="ml-2">Search</span>
                                            </button>
                                        </div>

                                    </div>


                                </td>
                                <td class="px-6 py-4">
                                    <button
                                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded flex items-center">
                                        <span class="ml-2">Show all</span>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <br>
                <br>

                <div class="relative overflow-x-auto">
                    <table
                        class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 border border-grey-500">
                        <thead class="text-xs text-gray-700 uppercase bg-blue-50 dark:bg-blue-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-center border border-grey-500">
                                    Nama Lengkap
                                </th>
                                <th scope="col" class="px-6 py-3 text-center border border-grey-500">
                                    ISBN
                                </th>
                                <th scope="col" class="px-6 py-3 text-center border border-grey-500">
                                    Judul Buku
                                </th>
                                <th scope="col" class="px-6 py-3 text-center border border-grey-500">
                                    Status
                                </th>
                                <th scope="col" class="px-6 py-3 text-center border border-grey-500">
                                    Tanggal Pinjam
                                </th>
                                <th scope="col" class="px-6 py-3 text-center border border-grey-500">
                                    Tanggal Akhir
                                </th>
                                <th scope="col" class="px-6 py-3 text-center border border-grey-500">
                                    Biaya Sewa
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($peminjaman as $datas)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <td class="px-6 py-4 border border-grey-500">
                                        {{$datas->namaDepan}} {{$datas->namaBelakang}}
                                    </td>
                                    <td class="px-6 py-4 border border-grey-500">
                                        {{$datas->ISBN}}
                                    </td>
                                    <td class="px-6 py-4 border border-grey-500">
                                        {{$datas->judulBuku}}
                                    </td>
                                    <td class="px-6 py-4 border border-grey-500">
                                        {{$datas->status}}
                                    </td>
                                    <td class="px-6 py-4 border border-grey-500">
                                        {{$datas->tanggalPinjam}}
                                    </td>
                                    <td class="px-6 py-4 border border-grey-500">
                                        {{$datas->tanggalAkhir}}
                                    </td>
                                    <td class="px-6 py-4 border border-grey-500">
                                        {{$datas->biayaPinjam}}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="flex justify-end">
                        <button
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 mt-4 rounded flex items-center align-end">Cetak
                            Resi</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>