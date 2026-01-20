<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel 12 bKash Payment & Notifications</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.css" />
    
    <style>
        .bkash-logo {
            height: 40px;
            margin-bottom: 15px;
        }
        .btn-bkash {
            background-color: #E2136E; /* bKash Brand Color */
            color: #fff;
            font-weight: 600;
            border: none;
        }
        .btn-bkash:hover {
            background-color: #c00f5c;
            color: #fff;
        }
        .card-header {
            background-color: #f8f9fa;
            border-bottom: 2px solid #E2136E;
        }
    </style>
</head>
<body>
  
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header text-center">
                    <h4>Laravel 12 bKash Integration</h4>
                </div>
                <div class="card-body">
                    
                    <div class="mb-5 border-bottom pb-4">
                        <h5 class="mb-3 text-muted">Test Notifications</h5>
                        <div class="d-flex gap-2 flex-wrap">
                            <a href="{{ route('notification', ['type' => 'success', 'entity' => 'Student']) }}" class="btn btn-success">
                                Success (Student)
                            </a>
                            <a href="{{ route('notification', ['type' => 'info', 'entity' => 'Product']) }}" class="btn btn-info text-white">
                                Info (Product)
                            </a>
                            <a href="{{ route('notification', 'warning') }}" class="btn btn-warning">
                                Warning
                            </a>
                            <a href="{{ route('notification', ['type' => 'error', 'entity' => 'Invoice']) }}" class="btn btn-danger">
                                Error (Invoice)
                            </a>
                        </div>
                    </div>

                    <div class="text-center">
                        <img src="https://companieslogo.com/img/orig/bKash-d7294713.png" alt="bKash Logo" class="bkash-logo">
                        <h5 class="mb-3">Payment Gateway Sandbox</h5>
                        <p class="text-muted mb-4">Enter an amount to test the payment flow.</p>
                        
                        <form action="{{ route('bkash-create-payment') }}" method="POST" class="row g-3 justify-content-center align-items-center">
                            @csrf
                            
                            <div class="col-auto">
                                <label for="amount" class="col-form-label fw-bold">Amount (BDT):</label>
                            </div>
                            
                            <div class="col-auto">
                                <input type="number" 
                                       name="amount" 
                                       id="amount" 
                                       class="form-control" 
                                       value="10" 
                                       min="1" 
                                       style="width: 100px;" 
                                       required>
                            </div>
                            
                            <div class="col-auto">
                                <button type="submit" class="btn btn-bkash px-4">
                                    Pay Now
                                </button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>

            @if(session('error-alert2'))
                <div class="alert alert-danger mt-3">
                    {{ session('error-alert2') }}
                </div>
            @endif

        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>

<script>
    toastr.options = {
        "closeButton": true,
        "progressBar": true,
        "positionClass": "toast-top-right",
    }
</script>

@include("notifications")
  
</body>
</html>