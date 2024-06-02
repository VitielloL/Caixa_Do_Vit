<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Pix;
use Illuminate\Validation\Rule;
use Carbon\Carbon;

class PixController extends Controller
{
    public function index()
    {
        // Calculando a soma de todos os valores
        $somaValores = Pix::sum('valor');
    
        // Calculando a soma de todos os valores terceiros
        $somaValoresTerceiro = Pix::sum('valorterceiro');
    
        // Calculando a diferença entre a soma de todos os valores e a soma de todos os valores terceiros
        $diferencaTotal = $somaValores - $somaValoresTerceiro;
    
        // Recuperar todos os clientes ordenados pelo nome
        $dados = Pix::orderBy('nomeproduto')->paginate(10);
        
        foreach ($dados as $dado) {
            // Convertendo a data para o formato brasileiro
            $dado->datacompra = Carbon::parse($dado->datacompra)->format('d/m/Y');
        }
    
        // Retornar a view com os dados e a diferença total
        return view('pix.index', compact('dados', 'diferencaTotal'));
    }

    public function buscar(Request $request)
    {
        // Recuperar os parâmetros de busca do formulário
        $nomeproduto = $request->input('nomeproduto');
        $nomecliente = $request->input('nomecliente');
        $nomeprodutoterceiro = $request->input('nomeprodutoterceiro');
        $nometerceiro = $request->input('nometerceiro');
        $datacompra = $request->input('datacompra');

        // Consulta inicial
        $query = Pix::query();

        // Aplicar filtros conforme necessário
        if ($nomeproduto) {
            $query->where('nomeproduto', 'like', '%' . $nomeproduto . '%');
        }
        if ($nomecliente) {
            $query->where('nomecliente', 'like', '%' . $nomecliente . '%');
        }
        if ($nomeprodutoterceiro) {
            $query->where('nomeprodutoterceiro', 'like', '%' . $nomeprodutoterceiro . '%');
        }
        if ($nometerceiro) {
            $query->where('nometerceiro', 'like', '%' . $nometerceiro . '%');
        }
        if ($datacompra) {
            $query->where('datacompra', 'like', '%' . $datacompra . '%');
        }

        // Paginar os resultados
        $dados = $query->paginate(10);

        // Calculando a soma de todos os valores
        $somaValores = Pix::sum('valor');

        // Calculando a soma de todos os valores terceiros
        $somaValoresTerceiro = Pix::sum('valorterceiro');

        // Calculando a diferença entre a soma de todos os valores e a soma de todos os valores terceiros
        $diferencaTotal = $somaValores - $somaValoresTerceiro;

        // Retornar a view com os dados e a diferença total
        return view('pix.index', compact('dados', 'diferencaTotal'));
    }

    public function show($id)
    {
        $dado = Pix::where('id', $id)->get();
        if (!empty($dado)) {
            return view('pix.show')->with('dado', $dado);
        } else {
            return redirect()->route('pix');
        }
    }

    public function create()
    {
        return view('pix.create');
    }

    public function store(Request $request)
    {
        // Se a validação passar, prosseguir com o armazenamento dos dados
        $dados = $request->all();
        Pix::create($dados);
    
        // Redirecionar de volta à página de clientes após o cadastro
        return redirect()->route('pix');
    }

    public function edit($id)
    {
        $dado = Pix::where('id',$id)->get()->first();
        if(!empty($dado)){
            return view('pix.edit')->with('dado',$dado);
        } else {
            return redirect()->route('pix');
        }
    }

    public function update(Request $request, $id)
    {
        $dado = Pix::find($id);
    
        $dado->nomeproduto = $request->nomeproduto;
        $dado->nomecliente = $request->nomecliente;
        $dado->valor = $request->valor;
        $dado->nomeprodutoterceiro = $request->nomeprodutoterceiro;
        $dado->nometerceiro = $request->nometerceiro;
        $dado->valorterceiro = $request->valorterceiro;
        $dado->valortotal = $request->valortotal;
        $dado->datacompra = $request->datacompra;

        $dado->save();
        return redirect()->route('pix');
    }

    public function destroy($id)
    {
        $dado = Pix::where('id', $id)->get();
        if (!empty($dado)) {
            DB::delete('DELETE FROM pix WHERE id = ?', [$id]);
        }
        return redirect()->route('pix');
    }   
}
