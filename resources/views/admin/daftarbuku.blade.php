<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@1.6.3/dist/flowbite.css" rel="stylesheet">
    <title>Daftar Buku</title>
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
                        <h2>Melody</h2>
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
                    <a href="{{ route('ketentuan')}}">
                        <p class="underline mt-2">Ketentuan</p>
                    </a>
                    <a href="{{ route('peminjaman')}}">
                        <p class="underline mt-2">Peminjaman</p>
                    </a>
                    <a href="{{ route('kadaluarsa')}}">
                        <p class="underline mt-2">Kadaluarsa</p>
                    </a>
                </center>
            </div>
        </div>
        <div class="flex flex-col w-5/10 w-8/10 mx-auto col-span-3">
            <div class="p-5 m-5">
                <div class="relative overflow-x-auto">
                    @include('Session')
                    <table
                        class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 border border-grey-500">
                        <thead class="text-xs text-gray-700 uppercase bg-blue-50 dark:bg-blue-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-center" colspan="3">
                                    Daftar Buku
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

                <div class="flex justify-end">
                    <button
                        class="bg-blue-500 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded flex items-center"
                        data-modal-target="addBookModal" data-modal-toggle="addBookModal">
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 12h14m-7 7V5" />
                        </svg>
                        <span class="ml-2">Tambah Buku</span>
                    </button>
                </div>


                <br>
                <br>

                <div class="relative overflow-x-auto">
                    <table
                        class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 border border-grey-500">
                        <thead class="text-xs text-gray-700 uppercase bg-blue-50 dark:bg-blue-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-center border border-grey-500">
                                    Gambar
                                </th>
                                <th scope="col" class="px-6 py-3 text-center border border-grey-500">
                                    Judul buku
                                </th>
                                <th scope="col" class="px-6 py-3 text-center border border-grey-500">
                                    ISBN
                                </th>
                                <th scope="col" class="px-6 py-3 text-center border border-grey-500">
                                    Pengarang
                                </th>
                                <th scope="col" class="px-6 py-3 text-center border border-grey-500">
                                    Penerbit
                                </th>
                                <th scope="col" class="px-6 py-3 text-center border border-grey-500">
                                    Harga
                                </th>
                                <th scope="col" class="px-6 py-3 text-center border border-grey-500">
                                    Keterangan
                                </th>
                                <th scope="col" class="px-6 py-3 text-center border border-grey-500">
                                    Actions
                                </th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            @foreach ($DataBuku as $buku)
                                <tr class="bg-white border-b dark:bg-gray-800">
                                    <td class="px-6 py-4 border border-grey-500">
                                        <img src="{{ $buku['gambar'] }}" alt="{{ $buku['nama_buku'] }}" width="50px" height="100px">
                                    </td>
                                    <td class="px-6 py-4 border border-grey-500">
                                        {{ $buku['nama_buku'] }}
                                    </td>
                                    <td class="px-6 py-4 border border-grey-500">
                                        {{ $buku['ISBN'] }}
                                    </td>
                                    <td class="px-6 py-4 border border-grey-500">
                                        {{ $buku['pengarang'] }}
                                    </td>
                                    <td class="px-6 py-4 border border-grey-500">
                                        {{ $buku['penerbit'] }}
                                    </td>
                                    <td class="px-6 py-4 border border-grey-500">
                                        {{ $buku['harga'] }}
                                    </td>
                                    <td class="px-6 py-4 border border-grey-500">
                                        <a href="#" data-modal-target="keteranganModal-{{ $loop->index }}"
                                            data-modal-toggle="keteranganModal-{{ $loop->index }}"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Detail</a>
                                    </td>
                                    <td class="px-6 py-4 border border-grey-500">
                                        <a href="#" data-modal-target="editModal-{{ $loop->index }}"
                                            data-modal-toggle="editModal-{{ $loop->index }}" class="font-medium">
                                            <button
                                                class="bg-blue-500 hover:bg-blue-700 text-black font-bold py-2 px-4 rounded flex items-center">
                                                Edit
                                            </button>
                                        </a>
                                        <form action="{{ route('admin.buku.destroy', $buku->ISBN) }}" method="POST"
                                            class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <a href="#" class="font-medium hover:underline">
                                                <button type="submit"
                                                    class="bg-red-500 text-black hover:text-red-300 font-bold py-2 px-4 rounded flex items-center">
                                                    Delete
                                                </button>
                                            </a>
                                        </form>
                                    </td>
                                </tr>


                                <!-- Add New Book Modal -->
                                <div id="addBookModal" tabindex="-1" aria-hidden="true"
                                    class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                    <div class="relative w-full max-w-2xl max-h-full">
                                        <!-- Modal content -->
                                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                            <!-- Modal header -->
                                            <div
                                                class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                                                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                                    Tambah Buku Baru
                                                </h3>
                                                <button type="button"
                                                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                    data-modal-hide="addBookModal">
                                                    <svg class="w-5 h-5" aria-hidden="true"
                                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                        stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                                    </svg>
                                                    <span class="sr-only">Close modal</span>
                                                </button>
                                            </div>

                                            <!-- Modal body -->
                                            <div class="p-6 space-y-6">
                                                <form id="addBookForm" action="{{ route('admin.buku.tambahBuku') }}"
                                                    method="POST">
                                                    @csrf
                                                    <div class="mb-4">
                                                        <label for="nama_buku"
                                                            class="block text-gray-700 text-sm font-bold mb-2">Judul:</label>
                                                        <input type="text" name="nama_buku" id="nama_buku" placeholder="Judul Buku"
                                                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                                    </div>
                                                    <div class="mb-4">
                                                        <label for="ISBN"
                                                            class="block text-gray-700 text-sm font-bold mb-2">ISBN:</label>
                                                        <input type="text" name="ISBN" id="ISBN" placeholder="ISBN"
                                                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                                    </div>
                                                    <div class="mb-4">
                                                        <label for="pengarang"
                                                            class="block text-gray-700 text-sm font-bold mb-2">Pengarang:</label>
                                                        <input type="text" name="pengarang" id="pengarang" placeholder="Nama Pengarang"
                                                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                                    </div>
                                                    <div class="mb-4">
                                                        <label for="penerbit"
                                                            class="block text-gray-700 text-sm font-bold mb-2">Penerbit:</label>
                                                        <input type="text" name="penerbit" id="penerbit" placeholder="Nama Penerbit"
                                                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                                    </div>
                                                    <div class="mb-4">
                                                        <label for="agama"
                                                            class="block text-gray-700 text-sm font-bold mb-2">Agama:</label>
                                                        <input type="text" name="agama" id="agama" placeholder="Kategori Agama Buku"
                                                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                                    </div>
                                                    <div class="mb-4">
                                                        <label for="budaya"
                                                            class="block text-gray-700 text-sm font-bold mb-2">Budaya:</label>
                                                        <input type="text" name="budaya" id="budaya" placeholder="Kategori Budaya Buku"
                                                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                                    </div>
                                                    <div class="mb-4">
                                                        <label for="nonfiksi"
                                                            class="block text-gray-700 text-sm font-bold mb-2">NonFiksi:</label>
                                                        <input type="text" name="nonfiksi" id="nonfiksi" placeholder="Kategori NonFiksi? Ya/Tidak"
                                                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                                    </div>
                                                    <div class="mb-4">
                                                        <label for="fiksi"
                                                            class="block text-gray-700 text-sm font-bold mb-2">Fiksi:</label>
                                                        <input type="text" name="fiksi" id="fiksi" placeholder="Kategori Fiksi? Ya/Tidak"
                                                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                                    </div>
                                                    <div class="mb-4">
                                                        <label for="referensi"
                                                            class="block text-gray-700 text-sm font-bold mb-2">Referensi:</label>
                                                        <input type="text" name="referensi" id="referensi"  placeholder="Kategori Referensi Buku: Kosongkan jika tidak ada"
                                                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                                    </div>

                                                    <div class="mb-4">
                                                        <label for="harga"
                                                            class="block text-gray-700 text-sm font-bold mb-2">Harga:</label>
                                                        <input type="text" name="harga" id="harga" placeholder="Harga Buku"
                                                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                                    </div>
                                                    <div class="mb-4">
                                                        <label for="keterangan"
                                                            class="block text-gray-700 text-sm font-bold mb-2">Keterangan:</label>
                                                        <textarea name="keterangan" id="keterangan" placeholder="Keterangan Buku"
                                                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- Modal footer -->
                                            <div
                                                class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                                                <button type="submit" form="addBookForm"
                                                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                    Tambah Buku</button>
                                                <button data-modal-hide="addBookModal" type="button"
                                                    class="text-white bg-gray-500 hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Keterangan modal -->
                                <div id="keteranganModal-{{ $loop->index }}" tabindex="-1" aria-hidden="true"
                                    class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                    <div class="relative w-full max-w-2xl max-h-full">
                                        <!-- Modal content -->
                                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                            <!-- Modal header -->
                                            <div
                                                class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                                                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                                    Deskripsi
                                                </h3>
                                                <button type="button"
                                                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                    data-modal-hide="keteranganModal-{{ $loop->index }}">
                                                    <svg class="w-5 h-5" aria-hidden="true"
                                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                        stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                                    </svg>
                                                    <span class="sr-only">Close modal</span>
                                                </button>
                                            </div>
                                            <!-- Modal body -->
                                            <div class="p-6 space-y-6">
                                                <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                                    {{ $buku['keterangan'] }}
                                                </p>
                                            </div>
                                            <!-- Modal footer -->
                                            <div
                                                class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                                                <button data-modal-hide="keteranganModal-{{ $loop->index }}" type="button"
                                                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Edit modal -->
                                <div id="editModal-{{ $loop->index }}" tabindex="-1" aria-hidden="true"
                                    class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                    <div class="relative w-full max-w-2xl max-h-full">
                                        <!-- Modal content -->
                                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                            <!-- Modal header -->
                                            <div
                                                class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                                                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                                    Edit Buku
                                                </h3>
                                                <button type="button"
                                                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                    data-modal-hide="editModal-{{ $loop->index }}">
                                                    <svg class="w-5 h-5" aria-hidden="true"
                                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                        stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                                    </svg>
                                                    <span class="sr-only">Close modal</span>
                                                </button>
                                            </div>
                                            <!-- Modal body -->
                                            <div class="p-6 space-y-6">
                                                <form id="editForm-{{ $loop->index }}"
                                                    action="{{ route('admin.buku.updateBuku', ['ISBN' => $buku['ISBN']]) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="mb-4">
                                                        <label for="nama_buku"
                                                            class="block text-gray-700 text-sm font-bold mb-2">Judul:</label>
                                                        <input type="text" name="nama_buku" id="nama_buku"
                                                            value="{{ $buku['nama_buku'] }}"  placeholder="Judul Buku"
                                                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                                    </div>
                                                    <div class="mb-4">
                                                        <label for="ISBN"
                                                            class="block text-gray-700 text-sm font-bold mb-2">ISBN:</label>
                                                        <input type="text" name="ISBN" id="ISBN" value="{{ $buku['ISBN'] }}" placeholder="ISBN"
                                                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                                    </div>
                                                    <div class="mb-4">
                                                        <label for="pengarang"
                                                            class="block text-gray-700 text-sm font-bold mb-2">Pengarang:</label>
                                                        <input type="text" name="pengarang" id="pengarang" placeholder="Nama Pengarang"
                                                            value="{{ $buku['pengarang'] }}"
                                                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                                    </div>
                                                    <div class="mb-4">
                                                        <label for="penerbit"
                                                            class="block text-gray-700 text-sm font-bold mb-2">Penerbit:</label>
                                                        <input type="text" name="penerbit" id="penerbit" placeholder="Nama Penerbit"
                                                            value="{{ $buku['penerbit'] }}"
                                                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                                    </div>
                                                    <div class="mb-4">
                                                        <label for="harga"
                                                            class="block text-gray-700 text-sm font-bold mb-2">Harga:</label>
                                                        <input type="text" name="harga" id="harga" placeholder="Harga Buku"
                                                            value="{{ $buku['harga'] }}"
                                                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                                    </div>
                                                    <div class="mb-4">
                                                        <label for="keterangan"
                                                            class="block text-gray-700 text-sm font-bold mb-2">Keterangan:</label>
                                                        <textarea name="keterangan" id="keterangan" placeholder="Keterangan Buku"
                                                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{ $buku['keterangan'] }}</textarea>
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- Modal footer -->
                                            <div
                                                class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                                                <button type="submit" form="editForm-{{ $loop->index }}"
                                                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save
                                                    changes</button>
                                                <button data-modal-hide="editModal-{{ $loop->index }}" type="button"
                                                    class="text-white bg-gray-500 hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/flowbite@1.6.3/dist/flowbite.js"></script>
</body>

</html>