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
    @if($products)
    @foreach ($products as $product)
    <tr>
      <th scope="row">{{$product->id}}</th>
      <td>{{$product->name}}</td>
      <td>{{$product->price}}</td>
      <td>{{$product->category->title}}</td>
      <td><a href="/produtos/{{$product->id}}"><button type='button' class='btn btn-info btn-sm' id='editButton'>Detalhes</button></a>
          <button type='submit' form="deleteForm" class="btn btn-danger btn-sm deleteButton">Excluir</button></td>
      </tr>
    @endforeach
    @endif
  </tbody>
</table>
@isset($product)
<form action="{{route('produtos.destroy',['id'=>$product->id])}}" method="POST" id="deleteForm">
          @method('DELETE')
          @csrf
</form>
@endisset          
@endsection
