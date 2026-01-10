@extends("backend.layouts.master")

@section("content")
<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">Edit Product</h4>
            </div>
            <div class="col-7 align-self-center">
                <div class="d-flex no-block justify-content-end align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Products</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Edit Product</h4> 

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form method="post" action="{{ route('products.update', $product->id) }}" class="m-t-30" enctype="multipart/form-data">
                            @csrf
                            @method('PUT') 

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="name">Product Name</label>
                                    <input type="text" name="name" class="form-control" id="name" value="{{ old('name', $product->name) }}" placeholder="Product Name">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="sku">SKU</label>
                                    <input type="text" name="sku" class="form-control" id="sku" value="{{ old('sku', $product->sku) }}" placeholder="Unique ID">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="categories_id">Category ID</label>
                                    <input type="number" name="categories_id" class="form-control" id="categories_id" value="{{ old('categories_id', $product->categories_id) }}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="stock">Stock</label>
                                    <input type="number" name="stock" class="form-control" id="stock" value="{{ old('stock', $product->stock) }}">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="price">Price</label>
                                    <input type="number" step="0.01" name="price" class="form-control" id="price" value="{{ old('price', $product->price) }}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Product Image</label>
                                    <input type="file" name="image" class="form-control">
                                    @if($product->image)
                                        <div class="mt-2">
                                            <small>Current Image:</small> <br>
                                            <img src="{{ asset('images/' . $product->image) }}" alt="Current Image" width="80">
                                        </div>
                                    @endif
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="details">Details</label>
                                    <textarea name="details" class="form-control" id="details" rows="4">{{ old('details', $product->details) }}</textarea>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <button class="btn btn-success waves-effect waves-light" type="submit">Update</button>
                                <a href="{{ route('products.index') }}" class="btn btn-danger waves-effect waves-light m-l-10">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection