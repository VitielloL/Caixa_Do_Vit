@extends('layout.nav')

@section('conteudo')
    <div class="container-fluid my-4">
        @if (!empty($dado))
            @foreach ( $dado as $d )
                <div class="d-flex">
                    <h2 class="fw-bold text-uppercase" style="margin-bottom: 15px; padding-top:15px;">{{$d->nome}}</h2>
                </div>

                <p class="text-center bg-info text-white fw-bold">Dados da Venda</p>

                <div class="form-group row">
                    <div class="col-md-4">
                        <label class="form-label" for="nomeproduto">Produto: </label>
                        <input type="text" class="form-control" id="nomeproduto" name="nomeproduto" value="{{$d->nomeproduto ? $d->nomeproduto : '--'}}" disabled>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label" for="nomecliente">Cliente: </label>
                        <input type="text" class="form-control" id="nomecliente" name="nomecliente" value="{{$d->nomecliente ? $d->nomecliente : '--'}}" disabled>
                    </div>
                    <div class="col-md-2">
                        <label class="form-label" for="valor">Valor: </label>
                        <input type="text" class="form-control" id="valor" name="valor" value="{{$d->valor ? $d->valor : '--'}}" disabled>
                    </div>
                    <div class="col-md-2">
                        <label class="form-label" for="datacompra">Data da Compra</label>
                        <input type="date" class="form-control" id="datacompra" name="datacompra" value="{{$d->datacompra ? $d->datacompra : '--'}}" disabled>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-4">
                            <label class="form-label" for="nomeprodutoterceiro">Produto Terceiro: </label>
                            <input type="text" class="form-control" id="nomeprodutoterceiro" name="nomeprodutoterceiro" value="{{ $d->nomeprodutoterceiro ? $d->nomeprodutoterceiro : '--' }}" disabled>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label" for="nometerceiro">Nome Terceiro: </label>
                            <input type="text" class="form-control" id="nometerceiro" name="nometerceiro" value="{{$d->nometerceiro ? $d->nometerceiro : '--'}}" disabled>
                        </div>
                        <div class="col-md-2">
                            <label class="form-label" for="valorterceiro">Valor Terceiro: </label>
                            <input type="text" class="form-control" id="valorterceiro" name="valorterceiro" value="{{$d->valorterceiro ? $d->valorterceiro : '--'}}" disabled>
                        </div>
                        <div class="col-md-2">
                            <label class="form-label" for="valortotal">Valor Total: </label>
                            <input type="text" class="form-control" id="valortotal" value="{{$d->valortotal ? $d->valortotal : '--'}}" disabled>
                        </div>
                    </div>
                    <div class="mt-4 text-left">
                        <a href="{{route('cash')}}" class="btn btn-secondary">Voltar</a>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
@endsection