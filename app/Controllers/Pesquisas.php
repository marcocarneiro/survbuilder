<?php namespace App\Controllers;

use App\Models\Resultados;
use App\Models\Pesquisas;

class Pesquisas extends BaseController
{	
	$pesquisas = new Pesquisas();

	public function questoes()
	{			
		helper('form');
		helper('date');
			
    }
	
    public function gravaQuestoes()
	{		
		helper('form');
		helper('funcoes');
		$resultados = new Resultados();

	}
    

	//--------------------------------------------------------------------

}
