@include('layout.website._header')
@include('layout.website._footer')
<section class="content">
    {{ $articles }}
</section>
@yield('footer')