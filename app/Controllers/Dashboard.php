<?php namespace App\Controllers;

use App\Models\Resultados;
use App\Models\Pesquisas;

class Dashboard extends BaseController
{		
	
	public function index()
	{		
		return redirect()->to(base_url('dashboard/cadastro_perguntas'));
	}

	public function cadastro_perguntas()
	{
		helper('form');
		helper('date');
		helper('funcoes');
				
		echo view('dashboard/_header');
        echo view('dashboard/_sidebar');
        echo view('dashboard/_form_perguntas');
        echo view('dashboard/_footer');
	}

	public function process_cadastro_pesquisa()
	{


	}


	//--------------------------------------------------------------------

}
