<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.0.2/dist/flowbite.css" rel="stylesheet">


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
                    <!-- <a href="{{ route('ketentuan')}}">
                        <p class="underline mt-2">Ketentuan</p>
                    </a> -->
                    <a href="{{ route('peminjaman')}}">
                        <p class="underline mt-2">Peminjaman</p>
                    </a>
                    <a href="{{ route('kadaluarsa')}}">
                        <p class="underline mt-2">Kadaluarsa</p>
                    </a>
                    <a href="{{ route('actionlogout')}}">
                        <p class="underline mt-2">Logout</p>
                    </a>
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
                        class="bg-blue-500 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded flex items-center">
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 12h14m-7 7V5" />
                        </svg>
                        <span class="ml-2">Tambah buku</span>
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
                                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                        viewBox="0 0 24 24">
                                        <path fill-rule="evenodd"
                                            d="M17 10v1.126c.367.095.714.24 1.032.428l.796-.797 1.415 1.415-.797.796c.188.318.333.665.428 1.032H21v2h-1.126c-.095.367-.24.714-.428 1.032l.797.796-1.415 1.415-.796-.797a3.979 3.979 0 0 1-1.032.428V20h-2v-1.126a3.977 3.977 0 0 1-1.032-.428l-.796.797-1.415-1.415.797-.796A3.975 3.975 0 0 1 12.126 16H11v-2h1.126c.095-.367.24-.714.428-1.032l-.797-.796 1.415-1.415.796.797A3.977 3.977 0 0 1 15 11.126V10h2Zm.406 3.578.016.016c.354.358.574.85.578 1.392v.028a2 2 0 0 1-3.409 1.406l-.01-.012a2 2 0 0 1 2.826-2.83ZM5 8a4 4 0 1 1 7.938.703 7.029 7.029 0 0 0-3.235 3.235A4 4 0 0 1 5 8Zm4.29 5H7a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h6.101A6.979 6.979 0 0 1 9 15c0-.695.101-1.366.29-2Z"
                                            clip-rule="evenodd" />
                                    </svg>

                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($DataBuku as $data)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <td class="px-6 py-4 border border-grey-500">
                                        Kesalahan table
                                    </td>
                                    <td class="px-6 py-4 border border-grey-500" readonly>
                                        {{$data->ISBN}}
                                    </td>
                                    <td class="px-6 py-4 border border-grey-500">
                                        {{$data->pengarang}}
                                    </td>
                                    <td class="px-6 py-4 border border-grey-500">
                                        {{$data->penerbit}}
                                    </td>
                                    <td class="px-6 py-4 border border-grey-500">
                                        {{$data->harga}}
                                    </td>
                                    <td class="px-6 py-4 border border-grey-500">
                                        {{$data->keterangan}}
                                    </td>
                                    <td class="px-6 py-4 border border-grey-500">
                                        <!-- Edit button -->
                                        <button
                                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded flex items-center"
                                            data-judul="{{ $data->judul }}" data-isbn="{{ $data->ISBN }}"
                                            data-pengarang="{{ $data->pengarang }}" data-penerbit="{{ $data->penerbit }}"
                                            data-harga="{{ $data->harga }}" data-keterangan="{{ $data->keterangan }}"
                                            onclick="openEditModal(editBookModal)">
                                            Edit
                                        </button>
                                        <!-- Delete button -->
                                        <form action="{{ route('admin.buku.destroy', $data->ISBN) }}" method="POST"
                                            class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="bg-red-500 text-black hover:text-red-300 font-bold py-2 px-4 rounded flex items-center">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Book Modal -->
    <div id="editBookModal"
        class="fixed inset-0 z-50 flex items-center justify-center overflow-x-hidden overflow-y-auto outline-none focus:outline-none hidden">
        <div class="relative w-auto max-w-lg mx-auto my-6">
            <!-- Content -->
            <div
                class="relative flex flex-col bg-white border-2 border-gray-300 rounded-lg shadow-lg outline-none focus:outline-none">
                <!-- Header -->
                <div class="flex items-start justify-between p-5 border-b border-solid border-gray-300 rounded-t">
                    <h3 class="text-lg font-semibold">Edit Book</h3>
                    <button
                        class="p-1 ml-auto bg-transparent border-0 text-black opacity-50 float-right text-3xl leading-none font-semibold outline-none focus:outline-none"
                        onclick="closeModal('editBookModal')">×</button>
                </div>
                <!-- Body -->
                <div class="relative p-6 flex-auto">
                    <!-- Form -->
                    <form id="editBookForm" action="{{ route('admin.buku.updateBuku', ['ISBN' => $data->ISBN]) }}"
                        method="POST">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="_method" value="PUT">
                        <div class="mb-4">
                            <label for="editISBN" class="block text-sm font-semibold text-gray-600 mb-1">ISBN</label>
                            <input type="text" id="editISBN" name="ISBN" value="{{ $data->ISBN }}"
                                class="w-full px-3 py-2 border rounded-lg text-sm focus:outline-none focus:border-blue-500">
                        </div>
                        <div class="mb-4">
                            <label for="editpengarang"
                                class="block text-sm font-semibold text-gray-600 mb-1">Pengarang</label>
                            <input type="text" id="editpengarang" name="pengarang" value="{{ $data->pengarang }}"
                                class="w-full px-3 py-2 border rounded-lg text-sm focus:outline-none focus:border-blue-500">
                        </div>
                        <div class="mb-4">
                            <label for="editpenerbit"
                                class="block text-sm font-semibold text-gray-600 mb-1">Penerbit</label>
                            <input type="text" id="editpenerbit" name="penerbit" value="{{ $data->penerbit }}"
                                class="w-full px-3 py-2 border rounded-lg text-sm focus:outline-none focus:border-blue-500">
                        </div>
                        <div class="mb-4">
                            <label for="editharga" class="block text-sm font-semibold text-gray-600 mb-1">Harga</label>
                            <input type="text" id="editharga" name="harga" value="{{ $data->harga }}"
                                class="w-full px-3 py-2 border rounded-lg text-sm focus:outline-none focus:border-blue-500">
                        </div>
                        <div class="mb-4">
                            <label for="editketerangan"
                                class="block text-sm font-semibold text-gray-600 mb-1">keterangan</label>
                            <input type="text" id="editketerangan" name="keterangan" value="{{ $data->keterangan }}"
                                class="w-full px-3 py-2 border rounded-lg text-sm focus:outline-none focus:border-blue-500">
                        </div>
                    </form>
                </div>
                <!-- Footer -->
                <div class="flex items-center justify-end p-6 border-t border-solid border-gray-300 rounded-b">
                    <button
                        class="px-4 py-2 mr-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 focus:outline-none focus:bg-blue-600"
                        onclick="submitForm()">Save Changes</button>
                    <button
                        class="px-4 py-2 bg-gray-300 text-gray-700 rounded-lg hover:bg-gray-400 focus:outline-none focus:bg-gray-400"
                        onclick="closeModal('editBookModal')">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Overlay -->
    <div id='overlay' class="fixed inset-0 z-40 bg-black opacity-25 hidden"></div>
</body>

<script>
    function openEditModal(button) {
        // Retrieve data attributes from the button
        const judul = button.getAttribute('data-judul');
        const isbn = button.getAttribute('data-isbn');
        const pengarang = button.getAttribute('data-pengarang');
        const penerbit = button.getAttribute('data-penerbit');
        const harga = button.getAttribute('data-harga');
        const keterangan = button.getAttribute('data-keterangan');

        // Populate modal fields with the retrieved data
        document.getElementById('editjudul').value = judul;
        document.getElementById('editISBN').value = isbn;
        document.getElementById('editpengarang').value = pengarang;
        document.getElementById('editpenerbit').value = penerbit;
        document.getElementById('editharga').value = harga;
        document.getElementById('editketerangan').value = keterangan;

        // Show the modal
        document.getElementById('editBookModal').classList.remove('hidden');
        document.getElementById('overlay').classList.remove('hidden');
    }

    function closeModal(modalId) {
        const modal = document.getElementById(modalId);
        const overlay = document.querySelector('.fixed.inset-0.z-40');

        if (modal && overlay) {
            modal.classList.add('hidden');
            overlay.classList.add('hidden');
            document.querySelector('body').classList.remove('modal-active');
            window.location.href = '{{ route("daftarbuku") }}';
        }

    }

    function submitForm() {
        document.getElementById('editBookForm').submit();
    }
</script>

</html>