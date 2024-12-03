@extends('Layout.layoutvehicle')

@section('header')
<h1 class="display-3 text-white mb-3 animated slideInDown">POST AD</h1>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb justify-content-center text-uppercase">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Pages</a></li>
        <li class="breadcrumb-item text-white active" aria-current="page">Post AD</li>
    </ol>
</nav>
@endsection

@section('content')
<div class="container">
    <h1>Add a Rent</h1>

    @if (session()->has('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @endif

    @if (session()->has('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <form action="{{ route('rents.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Rent Name</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" name="image" id="image" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" class="form-control" rows="4" required></textarea>
        </div>

        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" name="phone" id="phone" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Add Rent</button>
    </form>

    <h2>Your Rents</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Image</th>
                <th>Description</th>
                <th>Phone</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($rents as $rent)
                <tr>
                    <td>{{ $rent->name }}</td>
                    <td><img src="{{ asset('storage/' . $rent->image) }}" alt="{{ $rent->name }}" width="100"></td>
                    <td>{{ $rent->description }}</td>
                    <td>{{ $rent->phone }}</td>
                    <td>
                        <form action="{{ route('rents.destroy', $rent->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
