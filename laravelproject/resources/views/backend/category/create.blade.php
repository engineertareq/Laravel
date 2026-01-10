@extends("backend.layouts.master")

@section("content")
<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">Add Product</h4>
            </div>
            <div class="col-7 align-self-center">
                <div class="d-flex no-block justify-content-end align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Create</li>
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
                        <h4 class="card-title">Create New Product</h4>

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form method="post" action="{{ route('products.store') }}" class="m-t-30" enctype="multipart/form-data">
                            @csrf
                            
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="name">Product Name</label>
                                    <input name="name" value="{{ old('name') }}" type="text" class="form-control" id="name" placeholder="Enter Product Name">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="sku">SKU</label>
                                    <input name="sku" value="{{ old('sku') }}" type="text" class="form-control" id="sku" placeholder="Unique ID">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="categories_id">Category ID</label>
                                    <input name="categories_id" value="{{ old('categories_id') }}" type="number" class="form-control" id="categories_id" placeholder="Enter Category ID">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="stock">Stock</label>
                                    <input name="stock" value="{{ old('stock') }}" type="number" class="form-control" id="stock" placeholder="Quantity">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="price">Price</label>
                                    <input name="price" value="{{ old('price') }}" type="number" step="0.01" class="form-control" id="price" placeholder="0.00">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="image">Product Image</label>
                                    <input name="image" type="file" class="form-control" id="image">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="details">Details</label>
                                    <textarea name="details" class="form-control" id="details" rows="4" placeholder="Enter product details...">{{ old('details') }}</textarea>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <button class="btn btn-success waves-effect waves-light" type="submit">Submit</button>
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