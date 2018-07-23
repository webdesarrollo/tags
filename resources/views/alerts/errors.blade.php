@if($errors->count()>0)
<div class="container">
  <div class="row">
    <div class="col xs-12">
      <div class="clear" style="color:blue;height:2em;px;width:100%;"></div>
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        @foreach ($errors->all() as $error)
        <strong>{{ $error }}</strong>
        @endforeach
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    </div>
  </div>
</div>
@endif
