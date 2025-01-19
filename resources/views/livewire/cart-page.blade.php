<div>
    <div class="w-full max-w-[85rem] py-10 px-4 sm:px-6 lg:px-8 mx-auto">
        <div class="container mx-auto px-4">
            <h1 class="text-2xl font-semibold mb-4">Shopping Cart</h1>
            <div class="flex flex-col md:flex-row gap-4">
                <div class="md:w-3/4">
                    <div class="bg-white overflow-x-auto rounded-lg shadow-md p-6 mb-4">
                        <table class="w-full min-w-max table-auto border-collapse border-spacing-0">
                            <thead class="bg-gray-100 dark:bg-gray-800">
                                <tr>
                                    <th class="text-left font-semibold py-3 px-4 text-gray-700 dark:text-gray-300">Product</th>
                                    <th class="text-left font-semibold py-3 px-4 text-gray-700 dark:text-gray-300">Price</th>
                                    <th class="text-left font-semibold py-3 px-4 text-gray-700 dark:text-gray-300">Quantity</th>
                                    <th class="text-left font-semibold py-3 px-4 text-gray-700 dark:text-gray-300">Total</th>
                                    <th class="text-left font-semibold py-3 px-4 text-gray-700 dark:text-gray-300">Remove</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($cart_items as $item)
                                    <tr class="border-b dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-700">
                                        <td class="py-4 px-4">
                                            <div class="flex items-center">
                                                <img class="h-16 w-16 mr-4 rounded-md object-cover" src="{{ url('storage', $item['image']) }}" alt="Image {{ $item['name'] }}">
                                                <span class="font-semibold text-gray-800 dark:text-gray-200">{{ Str::limit($item['name'], 35, '...') }}</span>
                                            </div>
                                        </td>
                                        <td class="py-4 px-4 text-gray-700 dark:text-gray-300">Rp. {{ number_format($item['unit_amount'], 0, ',', '.') }}</td>
                                        <td class="py-4 px-4">
                                            <div class="flex items-center">
                                                <button wire:click="decrementQty({{ $item['product_id'] }})" class="border rounded-md py-2 px-4 mr-2 text-gray-700 hover:bg-gray-200 dark:text-gray-300 dark:hover:bg-gray-600">-</button>
                                                <span class="text-center w-8 text-gray-800 dark:text-gray-200">{{ $item['quantity'] }}</span>
                                                <button wire:click="incrementQty({{ $item['product_id'] }})" class="border rounded-md py-2 px-4 ml-2 text-gray-700 hover:bg-gray-200 dark:text-gray-300 dark:hover:bg-gray-600">+</button>
                                            </div>
                                        </td>
                                        <td class="py-4 px-4 text-gray-700 dark:text-gray-300">Rp. {{ number_format($item['total_amount'], 0, ',', '.') }}</td>
                                        <td class="py-4 px-4">
                                            <button wire:click="removeItem({{ $item['product_id'] }})" class="bg-gray-300 border-2 border-gray-400 rounded-lg px-3 py-1 hover:bg-red-500 hover:text-white hover:border-red-700 dark:bg-gray-700 dark:border-gray-600">
                                                <span wire:loading.remove wire:target="removeItem({{ $item['product_id'] }})">Remove</span>
                                                <span wire:loading wire:target="removeItem({{ $item['product_id'] }})">Loading...</span>
                                            </button>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center py-20 text-4xl font-semibold text-gray-500 dark:text-gray-400">No items available in cart!</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>                    
                </div>
                <div class="md:w-1/4">
                    <div class="bg-white rounded-lg shadow-md p-6">
                        <h2 class="text-lg font-semibold mb-4">Summary</h2>
                        <div class="flex justify-between mb-2">
                            <span>Subtotal</span>
                            <span>Rp. {{ number_format($grand_total, 0, ',', '.') }}</span>
                        </div>
                        <div class="flex justify-between mb-2">
                            <span>Taxes</span>
                            <span>Rp. {{ number_format(0, 0, ',', '.') }}</span>
                        </div>
                        <div class="flex justify-between mb-2">
                            <span>Shipping</span>
                            <span>Rp. {{ number_format(0, 0, ',', '.') }}</span>
                        </div>
                        <hr class="my-2">
                        <div class="flex justify-between mb-2">
                            <span class="font-semibold">Total</span>
                            <span class="font-semibold">Rp. {{ number_format($grand_total, 0, ',', '.') }}</span>
                        </div>
                        @if ($cart_items)
                            <a href="/checkout" class="block text-center bg-yellow-500 text-white py-2 px-4 rounded-lg mt-4 w-full">Checkout</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
