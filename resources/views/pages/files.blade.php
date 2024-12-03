@extends('Layout.layoutfiles')

@section('header')
                <h1 class="display-3 text-white mb-3 animated slideInDown">Template</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center text-uppercase">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Template</li>
                    </ol>
                </nav>
@endsection

@section('products')
    <div class="container">
        <div id="file-list" class="row">
            @foreach($files as $file)
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="bg-white p-2 shadow-md">
                        <div class="text-center">
                            <a href="#">
                                <img src="/storage/{{ $file->image }}" alt="{{ $file->name }}" height="300px">
                            </a>
                        </div>
                        <div class="detail p-2">
                            <h4 class="mb-1 fs-5 fw-bold text-center">{{ $file->name }}</h4>
                            <b class="fs-4 text-danger text-center">FREE</b>
                            <div class="row pt-2">
                                <div class="col-md-12">
                                    <a href="/storage/{{ $file->pdf }}" class="btn btn-success w-100" download>Download PDF</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- This is the AJAX part for dynamically loading more files -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // Fetch files using AJAX
            $.ajax({
                url: "{{ route('files.fetch') }}",
                method: 'GET',
                success: function(data) {
                    let fileList = '';
                    data.forEach(function(file) {
                        fileList += `
                            <div class="col-lg-4 col-sm-6 mb-4">
                                <div class="bg-white p-2 shadow-md">
                                    <div class="text-center">
                                        <a href="#">
                                            <img src="/storage/${file.image}" alt="${file.name}" height="400px">
                                        </a>
                                    </div>
                                    <div class="detail p-2">
                                        <h4 class="mb-1 fs-5 fw-bold text-center">${file.name}</h4>
                                        <h4 class="mb-1 fs-5 fw-bold text-danger text-center">FREE</h4>
                                        <div class="row pt-2">
                                            <div class="col-md-12">
                                                <a href="/storage/${file.pdf}" class="btn btn-success w-100" download>Download PDF</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        `;
                    });
                    $('#file-list').html(fileList);
                }
            });
        });
    </script>
@endsection
