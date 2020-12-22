@extends('layout')
@section('title','Lista de produtos')
@section('content')

<h1>Lista de produtos</h1>
<a href="{{route('produtos.create')}}"><button type="button" class="btn btn-success">Adicionar Produto</button></a>
<table class="table table-hover mt-2">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Preço</th>
      <th scope="col">Categoria</th>
      <th scope="col">Ação</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($products as $product)
    <tr>
      <th scope="row">{{$product->id}}</th>
      <td>{{$product->name}}</td>
      <td>{{$product->price}}</td>
      <td>{{$product->category->title}}</td>
      <td><a href="/produtos/{{$product->id}}"><button type='button' class='btn btn-info btn-sm' id='editButton'>Detalhes</button></a>
          <button type='button' class='btn btn-danger btn-sm deleteButton'>Excluir</button></td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection
