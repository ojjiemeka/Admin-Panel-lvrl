<x-mail::message>

<div id="logoWrapper" class="d-flex align-items-center title-logo-wrapper" data-content-field="site-title">
<div>
<h1 id="logoImage" class="tmpl-loading logo-image">
<a href="index.html">
<img src="{{ asset('http://images.squarespace-cdn.com/content/v1/60e54653e526b236351f2f2f/366dd1ba-6834-4742-b9f7-3e73988ba398/E360+Logo.png?format=1500w') }}" alt="Entertainment 360">
</a>
</h1>
</div>

<div class="text-align">
<span style="margin-bottom: 15px">Hello {{ $recipientName }},</span>
<br>
<br>
<span style="margin-bottom: 15px">{{ $theMessage }}</span>
<br>
<span>Thanks again for choosing,</span>
<br>
<br>
{{ config('app.name') }}
</div>
</div>

</x-mail::message>


{{-- <x-mail::button >
View Order
</x-mail::button> --}}
