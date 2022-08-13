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

    

      <h2>Section title</h2>

      @include('messages')

      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Photo</th>
              <th scope="col">Name</th>
              <th scope="col">Price(GH₵)</th>
              <th scope="col">Quantity</th>
              <th scope="col">Category</th>
              <th scope="col">Type</th>
              <th scope="col">Edit</th>
            </tr>
          </thead>
          <tbody>

          @foreach($products as $product)

            <tr;">
              <td>{{ $product->id }}</td>
              <td><img class="product-image"; src="{{ asset('product-images/'.$product->image) }}" alt=""></td>
              <td>{{ $product->name }}</td>
              <td>{{ $product->price }}</td>
              <td>{{ $product->quantity }}</td>
              <td>{{ $product->category }}</td>
              <td>{{ $product->type }}</td>
              <td><a href="{{ route('edit_product', ['id'=>$product->id]) }}" class="btn btn-warning">Edit</a></td>
            </tr>

            @endforeach

          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>

@endsection