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
      
      @foreach($product_array as $product)

          <div class="mx-auto container">
              <form id="edit-form"  enctype="multipart/form-data" method="POST" action="{{ route('update_product') }}">

              @csrf

              <input type="hidden" name="id" value="{{$product->id}}">
           
                <div class="form-group mt-2">
                    <label>Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name" required value="{{$product->name}}"/>
                </div>
                  <div class="form-group mt-2">
                      <label>Description</label>
                      <input type="text" class="form-control" id="desc" name="description" placeholder="Description" required value="{{$product->description}}"/>
                  </div>
                  <div class="form-group mt-2">
                    <label>Price</label>
                    <input type="number" class="form-control" id="price" name="price" placeholder="Price" required value="{{$product->price}}"/>
                </div>

                <div class="form-group mt-2">
                    <label>Sale price</label>
                    <input type="text" class="form-control" id="sale_price" name="sale_price" placeholder="sale price" value="{{$product->sale_price}}"
                </div>

                 <div class="form-group mt-2">
                      <label>Quantity</label>
                      <input type="number" class="form-control" id="quantity" name="quantity" placeholder="Quantity" required value="{{$product->quantity}}"/>
                  </div>


                <div class="form-group mt-2">
                    <label>Category</label>
                    <select  class="form-select" required name="category">
                        <option value="Eletrical Appliances">Electrical Appliances</option>
                        <option value="Bluetooth Speakers">Bluetooth Speakers</option>
                        <option value="Earbuds">Earbuds</option>
                        <option value="Tech Gadgets and Devices">Tech Gadgets and Devices</option>
                    </select>
                </div>
                
                  <div class="form-group mt-2">
                      <label>type</label>
                      <input type="text" class="form-control" id="type" name="type" placeholder="type" value="{{$product->type}}" required/>
                  </div>

            


                <div class="form-group mt-3">
                    <input type="submit" class="btn btn-primary" name="edit_product" value="Update"/>
                </div>
 
              </form>
          </div>
    

          @endforeach


      </div>
    </main>
  </div>
</div>

@endsection