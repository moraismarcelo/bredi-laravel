@extends('layout')
@section('title','Lista de produtos')
@section('content')
<h1 class="mt-2">Cadastro de Produto</h1>
<form action="{{route('produtos.store')}}" method="post">
  @csrf
  <div class="form-group">
    <label for="name">Nome:</label>
    <input type="text" class="form-control col-md-3" id="name" name="name" value="{{old('name', "")}}">
    <span class="text-danger">{{$errors->first('name')}}</span>
  </div>
  <div class="form-group">
    <label for="price">Preco:</label>
    <input type="text" class="form-control col-md-3" id="price" name="price" value="{{old('price', "")}}">
    <span class="text-danger">{{$errors->first('price')}}</span>
  </div>
  <div class="form-group">
    <label for="category_id">Selecione uma categoria:</label>
    <select class="form-control col-md-3" id="category_id" name="category_id" value="{{old('category_id', "")}}">
      @foreach ($categories as $category)
      <option value="{{$category->id}}">{{$category->title}}</option>    
      @endforeach
    </select>
  </div>
  <div class="form-group">
        <button type="submit" class="btn btn-success col-md-3">Salvar</button>
  </div>
</form>  
@endsection
