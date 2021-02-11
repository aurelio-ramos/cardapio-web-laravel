@extends('layouts.app')

@section('title','cadastrar')

@section('header')
<header class="container-fluid p-3">
    <h1 class="display-6 mb-3 text-center">Cadastrar Produtos</h1>    
</header>
@endsection

@section('content')
<main class="container vh-100 mt-5">
   
    <form action="/public/pages/produto/salvar" method="POST">
        <div class="form-floating mb-3">
        <input type="text" class="form-control" id="floatingNome" placeholder="Nome" name="nome" 
        value="<?=isset($produto)?$produto->getNome():''?>">
        <label for="floatingNome">Nome</label>
        </div>
        <div class="form-floating mb-3">
        <input type="text" class="form-control" id="floatingDescricao" placeholder="Descricao" name="descricao"
        value="<?=isset($produto)?$produto->getDescricao():''?>">
        <label for="floatingDescricao">Descrição</label>
        </div>
        <div class="form-floating mb-3">
        <input type="number" step="0.01" class="form-control" id="floatingPreco" placeholder="Preco" name="preco"
        value="<?=isset($produto)?$produto->getPreco():''?>">
        <label for="floatingPreco">Preço</label>
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>  
  
</main>   
@endsection

@section('rodape')
<footer>
    <strong>Copyright &copy; {{date('Y')}} Dev</strong>    
    {{ config('app.name') }} - ambiente:{{ config('app.env') }} (PHP v{{ PHP_VERSION }}) versão {{ env('APP_VERSION','1.0-candidate') }} 
</footer>      
@endsection