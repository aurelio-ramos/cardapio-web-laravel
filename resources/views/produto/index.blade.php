@extends('layouts.app')
@section('title','dashboard')

@section('main')
<a href="/public/pages/produto/form.php" class="btn btn-primary mb-3">Cadastrar Produto</a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nome</th>
        <th scope="col">Preço</th>
        <th scope="col">Ações</th>      
      </tr>
    </thead>
    <tbody>
      {{-- <?php foreach($cardapio->getProdutos() as $id => $produto){ ?> --}}
          <tr>
            <th scope="row">$id</th>
            <td>$produto->getNome()> <small>($produto->getDescricao)</small></td>
            <td>$produto->getPrecoFormatado()</td> 
            <td> 
                <a href="produto.form.php?id=$id"> 
                    <i class="fas fa-edit"> </i>
                </a>
                <a href="produto.deletar.php?id=$id" data-bs-toggle="modal" data-bs-target="#modal-deletar"> 
                  <i class="fas fa-trash-alt"></i>
                </a>
            </td>
          </tr> 
      {{-- <?php } ?> --}}
    </tbody>
  </table>
 
  
  <!-- Modal -->
  <dialog class="modal fade" id="modal-deletar" tabindex="-1" aria-labelledby="deletarModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="deletarModalLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </dialog>
@endsection