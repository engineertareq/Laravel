<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel 12 bKash Payment Integration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.css" />
    
    <style>
        .btn-bkash {
            background-color: #E2136E;
            color: white;
            font-weight: bold;
        }
        .btn-bkash:hover {
            background-color: #c90e61;
            color: white;
        }
    </style>
</head>
<body>
  
<div class="container">
    <div class="card mt-5">
        <div class="card-header"><h4>Laravel 12 Notification & Payment</h4></div>
        <div class="card-body">
            
            <div class="mb-4">
                <h5>Toastr Notifications</h5>
                <a href="{{ route('notification', ['type' => 'success', 'entity' => 'Student']) }}" class="btn btn-success">
                    Create Student
                </a>
                <a href="{{ route('notification', ['type' => 'info', 'entity' => 'Product']) }}" class="btn btn-info">
                    Update Product
                </a>
                <a href="{{ route('notification', 'warning') }}" class="btn btn-warning">
                    Warning
                </a>
                <a href="{{ route('notification', ['type' => 'error', 'entity' => 'Invoice']) }}" class="btn btn-danger">
                    Invoice Error
                </a>
            </div>

            <hr>

            <div class="mt-4">
                <h5><img src="https://companieslogo.com/img/orig/bKash-d7294713.png" alt="bKash" style="height: 30px; margin-right: 10px;">Pay with bKash</h5>
                <p class="text-muted">Enter an amount to test the sandbox payment gateway.</p>
                
                <form action="{{ route('bkash-create-payment') }}" method="POST">
                    @csrf
                    <div class="row align-items-center g-3">
                        <div class="col-auto">
                            <label for="amount" class="col-form-label">Amount (BDT):</label>
                        </div>
                        <div class="col-auto">
                            <input type="number" name="amount" id="amount" class="form-control" value="50" min="1" required>
                        </div>
                        <div class="col-auto">
                            <button type="submit" class="btn btn-bkash">
                                Pay Now
                            </button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
  
@include("notifications")
  
</body>
</html>