@extends("backend.layouts.master")

@section("content")
   <div class="page-wrapper">
       <div class="row">
           <div class="col-12">
               <div class="card">
                   <div class="card-body">
                       <h4 class="card-title">Category List</h4>
                       <div class="table-responsive m-t-40">                    
                           <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                               <thead>
                                   <tr>
                                       <th>ID</th>
                                       <th>Name</th>
                                       <th>Created At</th>
                                       <th>Action</th>
                                   </tr>
                               </thead>
                               <tbody>
                                   @foreach($categories as $category)
                                   <tr>
                                       <td>{{ $category->id }}</td>
                                       <td>{{ $category->name }}</td>
                                       <td>{{ $category->created_at }}</td>
                                        <td>
                                             <a href="#" class="btn btn-info btn-sm">Edit</a>
                                             <a href="#" class="btn btn-danger btn-sm">Delete</a>
                                             </td>
                                   </tr>
                                   @endforeach
                               </tbody>
                           </table>

   </div>
  
@endsection