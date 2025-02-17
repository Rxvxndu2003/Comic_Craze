<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>COMIC CRAZE - Contact Us</title>
    <link rel="icon" href="{{ asset('M&NLogo.ico') }}" type="image/x-icon">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
</head>

<body>

@include('Libraries.style') 

<!-- Spinner Start -->
@include('components.spinner') 
<!-- Spinner End -->

<!-- Topbar Start -->
@include('components.topbar') 
<!-- Topbar End -->

<!-- Navbar Start -->
@include('components.navbar') 
<!-- Navbar End -->

<!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/thor.jpg);">
        <div class="container-fluid page-header-inner py-5">
            <div class="container text-center">
                @yield('header')
            </div>
        </div>
    </div>
<!-- Page Header End -->

<!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
           @yield('contact')
        </div>
    </div>
<!-- Contact End -->

<!-- Footer Start -->
@include('components.footer')   
<!-- Footer End -->


<!-- Back to Top -->
@include('components.backtotop') 


<!-- JavaScript Libraries -->
@include('scripts.scripts') 
</body>

</html>