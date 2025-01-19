<div>
    <div class="mx-auto my-16 bg-white shadow-md rounded-lg p-8 w-full max-w-md">
        <h1 class="text-2xl font-bold text-gray-800 text-center mb-4">QRIS Payment</h1>
        <p class="text-sm text-gray-600 text-center mb-6">Scan the QR code below to make a payment.</p>

        <!-- QR Code Section -->
        <div class="flex items-center justify-center mb-6">
            <div class="bg-gray-200 p-4 rounded-lg">
                <!-- Replace this with the actual QR Code image -->
                <img src="{{ asset('assets/images/qris.webp') }}" alt="QR Code" class="w-60 h-60">
            </div>
        </div>

        <!-- Amount Details -->
        <div class="text-center mb-6">
            <p class="text-lg font-semibold text-gray-800">Total Payment: <span class="text-green-500">Rp {{ number_format($grand_total, 0, ',', '.') }}</span></p>
            <span class=" text-red-500 font-semibold text-xs">* Pay according to the amount stated</span>
        </div>

        <!-- Instructions -->
        <div class="mb-6">
            <ul class="text-sm text-gray-600 space-y-2 list-disc pl-5">
                <li>Open your payment app and scan the QR code.</li>
                <li>Ensure the payment amount is correct.</li>
                <li>Confirm the payment and wait for the confirmation.</li>
            </ul>
        </div>

        <!-- Confirmation Button -->
        <div class="text-center d-flex align-items-center justify-center flex-column">
            <form wire:submit.prevent="confirmPayment">
                {{-- <input class="text-black" wire:model="first_name" id="first_name" type="text" value="{{ $first_name }}"></input>
                <input class="text-black" wire:model="last_name" id="last_name" type="text" value="{{ $last_name }}"></input>
                <input class="text-black" wire:model="phone" id="phone" type="text" value="{{ $phone }}"></input>
                <input class="text-black" wire:model="email" id="email" type="text" value="{{ $email }}"></input>
                <input class="text-black" wire:model="street_address" id="address" type="text" value="{{ $street_address }}"></input>
                <input class="text-black" wire:model="city" id="city" type="text" value="{{ $city }}"></input>
                <input class="text-black" wire:model="state" id="state" type="text" value="{{ $state }}"></input>
                <input class="text-black" wire:model="zip_code" id="zip" type="text" value="{{ $zip_code }}"></input>
                <input class="text-black" wire:model="payment_method" type="radio" value="qris" id="hs-radio-on-right" value="{{ $payment_method }}" checked>
                <input class="text-black" wire:model="grand_total" value="{{ $grand_total }}" type="text"> --}}
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg shadow hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400">
                    <span wire:loading.remove>Confirm Payment</span><span wire:loading>Loading...</span>
                </button>
            </form>
        </div>
    </div>
</div>
