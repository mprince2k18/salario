<!-- SESSION -->

{{-- @if (session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

@if (session('restore'))
<div class="alert alert-success">
    {{ session('restore') }}
</div>
@endif

@if (session('delete'))
<div class="alert alert-danger">
    {{ session('delete') }}
</div>
@endif --}}

<!-- SESSION END-->
@if ($errors->any())



<div class="alert alert-danger alert-dismissible fade show error_message" role="alert">

<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span>
</button>

@foreach ($errors->all() as $error)
      <strong class="d-block">{{ $error }}</strong>
@endforeach


</div>



@endif
