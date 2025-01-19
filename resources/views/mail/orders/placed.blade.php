<x-mail::message>
# Order placed successfully!

Thank for your order.
Your order number is:
{{ \Illuminate\Support\Str::limit(base64_encode(json_encode($order)), 35) }}

<x-mail::button :url="$url">
View Order
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
