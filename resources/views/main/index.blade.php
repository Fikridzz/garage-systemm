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
                class="bg-gray-700/50 backdrop-blur-sm h-[40vh] md:h-[50vh] flex items-center justify-center rounded-xl shadow-2xl shadow-gray-800/50 border border-gray-700">
                <p class="text-lg text-gray-400 font-medium">Place Holder Image</p>
            </div>
        </section>

        <section class="transform">
            <div class="relative max-w-6xl mx-auto px-4 md:px-6">
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 justify-items-center">
                    <a href="{{ route('order.index') }}"
                        class="w-full max-w-xs transition duration-300 ease-in-out transform hover:scale-[1.03] hover:shadow-xl focus:outline-none focus:ring-4 focus:ring-indigo-500/50">
                        <div
                            class="bg-white text-gray-800 p-8 flex flex-col items-center justify-center text-center rounded-2xl shadow-lg h-48 sm:h-56 w-full">
                            <span class="text-xl font-bold tracking-tight">Remap ECU</span>
                        </div>
                    </a>
                    <a href="{{ route('order.index') }}"
                        class="w-full max-w-xs transition duration-300 ease-in-out transform hover:scale-[1.03] hover:shadow-xl focus:outline-none focus:ring-4 focus:ring-indigo-500/50">
                        <div
                            class="bg-white text-gray-800 p-8 flex flex-col items-center justify-center text-center rounded-2xl shadow-lg h-48 sm:h-56 w-full">
                            <span class="text-xl font-bold tracking-tight">Upgrade Mesin</span>
                        </div>
                    </a>
                    <a href="{{ route('order.index') }}"
                        class="w-full max-w-xs transition duration-300 ease-in-out transform hover:scale-[1.03] hover:shadow-xl focus:outline-none focus:ring-4 focus:ring-indigo-500/50">
                        <div
                            class="bg-white text-gray-800 p-8 flex flex-col items-center justify-center text-center rounded-2xl shadow-lg h-48 sm:h-56 w-full">
                            <span class="text-xl font-bold tracking-tight">Dynotest</span>
                        </div>
                    </a>
                </div>
            </div>
        </section>
    </div>
</body>
