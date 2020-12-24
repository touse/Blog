@extends('backend.layout.master')
 
 @section('title')
 b-Catt
 @endsection

 @section('styles')
 @endsection

 @section('content')
 <h1 class="h3 mb-4 text-gray-800">Category</h1>

   <!-- Basic Card Example -->
   <div class="card shadow mb-4">
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Category</h6>
                                    <a href="" class="float-right btn btn-success" data-toggle="modal" data-target="#addcatm">Add Category</a>
                                  
   
                                </div>
                                <div class="card-body">
                                    The styling for this basic card example is created by using default Bootstrap
                                    utility classes. By using utility classes, the style of the card component can be
                                    easily modified with no need for any custom CSS!
                                </div>
                            </div>
    @include('backend.partials.catm')                        

 @endsection

 @section('scripts')

  <script type="text/javascript">
    $(document).ready(function(){
        
        $('#addcat').submit(function(event){

        event.preventDefault();

        var form= $('#addcat')[0];
        var formData= new FormData(form);

        $.ajax({
            url : baseUrl + '/addcat',
            type : 'POST',
            data : formData,
            contentType : false,
            processData : false,

            success: function(data)
            {

            }
            

        });

    });
    });
  
  </script>


 @endsection











