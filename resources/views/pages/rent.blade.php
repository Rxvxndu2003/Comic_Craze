@extends('Layout.layoutrent')

@section('header')
                <h1 class="display-3 text-white mb-3 animated slideInDown">Rent</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center text-uppercase">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Rent</li>
                    </ol>
                </nav>
@endsection

@section('content')
    <div class="container">
        <!-- Display Rents -->
        <div id="rent-list" class="row">
            @foreach($rents as $rent)
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="bg-white p-2 shadow-md">
                        <div class="text-center">
                            <a href="#">
                                <img src="/storage/{{ $rent->image }}" alt="{{ $rent->name }}" height="400px">
                            </a>
                        </div>
                        <div class="detail p-2">
                            <h4 class="mb-1 fs-5 fw-bold text-center">{{ $rent->name }}</h4>
                            <h4 class="mb-1 fs-5 fw-bold text-center">{{ $rent->phone }}</h4>
                            <div class="row pt-2">
                                <div class="col-md-12">
                                    <a href="" class="btn btn-success w-100">Contact Seller</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- This is the AJAX part for dynamically loading more rents -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // Fetch rents using AJAX
            $.ajax({
                url: "{{ route('rents.fetch') }}",
                method: 'GET',
                success: function(data) {
                    let rentList = '';
                    data.forEach(function(rent) {
                        rentList += `
                            <div class="col-lg-4 col-sm-6 mb-4">
                                <div class="bg-white p-2 shadow-md">
                                    <div class="text-center">
                                        <a href="#">
                                            <img src="/storage/${rent.image}" alt="${rent.name}" height="400px">
                                        </a>
                                    </div>
                                    <div class="detail p-2">
                                        <h4 class="mb-1 fs-5 fw-bold">${rent.name}</h4>
                                        <b class="fs-4 text-danger">FREE</b>
                                        <div class="row pt-2">
                                            <div class="col-md-12">
                                                <a href="/storage/${rent.pdf}" class="btn btn-success w-100" download>Download PDF</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        `;
                    });
                    $('#rent-list').html(rentList);
                }
            });
        });
    </script>
@endsection
