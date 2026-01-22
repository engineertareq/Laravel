<!DOCTYPE html>
<html>
<head>
    <title>Laravel AJAX CRUD</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
</head>
<body>
      
<div class="container">
    <div class="card mt-5">
        <h2 class="card-header">Product Management</h2>
        <div class="card-body">
            <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3">
                <button class="btn btn-success btn-sm" id="createNewProduct"> 
                    <i class="fa fa-plus"></i> Create New Product
                </button>
            </div>

            <table class="table table-bordered data-table">
                <thead>
                    <tr>
                        <th width="60px">No</th>
                        <th>Name</th>
                        <th>Details</th>
                        <th width="280px">Action</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>
    </div>
</div>
     
<div class="modal fade" id="ajaxModel" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modelHeading"></h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="productForm" name="productForm" class="form-horizontal">
                   <input type="hidden" name="product_id" id="product_id">
                   <div class="alert alert-danger print-error-msg" style="display:none">
                        <ul></ul>
                   </div>
                   <div class="form-group mb-3">
                        <label for="name" class="control-label">Name:</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" maxlength="50">
                    </div>
                    <div class="form-group mb-3">
                        <label for="detail" class="control-label">Details:</label>
                        <textarea id="detail" name="detail" placeholder="Enter Details" class="form-control"></textarea>
                    </div>
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-success" id="saveBtn">
                            <i class="fa fa-save"></i> Save Changes
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
      
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>

<script type="text/javascript">
  $(function () {
    
    // 1. Setup CSRF Token
    $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
    });
    
    // 2. Initialize DataTables
    var table = $('.data-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('products.index') }}", // Ensure this route exists in web.php
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false},
            {data: 'name', name: 'name'},
            {data: 'detail', name: 'detail'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });
    
    // 3. Define Modal (Bootstrap 5 JS)
    var myModal = new bootstrap.Modal(document.getElementById('ajaxModel'), {
        keyboard: false
    });

    // 4. Click "Create New" Button
    $('#createNewProduct').click(function () {
        $('#saveBtn').val("create-product");
        $('#product_id').val('');
        $('#productForm').trigger("reset");
        $('#modelHeading').html("Create New Product");
        $('.print-error-msg').hide();
        myModal.show(); // Native BS5 Show
    });
    
    // 5. Click "Edit" Button
    $('body').on('click', '.editProduct', function () {
      var product_id = $(this).data('id');
      $.get("{{ route('products.index') }}" +'/' + product_id +'/edit', function (data) {
          $('#modelHeading').html("Edit Product");
          $('#saveBtn').val("edit-user");
          $('#product_id').val(data.id);
          $('#name').val(data.name);
          $('#detail').val(data.detail);
          $('.print-error-msg').hide();
          myModal.show(); // Native BS5 Show
      });
    });
    
    // 6. Submit Form
    $('#productForm').submit(function(e) {
        e.preventDefault();
        let formData = new FormData(this);
        $('#saveBtn').html('Sending...');
  
        $.ajax({
            type:'POST',
            url: "{{ route('products.store') }}",
            data: formData,
            contentType: false,
            processData: false,
            success: (response) => {
                $('#saveBtn').html('Save Changes');
                $('#productForm').trigger("reset");
                myModal.hide(); // Native BS5 Hide
                table.draw();
            },
            error: function(response){
                $('#saveBtn').html('Save Changes');
                $('.print-error-msg').find("ul").html('');
                $('.print-error-msg').css('display','block');
                $.each(response.responseJSON.errors, function(key, value) {
                    $('.print-error-msg').find("ul").append('<li>'+value+'</li>');
                });
            }
        });
    });
    
    // 7. Delete Button
    $('body').on('click', '.deleteProduct', function () {
        var product_id = $(this).data("id");
        if(confirm("Are You sure want to delete?")) {
            $.ajax({
                type: "DELETE",
                url: "{{ route('products.index') }}"+'/'+product_id,
                success: function (data) {
                    table.draw();
                },
                error: function (data) {
                    console.log('Error:', data);
                }
            });
        }
    });

  });
</script>
</body>
</html>