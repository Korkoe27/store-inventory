

@if(Session::has('success_message'))
<p class="text-center alert alert-success">{{ Session::get('success_message')}}</p>

@endif



@if(Session::has('failure_message'))
<p class="text-center alert alert-danger">{{ Session::get('failure_message')}}</p>

@endif



@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
        </ul>
    </div>

@endif