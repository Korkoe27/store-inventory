@extends('layouts.main')

@section('content')


<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
          
          </div>
     
        </div>
      </div>

    

      <h2>Edit Product Image</h2>
      <div class="table-responsive">
      


          <div class="mx-auto container">
              <form id="edit-image-form"  enctype="multipart/form-data">
             
            

                <div class="form-group mt-2">
                    <label>Image </label>
                    <input type="file" class="form-control" id="image" name="image" placeholder="Image " required/>
                </div>

          

                <div class="form-group mt-3">
                    <input type="submit" class="btn btn-primary" name="edit_image" value="Update"/>
                </div>
 
              </form>
          </div>
    




      </div>
    </main>
  </div>
</div>


@endsection