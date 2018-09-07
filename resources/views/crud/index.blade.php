<!-- index.blade.php -->

@extends('master')
@section('content')
  <div class="container">
    <a href="{{action('CRUDController@create')}}" class="btn btn-primary">Nuevo</a>
    <br><br>
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Titulo</th>
        <th>Descripción</th>
        <th colspan="2">Acción</th>
      </tr>
    </thead>
    <tbody>
      @foreach($cruds as $post)
      <tr>
        <td>{{$post['id']}}</td>
        <td>{{$post['title']}}</td>
        <td>{{$post['post']}}</td>
        <td><a href="{{action('CRUDController@edit', $post['id'])}}" class="btn btn-warning">Editar</a></td>
        <td>
          <form action="{{action('CRUDController@destroy', $post['id'])}}" method="post">
            {{csrf_field()}}
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Eliminar</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
@endsection