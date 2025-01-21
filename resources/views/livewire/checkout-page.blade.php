<div>
    <div class="w-full max-w-[85rem] py-10 px-4 sm:px-6 lg:px-8 mx-auto">
        <h1 class="text-2xl font-bold text-gray-800 dark:text-white mb-4">
            Checkout
        </h1>
        <form wire:submit.prevent="placeOrder">
            <div class="grid grid-cols-12 gap-4">
                <div class="md:col-span-12 lg:col-span-8 col-span-12">
                    <!-- Card -->
                    <div class="bg-white rounded-xl shadow p-4 sm:p-7 dark:bg-slate-900">
                        <!-- Shipping Address -->
                        <div class="mb-6">
                            <h2 class="text-xl font-bold underline text-gray-700 dark:text-white mb-2">
                                Shipping Address
                            </h2>
                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-gray-700 dark:text-white mb-1" for="first_name">
                                        First Name
                                    </label>
                                    <input wire:model="first_name" class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none @error('first_name') border-red-500 @enderror" id="first_name" type="text">
                                    </input>
                                    @error('first_name')
                                        <div class="text-red-500 text-sm">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div>
                                    <label class="block text-gray-700 dark:text-white mb-1" for="last_name">
                                        Last Name
                                    </label>
                                    <input wire:model="last_name" class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none @error('last_name') border-red-500 @enderror" id="last_name" type="text">
                                    </input>
                                    @error('last_name')
                                        <div class="text-red-500 text-sm">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mt-4">
                                <label class="block text-gray-700 dark:text-white mb-1" for="phone">
                                    Phone
                                </label>
                                <input wire:model="phone" class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none @error('phone') border-red-500 @enderror" id="phone" type="text">
                                </input>
                                @error('phone')
                                    <div class="text-red-500 text-sm">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mt-4">
                                <label class="block text-gray-700 dark:text-white mb-1" for="email">
                                    Email
                                </label>
                                <input wire:model="email" class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none @error('email') border-red-500 @enderror" id="email" type="text">
                                </input>
                                @error('email')
                                    <div class="text-red-500 text-sm">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mt-4">
                                <label class="block text-gray-700 dark:text-white mb-1" for="address">
                                    Address
                                </label>
                                <input wire:model="street_address" class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none @error('street_address') border-red-500 @enderror" id="address" type="text">
                                </input>
                                @error('street_address')
                                    <div class="text-red-500 text-sm">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mt-4">
                                <label class="block text-gray-700 dark:text-white mb-1" for="city">
                                    City
                                </label>
                                <input wire:model="city" class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none @error('city') border-red-500 @enderror" id="city" type="text">
                                </input>
                                @error('city')
                                    <div class="text-red-500 text-sm">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="grid grid-cols-2 gap-4 mt-4">
                                <div>
                                    <label class="block text-gray-700 dark:text-white mb-1" for="state">
                                        State
                                    </label>
                                    <input wire:model="state" class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none @error('state') border-red-500 @enderror" id="state" type="text">
                                    </input>
                                    @error('state')
                                        <div class="text-red-500 text-sm">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div>
                                    <label class="block text-gray-700 dark:text-white mb-1" for="zip">
                                        ZIP Code
                                    </label>
                                    <input wire:model="zip_code" class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none @error('zip_code') border-red-500 @enderror" id="zip" type="text">
                                    </input>
                                    @error('zip_code')
                                        <div class="text-red-500 text-sm">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="text-lg font-semibold mb-4">
                            Select Shipping Method
                        </div>
                        <ul class="grid w-full gap-6 md:grid-cols-2">
                            <li>
                                <label for="hs-radio-on-delivery" class="flex p-3 w-full bg-white border border-gray-200 @error('shipping_method') border-red-500 @enderror rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400">
                                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 35 35" id="shipping">
                                        <path d="M25.24 25.31H13.3a1.25 1.25 0 0 1 0-2.5H25.24a1.25 1.25 0 0 1 0 2.5zM32.12 25.31h-.3a1.25 1.25 0 0 1 0-2.5h.3a.62.62 0 0 0 .63-.62V17.9a.63.63 0 0 0-.48-.61H24.9a3.13 3.13 0 0 1-3.13-3.12V7.47a.61.61 0 0 0-.62-.62H6.42a1.25 1.25 0 0 1 0-2.5H21.15a3.12 3.12 0 0 1 3.12 3.12v6.68a.62.62 0 0 0 .63.62h7.22a3.82 3.82 0 0 1 .68.07l.22.07a3.1 3.1 0 0 1 2.23 3v4.29A3.13 3.13 0 0 1 32.12 25.31z"></path>
                                        <path d="M32.55 17.33a1.24 1.24 0 0 1-1.17-.83l-2-5.56a.6.6 0 0 0-.47-.25H23a1.25 1.25 0 0 1 0-2.5h5.91a3.08 3.08 0 0 1 2.7 1.62 1.42 1.42 0 0 1 .08.18l2 5.67a1.26 1.26 0 0 1-.76 1.6A1.54 1.54 0 0 1 32.55 17.33zM28.53 30.65a4.55 4.55 0 1 1 4.55-4.55A4.55 4.55 0 0 1 28.53 30.65zm0-6.6a2.05 2.05 0 1 0 2 2.05A2.05 2.05 0 0 0 28.53 24.05zM10 30.65a4.55 4.55 0 1 1 4.55-4.55A4.55 4.55 0 0 1 10 30.65zm0-6.6a2.05 2.05 0 1 0 2.05 2.05A2.05 2.05 0 0 0 10 24.05z"></path>
                                        <path d="M23 25.31a1.24 1.24 0 0 1-1.25-1.25V13.13a1.25 1.25 0 1 1 2.5 0V24.06A1.24 1.24 0 0 1 23 25.31zM10.19 13.17H2a1.25 1.25 0 0 1 0-2.5h8.19a1.25 1.25 0 0 1 0 2.5zM11.73 18.75H7.45a1.25 1.25 0 1 1 0-2.5h4.28a1.25 1.25 0 0 1 0 2.5z"></path>
                                    </svg>
                                    <span class="text-sm text-gray-500 dark:text-neutral-400 ms-2">Delivery</span>
                                    <input wire:model="shipping_method" type="radio" value="delivery" class="shrink-0 ms-auto mt-0.5 border-gray-200 rounded-full text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800" id="hs-radio-on-delivery">
                                </label>
                            </li>
                            <li>
                                <label for="hs-radio-on-pickup" class="flex p-3 w-full bg-white border border-gray-200 @error('shipping_method') border-red-500 @enderror rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400">
                                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" id="paper-bag">
                                        <path fill-rule="evenodd" d="m39.11,44c1.36,0,2.66-.56,3.59-1.54.93-.99,1.4-2.32,1.29-3.66-.79-9.84-2.99-33.88-2.99-33.88-.03-.33-.22-.62-.51-.78-.29-.16-.64-.17-.93-.02l-1.55.78-1.55-.78c-.28-.14-.61-.14-.9,0l-1.55.78-1.55-.78c-.28-.14-.61-.14-.9,0l-1.55.78-1.55-.78c-.28-.14-.61-.14-.9,0l-1.55.78-1.55-.78c-.28-.14-.61-.14-.9,0l-1.55.78-1.55-.78c-.28-.14-.61-.14-.9,0l-1.55.78-1.55-.78c-.28-.14-.61-.14-.9,0l-1.55.78-1.55-.78c-.28-.14-.61-.14-.9,0l-1.55.78-1.55-.78c-.3-.15-.65-.14-.93.02-.29.16-.48.45-.51.78,0,0-2.2,24.04-2.99,33.88-.11,1.34.36,2.67,1.29,3.66.93.98,2.22,1.54,3.59,1.54h30.22Zm-2.15-2h2.15c.81,0,1.58-.33,2.13-.91.54-.58.82-1.35.75-2.13-.67-8.38-2.37-27.05-2.85-32.4l-.69.34c-.28.14-.61.14-.9,0l-1.55-.78-1.55.78c-.28.14-.61.14-.9,0l-1.55-.78-1.55.78c-.28.14-.61.14-.9,0l-1.55-.78-1.55.78c-.28.14-.61.14-.9,0l-1.55-.78-1.55.78c-.28.14-.61.14-.9,0l-1.55-.78-1.55.78c-.28.14-.61.14-.9,0l-1.55-.78-1.55.78c-.28.14-.61.14-.9,0l-1.55-.78-1.55.78c-.28.14-.61.14-.9,0l-.69-.34c-.49,5.35-2.18,24.02-2.85,32.4h0c-.06.78.21,1.56.75,2.13.55.58,1.32.91,2.13.91h2.15c-.47-.79-.66-1.73-.53-2.66l2.35-16.44c-.42-.12-.8-.34-1.11-.65-.48-.48-.75-1.13-.75-1.81v-1.87c0-.68.27-1.33.75-1.81.48-.48,1.13-.75,1.81-.75h20.87c.68,0,1.33.27,1.81.75.48.48.75,1.13.75,1.81v1.87c0,.68-.27,1.33-.75,1.81-.31.31-.69.53-1.11.65l2.35,16.44c.13.93-.06,1.87-.53,2.66h0Zm-3.82-19h-6.63v1c0,.55-.45,1-1,1h-3c-.55,0-1-.45-1-1v-1h-6.63l-2.38,16.62c-.08.6.09,1.2.49,1.66s.97.72,1.57.72h18.89c.6,0,1.18-.26,1.57-.72.4-.46.57-1.06.49-1.66l-2.38-16.62h0Zm-15.13,3s0,1.69.7,3.38c.76,1.81,2.28,3.62,5.3,3.62s4.54-1.8,5.3-3.62c.71-1.69.7-3.38.7-3.38,0-.55-.45-1-1-1s-1,.45-1,1c0,0,0,1.31-.55,2.62-.49,1.19-1.47,2.38-3.45,2.38s-2.96-1.2-3.45-2.38c-.54-1.31-.55-2.62-.55-2.62,0-.55-.45-1-1-1s-1,.45-1,1h0Zm6.5-5v2h-1v-2h1Zm2,0h7.93c.15,0,.29-.06.4-.17.11-.11.17-.25.17-.4v-1.87c0-.15-.06-.29-.17-.4-.11-.11-.25-.17-.4-.17H13.57c-.15,0-.29.06-.4.17-.11.11-.17.25-.17.4v1.87c0,.15.06.29.17.4.11.11.25.17.4.17h7.93v-1c0-.55.45-1,1-1h3c.55,0,1,.45,1,1v1h0Zm-7.5-9.5c0,.66.26,1.3.73,1.77.47.47,1.1.73,1.77.73h5c.66,0,1.3-.26,1.77-.73.47-.47.73-1.1.73-1.77s-.26-1.3-.73-1.77c-.47-.47-1.1-.73-1.77-.73h-5c-.66,0-1.3.26-1.77.73-.47.47-.73,1.1-.73,1.77h0Zm2,0c0-.13.05-.26.15-.35.09-.09.22-.15.35-.15h5c.13,0,.26.05.35.15.09.09.15.22.15.35s-.05.26-.15.35c-.09.09-.22.15-.35.15h-5c-.13,0-.26-.05-.35-.15-.09-.09-.15-.22-.15-.35h0Z"></path>
                                    </svg>
                                    <span class="text-sm text-gray-500 dark:text-neutral-400 ms-2">Pick Up</span>
                                    <input wire:model="shipping_method" type="radio" value="pick-up" class="shrink-0 ms-auto mt-0.5 border-gray-200 rounded-full text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800" id="hs-radio-on-pickup">
                                </label>
                            </li>
                        </ul>
                        <div class="text-lg font-semibold mt-6 mb-4">
                            Select Payment Method
                        </div>
                        <ul class="grid w-full gap-6 md:grid-cols-2">
                            <li>
                                <label for="hs-radio-on-qris" class="flex p-3 w-full bg-white border border-gray-200 @error('payment_method') border-red-500 @enderror rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400">
                                    <span class="text-sm text-gray-500 dark:text-neutral-400">QRIS</span>
                                    <input wire:model="payment_method" type="radio" value="qris" class="shrink-0 ms-auto mt-0.5 border-gray-200 rounded-full text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800" id="hs-radio-on-qris">
                                </label>
                            </li>
                        </ul>
                        @error('payment_method')
                            <div class="text-red-500 text-sm">{{ $message }}</div>
                        @enderror
                    </div>
                    <!-- End Card -->
                </div>
                <div class="md:col-span-12 lg:col-span-4 col-span-12">
                    <div class="bg-white rounded-xl shadow p-4 sm:p-7 dark:bg-slate-900">
                        <div class="text-xl font-bold underline text-gray-700 dark:text-white mb-2">
                            ORDER SUMMARY
                        </div>
                        <div class="flex justify-between mb-2 font-bold">
                            <span>
                                Subtotal
                            </span>
                            <span>
                                Rp. {{ number_format($grand_total, 0, ',', '.') }}
                            </span>
                        </div>
                        <div class="flex justify-between mb-2 font-bold">
                            <span>
                                Taxes
                            </span>
                            <span>
                                Rp. {{ number_format(0, 0, ',', '.') }}
                            </span>
                        </div>
                        <div class="flex justify-between mb-2 font-bold">
                            <span>
                                Shipping Cost
                            </span>
                            <span>
                                Rp. {{ number_format(0, 0, ',', '.') }}
                            </span>
                        </div>
                        <hr class="bg-slate-400 my-4 h-1 rounded">
                        <div class="flex justify-between mb-2 font-bold">
                            <span>
                                Grand Total
                            </span>
                            <span>
                                Rp. {{ number_format($grand_total, 0, ',', '.') }}
                            </span>
                        </div>
                        </hr>
                    </div>
                    <button type="submit" class="bg-green-500 mt-4 w-full p-3 rounded-lg text-lg text-white hover:bg-green-600">
                        <span wire:loading.remove>Place Order</span><span wire:loading>Loading...</span>
                    </button>
                    <div class="bg-white mt-4 rounded-xl shadow p-4 sm:p-7 dark:bg-slate-900">
                        <div class="text-xl font-bold underline text-gray-700 dark:text-white mb-2">
                            BASKET SUMMARY
                        </div>
                        <ul class="divide-y divide-gray-200 dark:divide-gray-700" role="list">
                            @foreach ($cart_items as $item)
                                <li class="py-3 sm:py-4" wire:key="{{ $item['product_id'] }}">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0">
                                            <img alt="Image {{ $item['name'] }}" class="w-12 h-12 rounded-full" src="{{ url('storage', $item['image']) }}">
                                            </img>
                                        </div>
                                        <div class="flex-1 min-w-0 ms-4">
                                            <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                                {{ $item['name'] }}
                                            </p>
                                            <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                                Quantity: {{ $item['quantity'] }}
                                            </p>
                                        </div>
                                        <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                            Rp. {{ number_format($item['total_amount'], 0, ',', '.') }}
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
