<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel 12 Toastr Notification</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.css" />
</head>
<body>
  
<div class="container">
    <div class="card mt-5">
        <div class="card-header"><h4>Laravel 12 Toastr Notification</h4></div>
        <div class="card-body">
            
            <a href="{{ route('notification', ['type' => 'success', 'entity' => 'Student']) }}" class="btn btn-success">
                Create Student
            </a>

            <a href="{{ route('notification', ['type' => 'info', 'entity' => 'Product']) }}" class="btn btn-info">
                Update Product
            </a>

            <a href="{{ route('notification', 'warning') }}" class="btn btn-warning">
                Warning (Default User)
            </a>

             <a href="{{ route('notification', ['type' => 'error', 'entity' => 'Invoice']) }}" class="btn btn-danger">
                Invoice Error
            </a>

        </div>
    </div>
</div>
  
@include("notifications")
  
</body>
</html>