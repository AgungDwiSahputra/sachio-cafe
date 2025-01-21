<div class="py-48 pt-16">
    <section id="invoice_{{ $datas['order']['id'] }}" class="flex items-center font-poppins dark:bg-gray-800 ">
        <div class="justify-center flex-1 max-w-6xl px-4 py-4 mx-auto bg-white border rounded-md dark:border-gray-900 dark:bg-gray-900 md:py-10 md:px-10">
            <div>
                <div class="flex border-b border-gray-200 dark:border-gray-700 items-stretch justify-end w-full h-full px-4 mb-8 md:flex-row xl:flex-col md:space-x-6 lg:space-x-8 xl:space-x-0">
                    <div class="flex items-start justify-end flex-shrink-0">
                        <div class="flex items-center justify-between w-full pb-6 space-x-4">
                            <img src="{{ asset('assets/images/logo.jpg') }}" alt="Logo Sachio Cafe" class="w-32 h-32 hidden lg:block">
                            <div class="flex flex-col items-start justify-end space-y-2 text-end">
                                <p class="text-lg font-semibold leading-4 opacity-80 text-end text-gray-800 dark:text-gray-400">
                                    Sachio Cafe
                                </p>
                                <p class="text-sm text-end leading-4 opacity-80 text-gray-600 dark:text-gray-400">Jl. Arjuna Utara No.9, Duri Kepa, Kec. Kb. Jeruk</p>
                                <p class="text-sm text-end leading-4 opacity-80 text-gray-600 dark:text-gray-400">Kota Jakarta Barat, DKI Jakarta</p>
                                <p class="text-sm text-end leading-4 opacity-80 cursor-pointer text-gray-600 dark:text-gray-400">Phone: 082110860615 | admin@sachiocafe.shop</p>
                            </div>
                        </div>
                    </div>
                </div>
                <h1 class="px-4 mb-0 text-2xl font-semibold tracking-wide text-gray-700 dark:text-gray-300">
                    Thank you. Your order has been received.<br>
                </h1>
                <span class="px-4 mb-8 block text-red-500 text-xs leading-4">* Check your email, the order will be sent to your email as your purchase history</span>
                <div class="flex border-b border-gray-200 dark:border-gray-700  items-stretch justify-start w-full h-full px-4 mb-8 md:flex-row xl:flex-col md:space-x-6 lg:space-x-8 xl:space-x-0">
                    <div class="flex items-start justify-start flex-shrink-0">
                        <div class="flex items-center justify-center w-full pb-6 space-x-4 md:justify-start">
                            <div class="flex flex-col items-start justify-start space-y-2">
                                <p class="text-lg font-semibold leading-4 text-left text-gray-800 dark:text-gray-400">
                                    {{ $datas['address']['first_name'] . ' ' . $datas['address']['last_name'] }}
                                </p>
                                <p class="text-sm leading-4 text-gray-600 dark:text-gray-400">{{ $datas['address']['address'] }}</p>
                                <p class="text-sm leading-4 text-gray-600 dark:text-gray-400">{{ $datas['address']['city'] . ', ' . $datas['address']['state'] . ', ' . $datas['address']['zip_code'] }}</p>
                                <p class="text-sm leading-4 cursor-pointer dark:text-gray-400">Phone: {{ $datas['address']['phone'] . ' | ' . $datas['address']['email'] }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-wrap items-center pb-4 mb-10 border-b border-gray-200 dark:border-gray-700">
                    <div class="w-full px-4 mb-4 md:w-1/4">
                        <p class="mb-2 text-sm leading-5 text-gray-600 dark:text-gray-400 ">
                            Order Number: </p>
                        <p class="text-base font-semibold leading-4 text-gray-800 dark:text-gray-400">
                            {{ $datas['order']['id'] }}
                        </p>
                    </div>
                    <div class="w-full px-4 mb-4 md:w-1/4">
                        <p class="mb-2 text-sm leading-5 text-gray-600 dark:text-gray-400 ">
                            Date: </p>
                        <p class="text-base font-semibold leading-4 text-gray-800 dark:text-gray-400">
                            {{ date('d-m-Y', strtotime($datas['order']['created_at'])) }}
                        </p>
                    </div>
                    <div class="w-full px-4 mb-4 md:w-1/4">
                        <p class="mb-2 text-sm font-medium leading-5 text-gray-800 dark:text-gray-400 ">
                            Total: </p>
                        <p class="text-base font-semibold leading-4 text-yellow-600 dark:text-gray-400">
                            Rp. {{ number_format($datas['order']['grand_total'], 0, ',', '.') }}
                        </p>
                    </div>
                    <div class="w-full px-4 mb-4 md:w-1/4">
                        <p class="mb-2 text-sm leading-5 text-gray-600 dark:text-gray-400 ">
                            Payment Method: </p>
                        <p class="text-base font-semibold leading-4 text-gray-800 dark:text-gray-400 ">
                            QRIS </p>
                    </div>
                </div>
                <div class="px-4 mb-10">
                    <div class="flex flex-col items-stretch justify-center w-full space-y-4 md:flex-row md:space-y-0 md:space-x-8">
                        <div class="flex flex-col w-full space-y-6 ">
                            <h2 class="mb-2 text-xl font-semibold text-gray-700 dark:text-gray-400">Order details</h2>
                            <div class="flex flex-col items-center justify-center w-full pb-4 space-y-4 border-b border-gray-200 dark:border-gray-700">
                                <div class="flex justify-between w-full">
                                    <p class="text-base leading-4 text-gray-800 dark:text-gray-400">Subtotal</p>
                                    <p class="text-base leading-4 text-gray-600 dark:text-gray-400">
                                        Rp. {{ number_format($datas['order']['grand_total'], 0, ',', '.') }}
                                    </p>
                                </div>
                                <div class="flex items-center justify-between w-full">
                                    <p class="text-base leading-4 text-gray-800 dark:text-gray-400">Discount
                                    </p>
                                    <p class="text-base leading-4 text-gray-600 dark:text-gray-400">0</p>
                                </div>
                                <div class="flex items-center justify-between w-full">
                                    <p class="text-base leading-4 text-gray-800 dark:text-gray-400">Shipping</p>
                                    <p class="text-base leading-4 text-gray-600 dark:text-gray-400">0</p>
                                </div>
                            </div>
                            <div class="flex items-center justify-between w-full">
                                <p class="text-base font-semibold leading-4 text-gray-800 dark:text-gray-400">Total</p>
                                <p class="text-base font-semibold leading-4 text-gray-600 dark:text-gray-400">
                                    Rp. {{ number_format($datas['order']['grand_total'], 0, ',', '.') }}
                                </p>
                            </div>
                        </div>
                        <div class="flex flex-col w-full px-2 space-y-4 md:px-8 ">
                            <h2 class="mb-2 text-xl font-semibold text-gray-700 dark:text-gray-400">Shipping</h2>
                            <div class="flex items-start justify-between w-full">
                                @if($datas['order']['shipping_method'] == 'pick-up')
                                    <div class="flex items-center justify-center space-x-2">
                                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" id="paper-bag">
                                            <path fill-rule="evenodd" d="m39.11,44c1.36,0,2.66-.56,3.59-1.54.93-.99,1.4-2.32,1.29-3.66-.79-9.84-2.99-33.88-2.99-33.88-.03-.33-.22-.62-.51-.78-.29-.16-.64-.17-.93-.02l-1.55.78-1.55-.78c-.28-.14-.61-.14-.9,0l-1.55.78-1.55-.78c-.28-.14-.61-.14-.9,0l-1.55.78-1.55-.78c-.28-.14-.61-.14-.9,0l-1.55.78-1.55-.78c-.28-.14-.61-.14-.9,0l-1.55.78-1.55-.78c-.28-.14-.61-.14-.9,0l-1.55.78-1.55-.78c-.28-.14-.61-.14-.9,0l-1.55.78-1.55-.78c-.28-.14-.61-.14-.9,0l-1.55.78-1.55-.78c-.3-.15-.65-.14-.93.02-.29.16-.48.45-.51.78,0,0-2.2,24.04-2.99,33.88-.11,1.34.36,2.67,1.29,3.66.93.98,2.22,1.54,3.59,1.54h30.22Zm-2.15-2h2.15c.81,0,1.58-.33,2.13-.91.54-.58.82-1.35.75-2.13-.67-8.38-2.37-27.05-2.85-32.4l-.69.34c-.28.14-.61.14-.9,0l-1.55-.78-1.55.78c-.28.14-.61.14-.9,0l-1.55-.78-1.55.78c-.28.14-.61.14-.9,0l-1.55-.78-1.55.78c-.28.14-.61.14-.9,0l-1.55-.78-1.55.78c-.28.14-.61.14-.9,0l-1.55-.78-1.55.78c-.28.14-.61.14-.9,0l-1.55-.78-1.55.78c-.28.14-.61.14-.9,0l-1.55-.78-1.55.78c-.28.14-.61.14-.9,0l-.69-.34c-.49,5.35-2.18,24.02-2.85,32.4h0c-.06.78.21,1.56.75,2.13.55.58,1.32.91,2.13.91h2.15c-.47-.79-.66-1.73-.53-2.66l2.35-16.44c-.42-.12-.8-.34-1.11-.65-.48-.48-.75-1.13-.75-1.81v-1.87c0-.68.27-1.33.75-1.81.48-.48,1.13-.75,1.81-.75h20.87c.68,0,1.33.27,1.81.75.48.48.75,1.13.75,1.81v1.87c0,.68-.27,1.33-.75,1.81-.31.31-.69.53-1.11.65l2.35,16.44c.13.93-.06,1.87-.53,2.66h0Zm-3.82-19h-6.63v1c0,.55-.45,1-1,1h-3c-.55,0-1-.45-1-1v-1h-6.63l-2.38,16.62c-.08.6.09,1.2.49,1.66s.97.72,1.57.72h18.89c.6,0,1.18-.26,1.57-.72.4-.46.57-1.06.49-1.66l-2.38-16.62h0Zm-15.13,3s0,1.69.7,3.38c.76,1.81,2.28,3.62,5.3,3.62s4.54-1.8,5.3-3.62c.71-1.69.7-3.38.7-3.38,0-.55-.45-1-1-1s-1,.45-1,1c0,0,0,1.31-.55,2.62-.49,1.19-1.47,2.38-3.45,2.38s-2.96-1.2-3.45-2.38c-.54-1.31-.55-2.62-.55-2.62,0-.55-.45-1-1-1s-1,.45-1,1h0Zm6.5-5v2h-1v-2h1Zm2,0h7.93c.15,0,.29-.06.4-.17.11-.11.17-.25.17-.4v-1.87c0-.15-.06-.29-.17-.4-.11-.11-.25-.17-.4-.17H13.57c-.15,0-.29.06-.4.17-.11.11-.17.25-.17.4v1.87c0,.15.06.29.17.4.11.11.25.17.4.17h7.93v-1c0-.55.45-1,1-1h3c.55,0,1,.45,1,1v1h0Zm-7.5-9.5c0,.66.26,1.3.73,1.77.47.47,1.1.73,1.77.73h5c.66,0,1.3-.26,1.77-.73.47-.47.73-1.1.73-1.77s-.26-1.3-.73-1.77c-.47-.47-1.1-.73-1.77-.73h-5c-.66,0-1.3.26-1.77.73-.47.47-.73,1.1-.73,1.77h0Zm2,0c0-.13.05-.26.15-.35.09-.09.22-.15.35-.15h5c.13,0,.26.05.35.15.09.09.15.22.15.35s-.05.26-.15.35c-.09.09-.22.15-.35.15h-5c-.13,0-.26-.05-.35-.15-.09-.09-.15-.22-.15-.35h0Z"></path>
                                        </svg>
                                        <div class="flex flex-col items-center justify-start">
                                            <p class="text-lg font-semibold leading-6 text-gray-800 dark:text-gray-400">
                                                Pick Up
                                            </p>
                                        </div>
                                    </div>
                                @else
                                    <div class="flex items-center justify-center space-x-2">
                                        <div class="w-8 h-8">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-6 h-6 bi bi-truck" viewBox="0 0 16 16">
                                                <path d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5v-7zm1.294 7.456A1.999 1.999 0 0 1 4.732 11h5.536a2.01 2.01 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456zM12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12v4zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z">
                                                </path>
                                            </svg>
                                        </div>
                                        <div class="flex flex-col items-center justify-start">
                                            <p class="text-lg font-semibold leading-6 text-gray-800 dark:text-gray-400">
                                                Delivery<br><span class="text-sm font-normal">Delivery with 24 Hours</span>
                                            </p>
                                        </div>
                                    </div>
                                    <p class="text-lg font-semibold leading-6 text-gray-800 dark:text-gray-400">0</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex items-center justify-start gap-4 px-4 mt-6 ">
                    <a wire:navigate href="/products" class="w-full text-center px-4 py-2 text-yellow-500 border border-yellow-500 rounded-md md:w-auto hover:text-white hover:bg-yellow-600 dark:border-gray-700 dark:hover:bg-gray-700 dark:text-gray-300">
                        Go back shopping
                    </a>
                    <button id="download-invoice" class="w-full text-center px-4 py-2 bg-yellow-500 rounded-md text-gray-50 md:w-auto dark:text-gray-300 hover:bg-yellow-600 dark:hover:bg-gray-700 dark:bg-gray-800">
                        Download Invoice
                    </button>
                    {{-- <a wire:navigate href="/orders" class="w-full text-center px-4 py-2 bg-yellow-500 rounded-md text-gray-50 md:w-auto dark:text-gray-300 hover:bg-yellow-600 dark:hover:bg-gray-700 dark:bg-gray-800">
                        View My Orders
                    </a> --}}
                </div>
            </div>
        </div>
    </section>
</div>

<script>
    document.getElementById('download-invoice').addEventListener('click', function () {
        const invoiceElement = document.getElementById('invoice_{{ $datas['order']['id'] }}');
        
        html2canvas(invoiceElement).then((canvas) => {
            // Buat URL dari canvas
            const link = document.createElement('a');
            link.download = 'invoice_{{ $datas["order"]["id"] }}.jpg';
            link.href = canvas.toDataURL('image/jpeg', 1.0); // Simpan sebagai JPG
            link.click(); // Mulai unduhan
        });
    });
</script>

