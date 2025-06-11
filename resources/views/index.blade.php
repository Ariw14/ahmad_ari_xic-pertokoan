<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>

    -- <!-- AlpineJS -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"
        integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
    <!-- ChartJS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"
        integrity="sha256-R4pqcOYV8lt7snxMQO/HSbVCFRPMdrhAFMH+vr9giYI=" crossorigin="anonymous"></script>

    <!-- Tailwind -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');

        .font-family-karla {
            font-family: karla;
        }

        .bg-sidebar {
            background: #3d68ff;
        }

        .cta-btn {
            color: #3d68ff;
        }

        .upgrade-btn {
            background: #1947ee;
        }

        .upgrade-btn:hover {
            background: #0038fd;
        }

        /* .active-nav-link {
            background: #1947ee;
        } */

        .nav-item:hover {
            background: #1947ee;
        }

        .account-link:hover {
            background: #3d68ff;
        }
    </style>
</head>

<body class="bg-gray-100 font-family-karla flex">

    <aside class="relative bg-sidebar h-screen w-64 hidden sm:block shadow-xl">
        <div class="p-6">
            <a href="{{ route('index') }}"
                class="text-white text-3xl font-semibold uppercase hover:text-gray-300">Mytoko</a>
            <a href="{{ route('product.create') }}">
                <button
                    class="w-full bg-white cta-btn font-semibold py-2 mt-5 rounded-br-lg rounded-bl-lg rounded-tr-lg shadow-lg hover:shadow-xl hover:bg-gray-300 flex items-center justify-center">
                    <i class="fas fa-plus mr-3"></i> New Product
                </button>
            </a>
        </div>
        <nav class="text-white text-base font-semibold pt-3">
            <a href="{{ route('index') }}" class="flex items-center text-white py-4 pl-6 nav-item">
                <i class="fas fa-tachometer-alt mr-3"></i>
                Dashboard
            </a>
            <a href="{{ route('product.index') }}"
                class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                <i class="fas fa-sticky-note mr-3"></i>
                Product
            </a>
            <a href="{{ route('toko.index') }}"
                class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                <i class="fas fa-table mr-3"></i>
                Toko
            </a>
        </nav>
    </aside>

    <div class="w-full flex flex-col h-screen overflow-y-hidden">
        <!-- Desktop Header -->
        <header class="w-full items-center bg-white py-2 px-6 hidden sm:flex">
            <div class="w-1/2"></div>
            {{-- <div x-data="{ isOpen: false }" class="relative w-1/2 flex justify-end">
                <button @click="isOpen = !isOpen"
                    class="realtive z-10 w-12 h-12 rounded-full overflow-hidden border-4 border-gray-400 hover:border-gray-300 focus:border-gray-300 focus:outline-none">
                    <img src="https://source.unsplash.com/uJ8LNVCBjFQ/400x400">
                </button>
                <button x-show="isOpen" @click="isOpen = false"
                    class="h-full w-full fixed inset-0 cursor-default"></button>
                <div x-show="isOpen" class="absolute w-32 bg-white rounded-lg shadow-lg py-2 mt-16">
                    <a href="#" class="block px-4 py-2 account-link hover:text-white">Account</a>
                    <a href="#" class="block px-4 py-2 account-link hover:text-white">Support</a>
                    <a href="#" class="block px-4 py-2 account-link hover:text-white">Sign Out</a>
                </div>
            </div> --}}
        </header>

        <!-- Mobile Header & Nav -->
        <header x-data="{ isOpen: false }" class="w-full bg-sidebar py-5 px-6 sm:hidden">
            <div class="flex items-center justify-between">
                <a href="index.html" class="text-white text-3xl font-semibold uppercase hover:text-gray-300">Admin</a>
                <button @click="isOpen = !isOpen" class="text-white text-3xl focus:outline-none">
                    <i x-show="!isOpen" class="fas fa-bars"></i>
                    <i x-show="isOpen" class="fas fa-times"></i>
                </button>
            </div>

            <!-- Dropdown Nav -->
            <nav :class="isOpen ? 'flex' : 'hidden'" class="flex flex-col pt-4">
                <a href="{{ route('index') }}" class="flex items-center active-nav-link text-white py-2 pl-4 nav-item">
                    <i class="fas fa-tachometer-alt mr-3"></i>
                    Dashboard
                </a>
                <a href="{{ route('product.index') }}"
                    class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
                    <i class="fas fa-sticky-note mr-3"></i>
                    Product
                </a>
                <a href="{{ route('toko.index') }}"
                    class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
                    <i class="fas fa-table mr-3"></i>
                    Toko
                </a>
            </nav>
            <!-- <button class="w-full bg-white cta-btn font-semibold py-2 mt-5 rounded-br-lg rounded-bl-lg rounded-tr-lg shadow-lg hover:shadow-xl hover:bg-gray-300 flex items-center justify-center">
                <i class="fas fa-plus mr-3"></i> New Report
            </button> -->
        </header>

        <div class="w-full overflow-x-hidden border-t flex flex-col">
            <main class="w-full flex-grow p-6">
                <h1 class="text-3xl text-black pb-6">Dashboard</h1>
                <div class="grid grid-cols-2 gap-10">
                    <div class="grid mb-2 pt-2">
                        <div
                            class="grid items-center py-4 justify-center h-24 rounded-lg bg-gradient-to-br from-red-400 to-red-600">
                            <p class="text-white text-xl font-semibold text-center">{{ $totalproduct }}</p>
                            <p class="text-white text-lg font-semibold">Total Product</p>
                        </div>
                    </div>
                    <div class="grid mb-2 pt-2">
                        <div
                            class="grid items-center py-4 justify-center h-24 rounded-lg bg-gradient-to-br from-green-400 to-green-600">
                            <p class="text-white text-xl font-semibold text-center">{{ $totaltoko }}</p>
                            <p class="text-white text-lg font-semibold">Total Toko</p>
                        </div>
                    </div>
                </div>

                <div class="w-full mt-12">
                    <p class="text-xl pb-3 flex items-center">
                        <i class="fas fa-list mr-3"></i> Latest Product
                    </p>
                    <div class="bg-white overflow-auto">
                        {{-- <form method="GET" action="{{ route('alumni.filter', $angkatan[0]->angktn) }}">
                            <select name="angkatan_id" id="angkatan_id" onchange="this.form.submit()"
                                class="bg-transparent text-white mr-2 hover:text-red-500 hover:duration-500">
                                <option value="" disabled {{ request('angkatan_id') ? '' : 'selected' }}>Pilih
                                    Angkatan</option>
                                @foreach ($angkatanfilter as $a)
                                    <option class="text-gray-800" value="{{ $a->angktn }}"
                                        {{ request('angkatan_id') == $a->angktn ? 'selected' : '' }}>
                                        Angkatan {{ $a->angktn }}
                                    </option>
                                @endforeach
                            </select>
                        </form> --}}
                        <table class="min-w-full bg-white">
                            <thead class="bg-gray-800 text-white">
                                <tr>
                                    <th class=" text-left py-3 px-4 uppercase font-semibold text-sm">No</th>
                                    <th class=" text-left py-3 px-4 uppercase font-semibold text-sm">Nama Toko</th>
                                    <th class=" text-left py-3 px-4 uppercase font-semibold text-sm">Nama Produk
                                    </th>
                                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Harga</th>
                                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Stok</th>
                                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Alamat</th>
                                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Nomer Telepon</th>
                                </tr>
                            </thead>
                            @foreach ($product as $d)
                                <tbody class="text-gray-700">
                                    <tr>
                                        <td class=" text-left py-3 px-4">{{ $loop->iteration }}</td>
                                        <td class=" text-left py-3 px-4">{{ $d->toko->nama_toko }}</td>
                                        <td class=" text-left py-3 px-4">{{ $d->nama_produk }}</td>
                                        <td class=" text-left py-3 px-4">{{ $d->harga }}</td>
                                        <td class=" text-left py-3 px-4">{{ $d->stok }}</td>
                                        <td class=" text-left py-3 px-4">{{ $d->toko->alamat }}</td>
                                        <td class="text-left py-3 px-4"><a class="hover:text-blue-500"
                                                href="tel:622322662">{{ $d->toko->nomor_telepon }}</a></td>
                                    </tr>
                                </tbody>
                            @endforeach
                        </table>
                        <div class="p-6">
                            {{ $product->links() }}
                        </div>
                    </div>
                </div>
                <div class="w-full mt-12">
                    <p class="text-xl pb-3 flex items-center">
                        <i class="fas fa-list mr-3"></i> Latest Toko
                    </p>
                    <div class="bg-white overflow-auto">
                        <table class="min-w-full bg-white">
                            <thead class="bg-gray-800 text-white">
                                <tr>
                                    <th class=" text-left py-3 px-4 uppercase font-semibold text-sm">No</th>
                                    <th class=" text-left py-3 px-4 uppercase font-semibold text-sm">Nama Toko</th>
                                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Alamat</th>
                                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Nomer Telepon</th>
                                </tr>
                            </thead>
                            @foreach ($toko as $d)
                                <tbody class="text-gray-700">
                                    <tr>
                                        <td class=" text-left py-3 px-4">{{ $loop->iteration }}</td>
                                        <td class=" text-left py-3 px-4">{{ $d->nama_toko }}</td>
                                        <td class=" text-left py-3 px-4">{{ $d->alamat }}</td>
                                        <td class="text-left py-3 px-4"><a class="hover:text-blue-500"
                                                href="tel:622322662">{{ $d->nomor_telepon }}</a></td>
                                    </tr>
                                </tbody>
                            @endforeach
                        </table>
                        <div class="p-6">
                            {{ $toko->links() }}
                        </div>
                    </div>
                </div>
            </main>
        </div>

    </div>

</body>

</html>
