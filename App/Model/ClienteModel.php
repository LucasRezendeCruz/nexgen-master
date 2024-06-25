<?php

use App\Library\ModelMain;

Class ClienteModel extends ModelMain
{
    public $table = "cliente";

    public $validationRules = [
        'nome' => [
            'label' => 'Nome',
            'rules' => 'required|min:5|max:255'
        ],
        'email' => [
            'label' => 'E-mail',
            'rules' => 'required|min:5|max:100'
        ],
        'telefone' => [
            'label' => 'Telefone',
            'rules' => 'required|min:5|max:100'
        ],
        'endereco' => [
            'label' => 'Telefone',
            'rules' => 'required|min:5|max:100'
        ],
        'statusRegistro' => [
            'label' => 'Status',
            'rules' => 'required|int'
        ]
    ];

    /**
     * countCLiente
     *
     * @return array
     */
    public function countCLiente()
    {
    // Executa a consulta para contar o número de registros na tabela
    $rsc = $this->db->dbSelect("SELECT COUNT(id) AS total FROM {$this->table}");
    
    // Recupera o resultado da consulta
    $result = $this->db->dbBuscaArrayAll($rsc);
    
    // Verifica se o resultado foi obtido corretamente
    if (isset($result[0]['total'])) {
        return (int)$result[0]['total'];
    } else {
        // Se algo deu errado, retorna 0 ou uma exceção
        return 0;
    }
    }
}