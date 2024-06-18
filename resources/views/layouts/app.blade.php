<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<head>
  <title>{{ config('app.name') }}</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Sites meta Data -->
  <meta name="application-name" content="{{ config('app.name') }}">
  <meta name="author" content="{{ config('app.name') }}">
  <meta name="keywords" content="{{ config('app.name') }}">
  <meta name="description" content="{{ config('app.name') }}">

  <!-- OG meta data -->
  <meta property="og:title" content="{{ config('app.name') }}">
  <meta property="og:site_name" content={{ config('app.name') }}>
  <meta property="og:url" content="{{ url('/') }}">
  <meta property="og:description" content="{{ config('app.name') }}">
  <meta property="og:type" content="{{ config('app.name') }}">
  <meta property="og:image" content="assets/images/og.png">

  <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon" />

  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}" media="all" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="{{ asset('assets/css/all.min.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css')}}">

  <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" rel="stylesheet">

  {{-- gtranslate --}}
  <script>window.gtranslateSettings = {"default_language":"en","wrapper_selector":".gtranslate_wrapper"}</script>
  <script src="https://cdn.gtranslate.net/widgets/latest/dropdown.js" defer></script>

  <!-- main css for template -->
  <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
</head>

<body>

  <!-- ===============>> Preloader start here <<================= -->
  <div class="preloader">
    <img src="{{ asset('assets/images/logo/preloader.png') }}" alt="preloader icon">
  </div>
  <!-- ===============>> Preloader end here <<================= -->



  <!-- ===============>> light&dark switch start here <<================= -->
  <div class="lightdark-switch">
    <span class="switch-btn" id="btnSwitch"><img src="{{ asset('assets/images/icon/moon.svg') }}" alt="light-dark-switchbtn"
        class="swtich-icon"></span>
  </div>
  <!-- ===============>> light&dark switch start here <<================= -->

  @include('layouts.header')

  @yield('content')

  @include('layouts.footer')

  <!-- ===============>> scrollToTop start here <<================= -->
  <a href="#" class="scrollToTop scrollToTop--style1"><i class="fa-solid fa-arrow-up-from-bracket"></i></a>
  <!-- ===============>> scrollToTop ending here <<================= -->


  <!-- vendor plugins -->
  <script src="{{ asset('assets/admin/libs/jquery/dist/jquery.min.js ')}}"></script>
  <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/js/all.min.js')}}"></script>
  <script src="{{ asset('assets/js/swiper-bundle.min.js')}}"></script>
  <script src="{{ asset('assets/js/aos.js')}}"></script>
  <script src="{{ asset('assets/js/fslightbox.js')}}"></script>
  <script src="{{ asset('assets/js/purecounter_vanilla.js')}}"></script>

  <script src="{{ asset('assets/js/custom.js')}}"></script>
   <!-- This page plugin js -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
   <!-- ============================================================== -->
  <script>
    @if (Session::has('message'))
        var type = "{{ Session::get('alert-type', 'info') }}"
        switch (type) {
            case 'info':

                toastr.options.timeOut = 5000;
                toastr.info("{{ Session::get('message') }}");
                var audio = new Audio('audio.mp3');
                audio.play();
                break;
            case 'success':

                toastr.options.timeOut = 5000;
                toastr.success("{{ Session::get('message') }}");
                var audio = new Audio('audio.mp3');
                audio.play();

                break;
            case 'warning':

                toastr.options.timeOut = 5000;
                toastr.warning("{{ Session::get('message') }}");
                var audio = new Audio('audio.mp3');
                audio.play();

                break;
            case 'error':

                toastr.options.timeOut = 10000;
                toastr.error("{{ Session::get('message') }}");
                var audio = new Audio('audio.mp3');
                audio.play();

                break;
        }
    @endif
</script>
</body>
</html>