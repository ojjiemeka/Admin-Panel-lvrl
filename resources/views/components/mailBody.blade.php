<x-mail::message>

<div id="logoWrapper" class="d-flex align-items-center title-logo-wrapper" data-content-field="site-title">
<div>
<h1 id="logoImage" class="tmpl-loading logo-image">
<a >
<img src="{{ asset('https://scontent-los2-1.xx.fbcdn.net/v/t39.30808-6/302860086_404408225139120_6929019656456019285_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=5f2048&_nc_ohc=WtHVg7we4UUQ7kNvgEnhvW8&_nc_ht=scontent-los2-1.xx&oh=00_AYD_l860Z6GlgkTfMOQnXMjTuOxvrnbR-5UieUbvNioEhg&oe=66598189') }}" alt="Entertainment 360">
</a>
</h1>
</div>

<div class="text-align">
<span style="margin-bottom: 15px">Hello {{ $recipientName }},</span>
<br>
<br>
<span style="margin-bottom: 15px">{!! nl2br(e($theMessage)) !!}</span>
<br>
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
