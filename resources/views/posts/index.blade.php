@extends('plantilla.plantilla')

@section('contenido')
<div class="container">
  <div class="row">
    <div class="clear" style="color:blue;height:4em;px;width:100%;"></div>
    <div class="col col-md-9">
      @if($posts->count()>0)
        <h1>Lista de post</h1>
        <ul class="list-group">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Titulo</th>
                  <th>Tags</th>
                  <th>Operaciones</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($posts as $index => $post)
                <tr>
                  <td>{{$index+1}}</td>
                  <td>{{$post->title}}</td>
                  <td>
                    @foreach ($post->tags as $key => $tag)
                      <span class="label label-default">{{ $tag->name }}</span>
                    @endforeach
                  </td>
                  <td>
                    {{ link_to_route('posts.edit', 'Editar', $parameters = [$post->id], $attributes = ['class'=>'btn btn-info btn-sm']) }}
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
        </ul>
      @else
        <h1>No hay posts</h1>
      @endif
    </div>
    <div class="col col-md-3">
      <a href="{{url('posts/create')}}" class="btn btn-primary">
        Crear nuevo post
      </a>
    </div>
  </div>
</div>
@endsection
