@extends('layouts.app')

<body class="bg-gray-900 text-white antialiased">

    <div class="main-content-area">
        <header class="p-4 md:p-6 flex justify-between items-center z-10 relative">
            <div class="flex flex-col md:flex-row md:items-center space-y-1 md:space-y-0 md:space-x-8">
                <h1 class="text-4xl md:text-5xl font-extrabold tracking-tight mt-1 md:mt-0">
                    SPEED GARAGE
                </h1>
            </div>

            <div class="flex items-center space-x-4">
                <span class="hidden sm:inline text-base font-semibold text-white">Name</span>
                <button class="p-2 rounded-full hover:bg-gray-800 transition duration-150 relative"
                    aria-label="Notifications">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                        stroke="currentColor" class="w-6 h-6 text-gray-300">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.733A8.58 8.58 0 0010.8 2.5a8.58 8.58 0 00-7.2 6.517v.733c0 2.327-.79 4.48-2.19 6.272.23.085.474.156.73.21a23.848 23.848 0 005.454 1.31m4.398-1.31v1.908c0 1.09-.894 1.984-1.984 1.984h-2.827c-1.09 0-1.984-.894-1.984-1.984v-1.908m5.795 0a9.231 9.231 0 01-5.795 0" />
                    </svg>
                    <!-- Optional: Notification badge -->
                    <!-- <span class="absolute top-1 right-1 block h-2 w-2 rounded-full ring-2 ring-gray-900 bg-red-500"></span> -->
                </button>
            </div>
        </header>

        <section class="relative z-10 px-4 md:px-6 mt-4 mb-8 md:mb-16">
            <div
                class="bg-gray-700/50 backdrop-blur-sm h-[40vh] md:h-[50vh] flex items-start rounded-xl shadow-2xl shadow-gray-800/50 border border-gray-700">
                <p class="text-sm leading-relaxed max-w-lg p-12">
                    Lorem ipsum dolor sit amet consectetur. Sit quisque nisl justo est ullamcorper id nibh id mi. Neque
                    vulputate sed lectus urna lorem tellus commodo. Pellentesque pretium laoreet adipiscing quis est.
                    Nisl cursus sit felis tristique erat. Malesuada aliquam risus dui eu magna.
                </p>
            </div>
        </section>

        <section class="relative z-10 px-4 md:px-6">
            <div class="grid md:grid-cols-2 gap-10 text-black">
                <div class="space-y-6">
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-semibold mb-1 text-white">Merek</label>
                            <div class="bg-gray-300 h-8 rounded"></div>
                        </div>
                        <div>
                            <label class="block text-sm font-semibold mb-1 text-white">Tipe</label>
                            <div class="bg-gray-300 h-8 rounded"></div>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-semibold mb-1 text-white">Produk</label>
                            <div class="bg-gray-300 h-8 rounded"></div>
                        </div>
                        <div>
                            <label class="block text-sm font-semibold mb-1 text-white">Tanggal</label>
                            <div class="bg-gray-300 h-8 rounded"></div>
                        </div>
                    </div>
                    <div class="grid grid-cols-3 gap-4 pt-4">
                        <div class="bg-gray-300 h-24 rounded-lg shadow-md"></div>
                        <div class="bg-gray-300 h-24 rounded-lg shadow-md"></div>
                        <div class="bg-gray-300 h-24 rounded-lg shadow-md"></div>
                    </div>
                </div>
                <div class="space-y-6 md:pl-10">
                    <h2 class="text-2xl font-bold text-white">Merek Tipe 200cc</h2>
                    <p class="text-sm leading-relaxed text-white">
                        Lorem ipsum dolor sit amet consectetur. Sit quisque nisl justo est ullamcorper id nibh id
                        mi. Neque vulputate sed lectus urna lorem tellus commodo. Pellentesque pretium laoreet
                        adipiscing quis est. Nisl cursus sit felis tristique erat. Malesuada aliquam risus dui eu
                        magna.
                    </p>
                    <a href="{{ route('order.create') }}"
                        class="w-full md:w-auto px-8 py-3 bg-gray-300 text-black font-semibold rounded-lg shadow-lg hover:bg-gray-500 transition duration-300">
                        Pemesanan
                    </a>
                </div>
            </div>
        </section>
    </div>
</body>
