<a href="javascript:void(0)" 
   data-toggle="tooltip" 
   data-id="{{ $row->id }}" 
   title="View" 
   class="me-1 btn btn-info btn-sm showProduct">
   <i class="fa-regular fa-eye"></i> View
</a>

<a href="javascript:void(0)" 
   data-toggle="tooltip" 
   data-id="{{ $row->id }}" 
   title="Edit" 
   class="edit btn btn-primary btn-sm editProduct">
   <i class="fa-regular fa-pen-to-square"></i> Edit
</a>

<a href="javascript:void(0)" 
   data-toggle="tooltip" 
   data-id="{{ $row->id }}" 
   title="Delete" 
   class="btn btn-danger btn-sm deleteProduct">
   <i class="fa-solid fa-trash"></i> Delete
</a>