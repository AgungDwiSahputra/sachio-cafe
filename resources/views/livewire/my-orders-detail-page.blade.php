<div>
    <div class="w-full max-w-[85rem] py-10 px-4 sm:px-6 lg:px-8 mx-auto">
        <h1 class="text-4xl font-bold text-slate-500">Order Details</h1>

        <!-- Grid -->
        <div class="grid sm:grid-cols-2 lg:grid-cols-2 gap-4 sm:gap-6 mt-5">
            <!-- Card -->
            <div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-slate-900 dark:border-gray-800">
                <div class="p-4 md:p-5 flex gap-x-4">
                    <div class="flex-shrink-0 flex justify-center items-center size-[46px] bg-gray-100 rounded-lg dark:bg-gray-800">
                        <svg class="flex-shrink-0 size-5 text-gray-600 dark:text-gray-400" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M16.0004 9V6C16.0004 3.79086 14.2095 2 12.0004 2C9.79123 2 8.00037 3.79086 8.00037 6V9M3.59237 10.352L2.99237 16.752C2.82178 18.5717 2.73648 19.4815 3.03842 20.1843C3.30367 20.8016 3.76849 21.3121 4.35839 21.6338C5.0299 22 5.94374 22 7.77142 22H16.2293C18.057 22 18.9708 22 19.6423 21.6338C20.2322 21.3121 20.6971 20.8016 20.9623 20.1843C21.2643 19.4815 21.179 18.5717 21.0084 16.752L20.4084 10.352C20.2643 8.81535 20.1923 8.04704 19.8467 7.46616C19.5424 6.95458 19.0927 6.54511 18.555 6.28984C17.9444 6 17.1727 6 15.6293 6L8.37142 6C6.82806 6 6.05638 6 5.44579 6.28984C4.90803 6.54511 4.45838 6.95458 4.15403 7.46616C3.80846 8.04704 3.73643 8.81534 3.59237 10.352Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>

                    <div class="grow">
                        <div class="flex items-center gap-x-2">
                            <p class="text-xs uppercase tracking-wide text-gray-500">
                                Order Id
                            </p>
                        </div>
                        <div class="mt-1 flex items-center gap-x-2">
                            <div>{{ $order->id }}</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Card -->

            <!-- Card -->
            <div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-slate-900 dark:border-gray-800">
                <div class="p-4 md:p-5 flex gap-x-4">
                    <div class="flex-shrink-0 flex justify-center items-center size-[46px] bg-gray-100 rounded-lg dark:bg-gray-800">
                        <svg class="flex-shrink-0 size-5 text-gray-600 dark:text-gray-400" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M18 8L22 12M22 12L18 16M22 12H9M15 4.20404C13.7252 3.43827 12.2452 3 10.6667 3C5.8802 3 2 7.02944 2 12C2 16.9706 5.8802 21 10.6667 21C12.2452 21 13.7252 20.5617 15 19.796" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>

                    <div class="grow">
                        <div class="flex items-center gap-x-2">
                            <p class="text-xs uppercase tracking-wide text-gray-500">
                                Shipping
                            </p>
                        </div>
                        <div class="mt-1 flex items-center gap-x-2">
                            <div>Delivery</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Card -->
        </div>
        <!-- Grid -->
        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6 mt-5">
            <!-- Card -->
            <div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-slate-900 dark:border-gray-800">
                <div class="p-4 md:p-5 flex gap-x-4">
                    <div class="flex-shrink-0 flex justify-center items-center size-[46px] bg-gray-100 rounded-lg dark:bg-gray-800">
                        <svg class="flex-shrink-0 size-5 text-gray-600 dark:text-gray-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                            <circle cx="9" cy="7" r="4" />
                            <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
                            <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                        </svg>
                    </div>

                    <div class="grow">
                        <div class="flex items-center gap-x-2">
                            <p class="text-xs uppercase tracking-wide text-gray-500">
                                Customer
                            </p>
                        </div>
                        <div class="mt-1 flex items-center gap-x-2">
                            <div>{{ $order->address->first_name . ' ' . $order->address->last_name }}</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Card -->

            <!-- Card -->
            <div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-slate-900 dark:border-gray-800">
                <div class="p-4 md:p-5 flex gap-x-4">
                    <div class="flex-shrink-0 flex justify-center items-center size-[46px] bg-gray-100 rounded-lg dark:bg-gray-800">
                        <svg class="flex-shrink-0 size-5 text-gray-600 dark:text-gray-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 22h14" />
                            <path d="M5 2h14" />
                            <path d="M17 22v-4.172a2 2 0 0 0-.586-1.414L12 12l-4.414 4.414A2 2 0 0 0 7 17.828V22" />
                            <path d="M7 2v4.172a2 2 0 0 0 .586 1.414L12 12l4.414-4.414A2 2 0 0 0 17 6.172V2" />
                        </svg>
                    </div>

                    <div class="grow">
                        <div class="flex items-center gap-x-2">
                            <p class="text-xs uppercase tracking-wide text-gray-500">
                                Order Date
                            </p>
                        </div>
                        <div class="mt-1 flex items-center gap-x-2">
                            <h3 class="text-xl font-medium text-gray-800 dark:text-gray-200">
                                {{ date('d-m-Y', strtotime($order->created_at)) }}
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Card -->

            <!-- Card -->
            <div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-slate-900 dark:border-gray-800">
                <div class="p-4 md:p-5 flex gap-x-4">
                    <div class="flex-shrink-0 flex justify-center items-center size-[46px] bg-gray-100 rounded-lg dark:bg-gray-800">
                        <svg class="flex-shrink-0 size-5 text-gray-600 dark:text-gray-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 11V5a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h6" />
                            <path d="m12 12 4 10 1.7-4.3L22 16Z" />
                        </svg>
                    </div>

                    <div class="grow">
                        <div class="flex items-center gap-x-2">
                            <p class="text-xs uppercase tracking-wide text-gray-500">
                                Order Status
                            </p>
                        </div>
                        <div class="mt-1 flex items-center gap-x-2">
                            @php
                                $status = [
                                    'color' => [
                                        'new' => 'bg-blue-500',
                                        'processing' => 'bg-yellow-500',
                                        'shipped' => 'bg-gray-500',
                                        'delivered' => 'bg-green-500',
                                        'cancelled' => 'bg-red-500',
                                    ],
                                    'text' => [
                                        'new' => 'New',
                                        'processing' => 'Processing',
                                        'shipped' => 'Shipped',
                                        'delivered' => 'Delivered',
                                        'cancelled' => 'Cancelled',
                                    ],
                                ];
                            @endphp
                            <span class="{{ isset($status['color'][$order->status]) ? $status['color'][$order->status] : 'bg-yellow-500' }} py-1 px-3 rounded text-white shadow">
                                {{ isset($status['text'][$order->status]) ? $status['text'][$order->status] : 'New' }}
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Card -->

            <!-- Card -->
            <div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-slate-900 dark:border-gray-800">
                <div class="p-4 md:p-5 flex gap-x-4">
                    <div class="flex-shrink-0 flex justify-center items-center size-[46px] bg-gray-100 rounded-lg dark:bg-gray-800">
                        <svg class="flex-shrink-0 size-5 text-gray-600 dark:text-gray-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12s2.545-5 7-5c4.454 0 7 5 7 5s-2.546 5-7 5c-4.455 0-7-5-7-5z" />
                            <path d="M12 13a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                            <path d="M21 17v2a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-2" />
                            <path d="M21 7V5a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v2" />
                        </svg>
                    </div>

                    <div class="grow">
                        <div class="flex items-center gap-x-2">
                            <p class="text-xs uppercase tracking-wide text-gray-500">
                                Payment Status
                            </p>
                        </div>
                        <div class="mt-1 flex items-center gap-x-2">
                            @php
                                $payment_status = [
                                    'color' => [
                                        'pending' => 'bg-yellow-500',
                                        'paid' => 'bg-green-500',
                                        'failed' => 'bg-red-500',
                                    ],
                                    'text' => [
                                        'pending' => 'Pending',
                                        'paid' => 'Paid',
                                        'failed' => 'Failed',
                                    ],
                                ];
                            @endphp
                            <span class="{{ isset($payment_status['color'][$order->payment_status]) ? $payment_status['color'][$order->payment_status] : 'bg-yellow-500' }} py-1 px-3 rounded text-white shadow">
                                {{ isset($payment_status['text'][$order->payment_status]) ? $payment_status['text'][$order->payment_status] : 'Pending' }}
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Card -->
        </div>
        <!-- End Grid -->

        <div class="flex flex-col md:flex-row gap-4 mt-4">
            <div class="md:w-3/4">
                <div class="bg-white overflow-x-auto rounded-lg shadow-md p-6 mb-4">
                    <table class="w-full">
                        <thead>
                            <tr>
                                <th class="text-left font-semibold">Product</th>
                                <th class="text-left font-semibold">Price</th>
                                <th class="text-left font-semibold">Quantity</th>
                                <th class="text-left font-semibold">Total</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($order_items as $item)
                                <tr wire:key="{{ $item->id }}">
                                    <td class="py-4">
                                        <div class="flex items-center">
                                            <img class="h-16 w-16 mr-4" src="{{ url('storage', $item->product->images[0]) }}" alt="Image {{ $item->product->name }}">
                                            <span class="font-semibold">{{ $item->product->name }}</span>
                                        </div>
                                    </td>
                                    <td class="py-4">Rp. {{ number_format($item->unit_amount, 0, ',', '.') }}</td>
                                    <td class="py-4">
                                        <span class="text-center w-8">{{ $item->quantity }}</span>
                                    </td>
                                    <td class="py-4">Rp. {{ number_format($item->total_amount, 0, ',', '.') }}</td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>

                <div class="bg-white overflow-x-auto rounded-lg shadow-md p-6 mb-4">
                    <h1 class="font-3xl font-bold text-slate-500 mb-3">Shipping Address</h1>
                    <div class="flex justify-between items-center">
                        <div>
                            <p>{{ $order->address->address . ', ' . $order->address->city . ', ' . $order->address->state . ', ' . $order->address->zip_code }}</p>
                        </div>
                        <div>
                            <p class="font-semibold">Phone:</p>
                            <p>{{ $order->address->phone }}</p>
                        </div>
                        <div>
                            <p class="font-semibold">Email:</p>
                            <p>{{ $order->address->email }}</p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="md:w-1/4">
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h2 class="text-lg font-semibold mb-4">Summary</h2>
                    <div class="flex justify-between mb-2">
                        <span>Subtotal</span>
                        <span>Rp. {{ number_format($order->grand_total, 0, ',', '.') }}</span>
                    </div>
                    <div class="flex justify-between mb-2">
                        <span>Taxes</span>
                        <span>Rp. 0</span>
                    </div>
                    <div class="flex justify-between mb-2">
                        <span>Shipping</span>
                        <span>Rp. 0</span>
                    </div>
                    <hr class="my-2">
                    <div class="flex justify-between mb-2">
                        <span class="font-semibold">Grand Total</span>
                        <span class="font-semibold">Rp. {{ number_format($order->grand_total, 0, ',', '.') }}</span>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
