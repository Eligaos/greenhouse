<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\CulturaRequest;
use App\Services\CulturaService;
use Illuminate\Support\Facades\Input;
use Redirect;

class CulturaController extends Controller
{
	protected $cService;
	public function __construct(CulturaService $cService, Request $request)
	{
		$this->idExp = $request->session()->get('exploracaoSelecionada');
		$this->middleware('auth');
		$this->cService = $cService;
	}
	public function adicionar(){
		$lista = $this->cService->getEstufa();
		return view("culturas.adicionarCultura", compact('lista'));		
	}
	public function getSetor($idEstufa){
		$lista = $this->cService->getSetor($idEstufa);	
		return $lista;	
	}
	public function listarCulturas(){ 
		$lista = [];
		$estufas = $this->cService->getEstufa($this->idExp);
		if(count($estufas)!=0){
			$lista = $this->cService->listarCulturas($estufas);
                 //\Debugbar::info(Auth::check());
		}
		return view('culturas.listagemCulturas', compact('lista', 'estufas'));
	}
	public function adicionarCultura(CulturaRequest $request){   
		$input = Input::except('_token');
		$exists = $this->cService->adicionarCultura($input);
		/*if($exists){
			return Redirect::to("admin/culturas/listar")->with('message', 'Cultura guardada com sucesso!');
		}else{
			return Redirect::to("/admin/culturas/adicionar")->with('message', 'Já existe uma Cultura com esse nome');
		}*/
	}
	public function detalhesCultura($id){
		$lista = $this->cService->procurarCultura($id);
		//$lista[0]-- array de estufa  $lista[1]--array dos setores da estufa
		return view('culturas.detalhesCultura', compact('lista'));  		
	}
	public function editarCultura($id){
		$lista = $this->cService->procurarCultura($id);
		//$lista[0]-- array de estufa  $lista[1]--array dos setores da estufa
		return view('culturas.editarCultura', compact('lista'));  		
	}
	public function saveEditCultura($idE){ 
		$input = Input::except('_token');        
		$estufa = $this->cService->saveEditCultura($this->idExp, $input, $idE);
	/*	if($estufa){
			return Redirect::to("/admin/culturas/detalhes/{$estufa->id}")->with('message', 'Cultura guardada com sucesso!');
		}else{
			return Redirect::to("/admin/culturas/editar/{$estufa->id}")->with('message', 'Já existe um Terreno com esse nome');
		}*/
	}
}
