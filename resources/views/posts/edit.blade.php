@extends('plantilla.plantilla')
@section('css')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
@endsection
@section('contenido')
<div class="container">
  <div class="row">
    <div class="clear" style="color:blue;height:4em;px;width:100%;"></div>
    <div class="col col-md-8 offset-md-2">
      <h1>Editar post</h1>
      {!! Form::open(['route'=>['posts.update', $post->id],'method'=>'put']) !!}
      <div class="form-group">
        {!! Form::label('title', 'Titulo:') !!}
        {!! Form::text('title', null, ['class'=>'form-control','value'=>"{{ old('title') }}"]) !!}
      </div>
      <div class="form-group">
        {!! Form::label('tags', 'Tags:') !!}
        {!! Form::select('tags[]', $tags2, null, ['class'=>'form-control selectpicker', 'multiple']) !!}
      </div>
        {!! Form::label('body', 'Post:') !!}
        {!! Form::textarea('body', null, ['class'=>'form-control','rows'=>'5']) !!}
      </div>
      <div class="form-group">
        {!! Form::submit('Crear', ['class'=>'btn btn-block btn-success']) !!}
      </div>
      {!! Form::close() !!}
    </div>
  </div>

    <div class="col-md-8 offset-md-2 text-center">
      <hr>
      <a href="{{url('posts')}}" class="btn btn-danger">Volver</a>
    </div>
  </div>
</div>
@endsection
@push('scripts')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
  <script type="text/javascript">
    $('.selectpicker').val('{!!json_encode($post->tags()->pluck('tag_id')->toArray())!!}').trigger('change');
  </script>
@endpush
