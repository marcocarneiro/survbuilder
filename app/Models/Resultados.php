<?php namespace App\Models;

use CodeIgniter\Model;

class Resultados extends Model
{
    protected $table = 'godf_result_pesquisa';
    protected $allowedFields = ['id','identificacao','id_pesquisa', 'ip_usuario', 'navegador', 'idade', 'aceite', 'data_hora_inicio', 'data_hora_final', 'dados', 'completo'];

    
}