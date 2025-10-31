<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'BusTicketBooking') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">

    <!-- Icons and Fonts CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/linearicons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('fonts/material-design-icons/material-icon.css') }}">

    <!-- UI Components CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrapValidator.css') }}">

    <!-- Booking System CSS -->
    <link rel="stylesheet" href="{{ asset('plugins/lobibox/css/lobibox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/material-datetimepicker/bootstrap-material-datetimepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/seatCharts.css') }}">

    <!-- Animation CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">

    <!-- Vite Assets -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])




    <!-- Livewire Styles -->
    @livewireStyles

    <!-- Additional CSS -->
    @stack('css')
</head>

<body>
    @include('layouts.partials.header')

    @yield('content')

    @include('layouts.partials.footer')

    <!-- Core JS -->
    <script src="{{ asset('assets/js/vendor/jquery-2.2.4.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

    <!-- UI Core -->
    <script src="{{ asset('assets/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-ui.js') }}"></script>

    <!-- Easing / Scrolling -->
    <script src="{{ asset('assets/js/easing.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-easing.min.js') }}"></script>

    <!-- UI Plugins -->
    <script src="{{ asset('assets/js/hoverIntent.js') }}"></script>
    <script src="{{ asset('assets/js/superfish.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.nice-select.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>

    <!-- Validation / Form -->
    <script src="{{ asset('assets/js/bootstrapValidator.js') }}"></script>

    <!-- Booking Related JS -->
    <script src="{{ asset('assets/js/jquery.seat-charts.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.seat-chart.js') }}"></script>
    <script src="{{ asset('assets/js/booking.js') }}"></script>

    <!-- Notifications & DateTime -->
    <script src="{{ asset('plugins/lobibox/js/lobibox.min.js') }}"></script>
    <script src="{{ asset('plugins/material-datetimepicker/moment-with-locales.min.js') }}"></script>
    <script src="{{ asset('plugins/material-datetimepicker/bootstrap-material-datetimepicker.js') }}"></script>
    <script src="{{ asset('plugins/material-datetimepicker/datetimepicker.js') }}"></script>

    <!-- Additional Plugins -->
    <script src="{{ asset('assets/js/materialize.min.js') }}"></script>
    <script src="{{ asset('assets/js/particles.min.js') }}"></script>
    <script src="{{ asset('assets/js/simple-lightbox.min.js') }}"></script>
    <script src="{{ asset('assets/js/responsive.js') }}"></script>

    <!-- Maps (load once) -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY"></script>

    <!-- Theme Scripts -->
    <script src="{{ asset('assets/js/mail-script.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>

    <!-- Livewire Scripts -->
    @livewireScripts

    <!-- Additional Scripts -->
    @stack('scripts')
</body>

</html>
