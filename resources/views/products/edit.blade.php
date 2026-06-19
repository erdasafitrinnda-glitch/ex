<!DOCTYPE html>
<html>
<head>
    <title>Edit Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">

<h2>Edit Product</h2>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="mb-2">
        <label>Nama</label>
        <input type="text" name="name" class="form-control" value="{{ $product->name }}">
    </div>

    <div class="mb-2">
        <label>Deskripsi</label>
        <textarea name="description" class="form-control">{{ $product->description }}</textarea>
    </div>

    <div class="mb-2">
        <label>Harga</label>
        <input type="number" name="price" class="form-control" value="{{ $product->price }}">
    </div>

    <div class="mb-2">
        <label>Image</label><br>
        @if($product->image)
            <img src="{{ asset('images/'.$product->image) }}" width="100"><br><br>
        @endif
        <input type="file" name="image" class="form-control">
    </div>

    <button class="btn btn-primary">Update</button>
    <a href="{{ route('products.index') }}" class="btn btn-secondary">Kembali</a>
</form>

</body>
</html>