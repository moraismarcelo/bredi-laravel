@extends('layout')
@section('title','Detalhes de ' . $product->name)
@section('content')
<h1 class="mt-2">Detalhes de {{$product->name}}</h1>
  <div class="form-group">
    <label for="name">Nome:</label>
    <input type="text" class="form-control col-md-3" id="name" name="name" value="{{$product->name}}" readonly>
        
  </div>
  <div class="form-group">
    <label for="price">Preco:</label>
    <input type="text" class="form-control col-md-3" id="price" name="price" value="{{$product->price}}" readonly>
    
  </div>
  <div class="form-group">
    <label for="category_id">Categoria:</label>
    <input type="text" class="form-control col-md-3" id="category_id" name="category_id" value="{{$product->category->title}}" readonly>
  </div>
  <a href="{{route('produtos.index')}}"><button type='button' class='btn btn-info btn-sm'>Voltar</button></a>
  <a href="/produtos/{{$product->id}}/edit"><button type='button' class='btn btn-success btn-sm'>Editar</button></a>
  <button type='button' class='btn btn-danger btn-sm'>Excluir</button>
@endsection
