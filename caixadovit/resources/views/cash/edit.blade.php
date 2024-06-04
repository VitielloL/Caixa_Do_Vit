@extends('layout.nav')

@section('conteudo')
    <div class="container-fluid my-4">
        <h2 style="margin-bottom: 15px; padding-top:15px;"> Editar Venda </h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        
        <form  action="<?= url('/cash/update',['id' => $dado->id]);?>" method="post">
            @csrf
            @method('PUT')

            <p class="text-center bg-info text-white fw-bold">Dados da Venda</p>

            <div class="form-group row">
                <div class="col-md-4">
                    <label class="form-label" for="nomeproduto">Produto:</label>
                    <input type="text" class="form-control"  id="nomeproduto" name="nomeproduto" value="{{$dado->nomeproduto ? $dado->nomeproduto : '--'}}">
                </div>
                <div class="col-md-4">
                    <label class="form-label" for="nomecliente">Cliente: </label>
                    <input type="text" class="form-control" id="nomecliente" name="nomecliente" value="{{$dado->nomecliente ? $dado->nomecliente : '--'}}">
                </div>
                <div class="col-md-2">
                    <label class="form-label" for="valor">Valor: </label>
                    <input type="text" class="form-control" id="valor" name="valor" value="{{$dado->valor ? $dado->valor : '--'}}">
                </div>
                <div class="col-md-2">
                    <label class="form-label" for="datacompra">Data da Compra</label>
                    <input type="date" class="form-control" id="datacompra" name="datacompra" value="{{$dado->datacompra ? $dado->datacompra : '--'}}">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-4">
                    <label class="form-label" for="nomeprodutoterceiro">Produto Terceiro: </label>
                    <input type="text" class="form-control" id="nomeprodutoterceiro" name="nomeprodutoterceiro" value="{{$dado->nomeprodutoterceiro ? $dado->nomeprodutoterceiro : '--'}}">
                </div>
                <div class="col-md-4">
                    <label class="form-label" for="nometerceiro">Nome Terceiro: </label>
                    <input type="text" class="form-control" id="nometerceiro" name="nometerceiro" value="{{$dado->nometerceiro ? $dado->nometerceiro : '--'}}">
                </div>
                <div class="col-md-2">
                    <label class="form-label" for="valorterceiro">Valor Terceiro:: </label>
                    <input type="text" class="form-control" id="valorterceiro" name="valorterceiro" value="{{$dado->valorterceiro ? $dado->valorterceiro : 0}}">
                </div>
                <!-- <div class="col-md-2">
                    <label class="form-label" for="valortotal">Valor Total: </label>
                    <input type="text" class="form-control" id="valortotal" name="valortotal" value="{{$dado->valortotal ? $dado->valortotal : 0}}">
                </div> -->
            </div>

            <div class="mt-4 text-left">
                <button type="submit" class="btn btn-success text-white">Salvar</button>
                <a href="{{route('cash')}}" class="btn btn-secondary">Voltar</a>
            </div>
        </form>
    </div>
@endsection
