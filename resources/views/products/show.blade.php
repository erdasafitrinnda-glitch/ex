<!DOCTYPE html>
<html>
<head>
    <title>Detail Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">

<a href="{{ route('products.index') }}" class="btn btn-secondary mb-3">
    ← Kembali
</a>

<div class="card">
    @if($product->image)
        <img src="{{ asset('images/'.$product->image) }}" class="card-img-top" style="max-height:400px; object-fit:cover;">
    @endif

    <div class="card-body">
        <h3>{{ $product->name }}</h3>

        <p>{{ $product->description }}</p>

        <h4 class="text-danger">
            Rp {{ number_format($product->price) }}
        </h4>
    </div>
</div>

</body>
</html>