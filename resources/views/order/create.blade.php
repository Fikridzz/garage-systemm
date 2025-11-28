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
                </button>
            </div>
        </header>

        <form method="POST" action="{{ route('order.store', ['order' => '1']) }}">
            @csrf
            <div class="flex flex-col items-center justify-center mt-16 p-4">
                <h1 class="text-4xl font-bold text-white mb-6 w-full max-w-lg text-left">Checkout</h1>
                <div class="bg-dark-bg p-6 sm:p-8 rounded-xl shadow-2xl w-full max-w-lg text-white space-y-6">
                    <div class="w-full mb-6">
                        <label for="payment-method" class="block text-sm font-medium text-gray-200 mb-2 text-left">
                            Metode pembayaran
                        </label>
                        <div
                            class="bg-white text-gray-900 h-10 w-full rounded-lg border border-gray-300 flex items-center px-3">
                            <span class="text-gray-500">Pilih Metode Pembayaran...</span>
                        </div>
                    </div>
                    <div class="border-t border-gray-600 pt-6 space-y-4">
                        <div class="flex justify-between items-center text-gray-300">
                            <span class="text-base font-normal">Paket pembelian</span>
                            <span class="text-base font-medium">Rp 1.000.000</span>
                        </div>
                        <div class="flex justify-between items-center text-white">
                            <span class="text-xl font-bold">Total</span>
                            <span class="text-xl font-extrabold">Rp 1.000.000</span>
                        </div>
                    </div>

                    <button
                        class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 rounded-xl transition duration-150 shadow-lg mt-6">
                        Bayar Sekarang
                    </button>

                </div>
            </div>
        </form>

    </div>

</body>
