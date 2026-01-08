@extends("backend.layouts.master")

@section("content")
<div class="page-wrapper">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="card-title">Product List</h4>
                        <a href="{{ route('products.create') }}" class="btn btn-primary">Create New Product</a>
                    </div>

                    @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    <div class="table-responsive m-t-40">                    
                        <table id="myTable" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Stock</th>
                                    <th>SKU</th>
                                    <th>Image</th>
                                    <th>Details</th>
                                    <th>Price</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($products as $product)
                                <tr>
                                    <td>{{ $product->id }}</td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->stock }}</td>
                                    <td>{{ $product->sku }}</td>
                                    <td>
                                        @if($product->image)
                                            <img src="{{ asset('images/' . $product->image) }}" width="50" alt="Product Image">
                                        @else
                                            <span>No Image</span>
                                        @endif
                                    </td>
                                    <td>{{ Str::limit($product->details, 30) }}</td> 
                                    <td>${{ $product->price }}</td>
                                    <td>
                                        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-info btn-sm">Edit</a>

                                        <form method="post" action="{{ route('products.destroy', $product->id) }}" style="display:inline-block;" onsubmit="return confirm('Are you sure?');">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div> 
                </div> 
            </div> 
        </div> 
    </div> 
</div> 
@endsection