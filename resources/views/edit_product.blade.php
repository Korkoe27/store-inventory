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

    

      <h2>Edit Product</h2>
      <div class="table-responsive">
      


          <div class="mx-auto container">
              <form id="edit-form"  enctype="multipart/form-data">
           
                <div class="form-group mt-2">
                    <label>Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name" required/>
                </div>
                  <div class="form-group mt-2">
                      <label>Description</label>
                      <input type="text" class="form-control" id="desc" name="description" placeholder="Description" required/>
                  </div>
                  <div class="form-group mt-2">
                    <label>Price</label>
                    <input type="number" class="form-control" id="price" name="price" placeholder="Price" required/>
                </div>

                <div class="form-group mt-2">
                    <label>Sale price</label>
                    <input type="text" class="form-control" id="sale_price" name="sale_price" placeholder="sale price" required/>
                </div>

                 <div class="form-group mt-2">
                      <label>Quantity</label>
                      <input type="number" class="form-control" id="quantity" name="quantity" placeholder="Quantity" required/>
                  </div>


                <div class="form-group mt-2">
                    <label>Category</label>
                    <select  class="form-select" required name="category">
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                    </select>
                </div>
                
                  <div class="form-group mt-2">
                      <label>type</label>
                      <input type="text" class="form-control" id="type" name="type" placeholder="type" required/>
                  </div>

            


                <div class="form-group mt-3">
                    <input type="submit" class="btn btn-primary" name="edit_product" value="Edit"/>
                </div>
 
              </form>
          </div>
    




      </div>
    </main>
  </div>
</div>

@endsection