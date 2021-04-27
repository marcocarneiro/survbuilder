<?php namespace App\Models;

use CodeIgniter\Model;

class Pesquisas extends Model
{
    protected $table = 'godf_pesquisas';
    protected $allowedFields = ['titulo','nome_curto','testes_inicio','testes_final','pesquisa_inicio','pesquisa_final', 'perguntas'];

    
}