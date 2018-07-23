@extends('plantilla.plantilla')
@section('contenido')
<div class="container">
  <div class="row">
    <div class="clear" style="color:blue;height:4em;px;width:100%;"></div>
    <div class="col-sm-9 col-md-8">
      <h1>Lista de Tags</h1>
      <table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th>Name</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($tags as $tag)
          <tr>
            <td>{{ $tag->id }}</td>
            <td>{{ $tag->name }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>

    <div class="col-sm-3 col-md-3">
      <div class="well">
        {!! Form::open(['route' => 'tags.store','method'=>'post']) !!}
        <h2>Nuevo Tag</h2>
        <div class="form-group">
          {!! Form::label('name', 'Nombre: ') !!}
          {!! Form::text('name', null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
          {!! Form::submit('Crear tag', ['class'=>'btn btn-primary btn-block btn-h1-spacing']) !!}
        </div>
        {!! Form::close() !!}
      </div>
    </div>
  </div>
</div>
@endsection
