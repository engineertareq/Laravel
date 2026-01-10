@extends("backend.layouts.master")

@section("content")
<div class="page-wrapper">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="card-title">Create New Product</h4>
                        <a href="{{ route('products.index') }}" class="btn btn-secondary">Back to List</a>
                    </div>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label>Product Name</label>
                                <input type="text" name="name" value="{{old('name')}}" class="form-control" required>
                            </div>
 
                            <div class="col-md-6 mb-3">
                                <label>SKU</label>
                                <input type="text" name="sku" class="form-control" required>
                            </div>

                            <div class="form-group col-md-6">
    <label for="categories_id">Category</label>
    <select name="categories_id" class="form-control" id="categories_id" required>
        <option value="">Select a Category</option>
        
        @foreach($categories as $category)
            <option value="{{ $category->id }}" {{ old('categories_id') == $category->id ? 'selected' : '' }}>
                {{ $category->name }}
            </option>
        @endforeach
        
    </select>
</div>

                            <div class="col-md-6 mb-3">
                                <label>Stock Quantity</label>
                                <input type="number" name="stock" class="form-control" required>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label>Price</label>
                                <input type="number" name="price" class="form-control" step="0.01" required>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label>Product Image</label>
                                <input type="file" name="image" class="form-control">
                            </div>

                            <div class="col-12 mb-3">
                                <label>Details</label>
                                <textarea name="details" class="form-control" rows="4"></textarea>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Save Product</button>
                    </form>

                </div> 
            </div> 
        </div> 
    </div> 
</div> 
@endsection