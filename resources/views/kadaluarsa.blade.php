<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.0.2/dist/flowbite.css" rel="stylesheet">


    <title>Kadaluarsa</title>
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
                        <img src="{{ asset('images/buku/image.png') }}" alt="Buku Photo Profile" class="p-4 mx-auto" style="height: 150px; width: 150px;">
                    </div>
                </div>
                <div class="w-2/10">
                    <div class="h-full flex flex-col justify-center items-center">
                        <h2>Melody</h2>
                        <hr>
                        <h2>Online</h2>
                    </div>
                </div>
                <hr>
                <br>
                <br>
                <center>
                    <p class="underline mt-2">Daftar Buku</p>
                    <p class="underline mt-2">Ketentuan</p>
                    <p class="underline mt-2">Peminjaman</p>
                    <p class="underline mt-2">Kadaluarsa</p>
                </center>
            </div>
        </div>
        <div class="flex flex-col w-5/10 w-8/10 mx-auto col-span-3">
            <div class="p-5 m-5">
                <div class="relative overflow-x-auto">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 border border-grey-500">
                        <thead class="text-xs text-gray-700 uppercase bg-blue-50 dark:bg-blue-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-center" colspan="3">
                                    Kadaluarsa
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-white border-b dark:bg-gray-800">
                                <td class="px-6 py-4" colspan="2">
                                <div class="flex">
                                    <input type="text" class="border rounded-md px-3 py-2 w-full" placeholder="Search">
                                    <div class="justify-end">
                                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded flex items-center"> 
                                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z"/>
                                            </svg>

                                            <span class="ml-2">Search</span>
                                        </button>
                                    </div>

                                </div>

                                    
                                </td>
                                <td class="px-6 py-4">
                                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded flex items-center"> 
                                            <span class="ml-2">Show all</span>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="flex justify-end">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded flex items-center"> 
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-7 7V5"/>
                        </svg>
                        <span class="ml-2">Tambah buku</span>
                    </button>
                </div>



                <br>
                <br>

                <div class="relative overflow-x-auto">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 border border-grey-500">
                        <thead class="text-xs text-gray-700 uppercase bg-blue-50 dark:bg-blue-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-center border border-grey-500">
                                    ISBN
                                </th>
                                <th scope="col" class="px-6 py-3 text-center border border-grey-500">
                                    Judul buku
                                </th>
                                <th scope="col" class="px-6 py-3 text-center border border-grey-500">
                                    Tanggal Pinjam
                                </th>
                                <th scope="col" class="px-6 py-3 text-center border border-grey-500">
                                    Biaya Sewa
                                </th>
                                <th scope="col" class="px-6 py-3 text-center border border-grey-500">
                                    Kadaluarsa
                                </th>
                                <th scope="col" class="px-6 py-3 text-center border border-grey-500">
                                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M17 10v1.126c.367.095.714.24 1.032.428l.796-.797 1.415 1.415-.797.796c.188.318.333.665.428 1.032H21v2h-1.126c-.095.367-.24.714-.428 1.032l.797.796-1.415 1.415-.796-.797a3.979 3.979 0 0 1-1.032.428V20h-2v-1.126a3.977 3.977 0 0 1-1.032-.428l-.796.797-1.415-1.415.797-.796A3.975 3.975 0 0 1 12.126 16H11v-2h1.126c.095-.367.24-.714.428-1.032l-.797-.796 1.415-1.415.796.797A3.977 3.977 0 0 1 15 11.126V10h2Zm.406 3.578.016.016c.354.358.574.85.578 1.392v.028a2 2 0 0 1-3.409 1.406l-.01-.012a2 2 0 0 1 2.826-2.83ZM5 8a4 4 0 1 1 7.938.703 7.029 7.029 0 0 0-3.235 3.235A4 4 0 0 1 5 8Zm4.29 5H7a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h6.101A6.979 6.979 0 0 1 9 15c0-.695.101-1.366.29-2Z" clip-rule="evenodd"/>
                                </svg>

                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <td class="px-6 py-4 border border-grey-500">
                                
                                </td>
                                <td class="px-6 py-4 border border-grey-500">
                                
                                </td>
                                <td class="px-6 py-4 border border-grey-500">
                                
                                </td>
                                <td class="px-6 py-4 border border-grey-500">
                                
                                </td>
                                <td class="px-6 py-4 border border-grey-500">
                                
                                </td>
                                <td class="px-6 py-4 border border-grey-500">
                                
                                </td>
                                </tr>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <td class="px-6 py-4 border border-grey-500">
                                
                                </td>
                                <td class="px-6 py-4 border border-grey-500">
                                
                                </td>
                                <td class="px-6 py-4 border border-grey-500">
                                
                                </td>
                                <td class="px-6 py-4 border border-grey-500">
                                
                                </td>
                                <td class="px-6 py-4 border border-grey-500">
                                
                                </td>
                                <td class="px-6 py-4 border border-grey-500">
                                
                                </td>
                                </tr>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <td class="px-6 py-4 border border-grey-500">
                                
                                </td>
                                <td class="px-6 py-4 border border-grey-500">
                                
                                </td>
                                <td class="px-6 py-4 border border-grey-500">
                                
                                </td>
                                <td class="px-6 py-4 border border-grey-500">
                                
                                </td>
                                <td class="px-6 py-4 border border-grey-500">
                                
                                </td>
                                <td class="px-6 py-4 border border-grey-500">
                                
                                </td>
                                </tr>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <td class="px-6 py-4 border border-grey-500">
                                
                                </td>
                                <td class="px-6 py-4 border border-grey-500">
                                
                                </td>
                                <td class="px-6 py-4 border border-grey-500">
                                
                                </td>
                                <td class="px-6 py-4 border border-grey-500">
                                
                                </td>
                                <td class="px-6 py-4 border border-grey-500">
                                
                                </td>
                                <td class="px-6 py-4 border border-grey-500">
                                
                                </td>
                            </tr>
                            <tr class="bg-white dark:bg-gray-800">
                                <td class="px-6 py-4 border border-grey-500">
                                
                                </td>
                                <td class="px-6 py-4 border border-grey-500">
                                
                                </td>
                                <td class="px-6 py-4 border border-grey-500">
                                
                                </td>
                                <td class="px-6 py-4 border border-grey-500">
                                
                                </td>
                                <td class="px-6 py-4 border border-grey-500">
                                
                                </td>
                                <td class="px-6 py-4 border border-grey-500">
                                
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
