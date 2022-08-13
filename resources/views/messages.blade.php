

@if(Session::has('success_message'))
<p class="text-center alert alert-success">{{ Session::get('success_message')}}</p>

@endif