<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create New Toko</title>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
</head>

<body>

    <div class="container mx-auto mt-10 mb-10 px-10">
        <div class="grid grid-cols-8 gap-4 p-5">
            <div class="col-span-4 mt-2">
                <h1 class="text-3xl font-bold">
                    CREATE NEW TOKO
                </h1>
            </div>
            <div class="col-span-4">

            </div>
        </div>
        <div class="bg-white p-5 rounded shadow-sm">
            <form action="{{ route('toko.store') }}" method="POST">
                @csrf

                <div class="mb-5">
                    <label for="name">Nama Toko</label>
                    <input type="text"
                        class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded-md transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                        name="nama_toko" required>

                    <!-- error message untuk nama_siswa -->
                    @error('nama_toko')
                        <div class="bg-red-400 p-2 shadow-sm rounded mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="alamat">alamat</label>
                    <input type="text"
                        class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded-md transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                        name="alamat" required>

                    <!-- error message untuk alamat -->
                    @error('alamat')
                        <div class="bg-red-400 p-2 shadow-sm rounded mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="nomor_telepon">nomor telepon</label>
                    <input type="text"
                        class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded-md transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                        name="nomor_telepon" required>
                    <!-- error message untuk nomor_telepon -->
                    @error('nomor_telepon')
                        <div class="bg-red-400 p-2 shadow-sm rounded mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mt-3">
                    <button type="submit"
                        class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded-md shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">
                        Save
                    </button>
                    <a href="{{ route('toko.index') }}"
                        class="inline-block px-6 py-2.5 bg-gray-200 text-gray-700 font-medium text-xs leading-tight uppercase rounded-md shadow-md hover:bg-gray-300 hover:shadow-lg focus:bg-gray-300 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-gray-400 active:shadow-lg transition duration-150 ease-in-out">back</a>
                </div>

            </form>

        </div>

    </div>

</body>

</html>
