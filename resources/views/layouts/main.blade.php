@include('layouts.header')

@yield('main-container')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
@stack('scripts')
@include('layouts.footer')
