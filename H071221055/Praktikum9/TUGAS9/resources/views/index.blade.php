{{-- @extends('layout')

@section('container') --}}
    <head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<div class="container">
    <h1>Daftar Produk</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name of Products</th>
                <th>Description of Products</th>
                <th>Brand</th>
                <th>Price</th>
                <th>Stok</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($vinylProducts as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->brand }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->stock }}</td>
                    <td>
                        <a href="{{ route('vinyl-products.show', $product->id) }}" class="btn btn-primary" style="background-color: #000000; border-color: #777777;">Detail</a>
                        <a href="{{ route('vinyl-products.edit', $product->id) }}" class="btn btn-primary" style="background-color: #000000; border-color: #777777;">Edit</a>
                        <form action="{{ route('vinyl-products.destroy', $product->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" style="background-color: #000000;">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('vinyl-products.create') }}" class="btn btn-primary" style="background-color: #000000; border-color: #777777;">Add new Products</a>
</div><br><br>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
{{-- @endsection --}}


