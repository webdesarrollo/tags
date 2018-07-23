@if( Session::has( 'ok' ))
<div class="container">
  <div class="row">
    <div class="clear" style="color:blue;height:2em;px;width:100%;"></div>
    <div class="col xs-12">
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{{ Session::get( 'ok' ) }}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    </div>
  </div>
</div>
@endif
