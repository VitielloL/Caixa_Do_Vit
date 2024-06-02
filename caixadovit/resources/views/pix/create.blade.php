@extends('layout.nav')

@section('conteudo')
    <div class="container-fluid my-4">
        <h2 style="margin-bottom: 15px; padding-top:15px;"> Nova Venda </h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        
        <form action='{{route('pix.store')}}' method="POST">
            @csrf

            <p class="text-center bg-info text-white fw-bold">Dados da Venda</p>

            <div class="form-group row">
                <div class="col-md-4">
                    <label class="form-label" for="nomeproduto">Produto: </label>
                    <input type="text" class="form-control"  id="nomeproduto" name="nomeproduto" required>
                </div>
                <div class="col-md-4">
                    <label class="form-label" for="nomecliente">Cliente: </label>
                    <input type="text" class="form-control" id="nomecliente" name="nomecliente">
                </div>
                <div class="col-md-2">
                    <label class="form-label" for="valor">Valor: </label>
                    <input type="text" class="form-control" id="valor" name="valor" required>
                </div>
                <div class="col-md-2">
                    <label class="form-label" for="datacompra">Data da Compra</label>
                    <input type="date" class="form-control" id="datacompra" name="datacompra" required>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-4">
                    <label class="form-label" for="nomeprodutoterceiro">Produto Terceiro: </label>
                    <input type="text" class="form-control" id="nomeprodutoterceiro" name="nomeprodutoterceiro">
                </div>
                <div class="col-md-4">
                    <label class="form-label" for="nometerceiro">Nome Terceiro: </label>
                    <input type="text" class="form-control" id="nometerceiro" name="nometerceiro">
                </div>
                <div class="col-md-2">
                    <label class="form-label" for="valorterceiro">Valor Terceiro: </label>
                    <input type="text" class="form-control" id="valorterceiro" name="valorterceiro">
                </div>
                <!-- <div class="col-md-2">
                    <label class="form-label" for="valortotal">Valor Total: </label>
                    <input type="text" class="form-control" id="valortotal" name="valortotal">
                </div> -->
            </div>
            <div class="mt-4">
                <button type ="submit "class="btn btn-success">Cadastrar</button>
                <a href="{{route('pix')}}" class="btn btn-secondary">Cancelar</a>
            </div>
        </form>
    </div>
@endsection