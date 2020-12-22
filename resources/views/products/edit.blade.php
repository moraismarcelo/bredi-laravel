@extends('layout')
@section('title','Lista de produtos')
@section('content')
<h1 class="mt-2">Cadastro de Produto</h1>
<form action="{{route('produtos.store')}}" method="post">
@method('PATCH')
@include('products.form')
</form>  
@endsection
