@extends('layout.nav')

@section('conteudo')
<div class="container-fluid my-4">
    <div style="margin-bottom: 15px; padding-top:15px; display:flex; justify-content:space-between; align-items:center;">
        <h2>Vendas no <i>Cash <h5>R$ {{ number_format($diferencaTotal, 2, ',', '.') }}</h5></i></h2> 
        <a href='{{route('cash.novo')}}' class='btn btn-success' style="height: 40px;"><i class="fas fa-coins"></i> &nbsp Cadastrar</a>
    </div>

    <!-- Formulário de busca -->
    <form action="{{ route('cash.buscar') }}" method="GET" class="mb-4">
        <div class="row">
            <div class="col-md-3">
                <input type="text" name="nomeproduto" class="form-control" placeholder="Produto" value="{{ request('nomeproduto') }}">
            </div>
            <div class="col-md-3">
                <input type="text" name="nomecliente" class="form-control" placeholder="Cliente" value="{{ request('nomecliente') }}">
            </div>
            <div class="col-md-2">
                <input type="text" name="nometerceiro" class="form-control" placeholder="Nome Terceiro" value="{{ request('nometerceiro') }}">
            </div>
            <div class="col-md-2">
                <input type="date" name="datacompra" class="form-control">
            </div>
            <div class="col-md-2">
                <button type="submit" class="btn btn-primary">Buscar</button>
                <a href="{{ route('cash') }}" class="btn btn-secondary">Limpar Filtros</a>
            </div>
        </div>
    </form>

    @if ($dados->total() > 0)
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-full-width">
                        <thead class="bg-primary text-light">
                            <tr>
                                <th class="text-center">Produto</th>
                                <th class="text-center">Cliente</th>
                                <th class="text-center">Valor</th>
                                <th class="text-center">Terceiro</th>
                                <th class="text-center">Valor Final</th>
                                <th class="text-center">Data Compra</th>
                                <th class="text-center">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($dados as $dado)
                                @php
                                    $linkReadMore = url('/cash/' . $dado->id);
                                    $linkEditItem = url ('/cash/editar/' . $dado->id);
                                    $linkRemoveItem = url ('/cash/remover/' . $dado->id);
                                @endphp

                                <tr>
                                    <td class="text-center">{{ !empty($dado->nomeproduto) ? $dado->nomeproduto : '--' }}</td>
                                    <td class="text-center">{{ !empty($dado->nomecliente) ? $dado->nomecliente : '--' }}</td>
                                    <td class="text-center">R$ {{ !empty($dado->valor) ? $dado->valor : '--' }}</td>
                                    <td class="text-center">{{ !empty($dado->nometerceiro) ? $dado->nometerceiro : '--' }}</td>
                                    <!-- <td class="text-center">R$ {{ !empty($dado->valortotal) ? $dado->valortotal : '--' }}</td> -->
                                    <td class="text-center">R$ {{
                                            !empty($dado->valor) && isset($dado->valorterceiro) ? 
                                            number_format(abs($dado->valor - $dado->valorterceiro), 2, ',', '.') : 
                                            (!empty($dado->valor) ? number_format($dado->valor, 2, ',', '.') : '--')
                                        }}
                                    </td>
                                    <td class="text-center">{{ !empty($dado->datacompra) ? \Carbon\Carbon::parse($dado->datacompra)->format('d/m/Y') : '--' }}</td>
                                    <td class="text-center">
                                        <div class="d-flex justify-content-center">
                                            <a href={{$linkReadMore}} class="btn btn-info mx-1"><i class="fa fa-eye mr-1 mb-0" aria-hidden="true"></i> Ver Mais</a>
                                            <a href={{$linkEditItem}} class="btn btn-warning mx-1" style="color:white"><i class="fa fa-pen mr-1 mb-0" aria-hidden="true"></i> Editar</a>
                                            <a href={{$linkRemoveItem}} class="btn btn-danger mx-1"><i class="fa fa-trash mr-1 mb-0" aria-hidden="true"></i> Excluir</a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="row mt-1">
            <div class="col-md-12">
                <nav aria-label="Navegação de página">
                    <ul class="pagination justify-content-center">
                        @if ($dados->currentPage() > 1)
                            <li class="page-item">
                                <a class="page-link" href="{{ $dados->previousPageUrl() }}" aria-label="Anterior">
                                    Anterior
                                </a>
                            </li>
                        @endif

                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1">
                                Mostrando {{ $dados->firstItem() }} a {{ $dados->lastItem() }} de {{ $dados->total() }} resultados
                            </a>
                        </li>

                        @if ($dados->hasMorePages())
                            <li class="page-item">
                                <a class="page-link" href="{{ $dados->nextPageUrl() }}" aria-label="Próximo">
                                    Próximo
                                </a>
                            </li>
                        @endif
                    </ul>
                </nav>
            </div>
        </div>
    @endif
</div>
@endsection
