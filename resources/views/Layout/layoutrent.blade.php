<!doctype html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>COMIC CRAZE - Rent</title>
        <link rel="icon" href="{{ asset('M&NLogo.ico') }}" type="image/x-icon">
    </head>
    
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

    <body>
        <div class="container-fluid  py-5 product-cover">
            <div class="container-xl">
                <div class="row">
                   @yield('content')
                </div>
            </div>
        </div>
        
       <!-- Footer Start -->
@include('components.footer')   
<!-- Footer End -->


<!-- Back to Top -->
@include('components.backtotop') 


<!-- JavaScript Libraries -->
@include('scripts.scripts') 

@include('scripts.productsscript') 
        
   
        
</body>
   
</html>