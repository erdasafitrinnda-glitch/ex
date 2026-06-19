<!DOCTYPE html>
<html>
<head>
    <title>Data Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">

<h2>Data Product</h2>

{{-- Notifikasi --}}
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<a href="{{ route('products.create') }}" class="btn btn-primary mb-3">
    + Tambah Product
</a>

<div class="row">
    @foreach($products as $p)
        <div class="col-md-4 mb-3">

            <a href="{{ route('products.show', $p->id) }}" style="text-decoration:none; color:black;">

                <div class="card h-100 shadow-sm">

                    @if($p->image)
                        <img src="{{ asset('images/'.$p->image) }}" class="card-img-top" style="height:200px; object-fit:cover;">
                    @endif

                    <div class="card-body">
                        <h5 class="card-title">{{ $p->name }}</h5>
                        <p class="card-text">{{ $p->description }}</p>
                        <b>Rp {{ number_format($p->price) }}</b>
                    </div>

                </div>

            </a>

        </div>
    @endforeach
</div>

<hr>

<h4>Table View</h4>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Deskripsi</th>
            <th>Harga</th>
            <th>Image</th>
            <th>Aksi</th>
        </tr>
    </thead>

    <tbody>
        @foreach($products as $p)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $p->name }}</td>
            <td>{{ $p->description }}</td>
            <td>Rp {{ number_format($p->price) }}</td>
            <td>
                @if($p->image)
                    <img src="{{ asset('images/'.$p->image) }}" width="70">
                @endif
            </td>
            <td>
                <a href="{{ route('products.show', $p->id) }}" class="btn btn-info btn-sm">
                    Detail
                </a>

                <form action="{{ route('products.destroy', $p->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button onclick="return confirm('Yakin hapus?')" class="btn btn-danger btn-sm">
                        Hapus
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

</body>
</html>