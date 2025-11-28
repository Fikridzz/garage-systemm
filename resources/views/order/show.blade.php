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

        <div class="flex flex-col items-center justify-center mt-16 p-4">
            <div class="w-full max-w-lg mb-6">
                <h1 class="text-4xl font-bold text-white text-left">Pembayaran</h1>
            </div>
            <div class="bg-dark-bg p-6 sm:p-8 rounded-xl shadow-md w-full max-w-lg">
                <div class="space-y-6 text-white">
                    <div class="space-y-1">
                        <p class="text-sm font-medium text-gray-500">Metode Pembayaran</p>
                        <p class="text-lg font-semibold">Virtual Account</p>
                    </div>
                    <div class="space-y-1">
                        <p class="text-sm font-medium text-gray-500">Nomor Virtual Account</p>
                        <div class="flex items-center justify-between bg-gray-50 p-3 rounded-lg border border-gray-200">
                            <span id="va-number"
                                class="text-xl font-mono tracking-wider text-gray-900">70909123801239</span>
                            <button id="copy-button" onclick="copyVA()"
                                class="text-blue-600 hover:text-blue-800 text-sm font-medium transition duration-150 p-1 rounded-md active:scale-95">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="2.5" stroke="currentColor" class="w-5 h-5 inline-block mr-1">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15.75 17.25v-3.375c0-.621-.504-1.125-1.125-1.125h-3.375m4.5-3.625h-6.75a1.125 1.125 0 0 0-1.125 1.125v7.5c0 .621.504 1.125 1.125 1.125h7.5c.621 0 1.125-.504 1.125-1.125v-6.75m-6.75-2.25H21v9.25a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 17.25V5.25A2.25 2.25 0 0 1 5.25 3h1.125M17.25 5.25h-5.25" />
                                </svg>
                                Salin
                            </button>
                        </div>
                    </div>
                    <div class="space-y-1 pt-4 border-t border-gray-100">
                        <p class="text-sm font-medium text-gray-500">Produk Pembelian</p>
                        <p class="text-lg font-semibold">Upgrade mesin 300cc</p>
                    </div>
                    <div class="space-y-1">
                        <p class="text-sm font-medium text-gray-500">Total Bayar</p>
                        <p class="text-xl font-extrabold text-blue-600">Rp 1.000.000</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function copyVA() {
            const vaNumber = document.getElementById('va-number').innerText;

            // Use execCommand('copy') for better compatibility in iframe environments
            const tempInput = document.createElement('textarea');
            tempInput.value = vaNumber.trim();
            document.body.appendChild(tempInput);
            tempInput.select();
            document.execCommand('copy');
            document.body.removeChild(tempInput);

            // Show confirmation message
            const copyButton = document.getElementById('copy-button');
            const originalText = copyButton.innerHTML;
            copyButton.innerHTML = 'Disalin!';
            copyButton.classList.remove('text-blue-600', 'hover:text-blue-800');
            copyButton.classList.add('text-green-600', 'cursor-default');

            setTimeout(() => {
                copyButton.innerHTML = originalText;
                copyButton.classList.remove('text-green-600', 'cursor-default');
                copyButton.classList.add('text-blue-600', 'hover:text-blue-800');
            }, 2000);
        }
    </script>

</body>
