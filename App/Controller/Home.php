<?php

use App\Library\ControllerMain;

class Home extends ControllerMain
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        $categoria = $this->loadModel("Categoria");
        $this->dados['aCategoria'] = $categoria->lista();
    
        $this->loadView("home", $this->dados);
    }

    /**
     * produto
     *
     * @return void
     */
    public function produtocard()
    {
        $ProdutoModel = $this->loadModel("produto");

        $aProduto = $ProdutoModel->lista();
        return $this->loadView("produtocard", $aProduto);
    }

    /**
     * contato
     *
     * @return void
     */
    public function cliente()
    {
        $this->loadView("cliente");
    }

    /**
     * contato
     *
     * @return void
     */
    public function contato()
    {
        $this->loadView("contato");
    }

     /**
     * contato
     *
     * @return void
     */
    public function sobrenos()
    {
        $this->loadView("sobrenos");
    }

    /**
     * login
     *
     * @return void
     */
    public function login()
    {
        return $this->loadView('usuario/login');
    }

    /**
     * homeAdmin
     *
     * @return void
     */
    public function homeAdmin()
    {
    // Carrega o modelo de leads
    $LeadsModel = $this->loadModel("leads");

    // Conta os leads
    $aLeads = $LeadsModel->countLeads();

    // Carrega o modelo de leads
    $ClienteModel = $this->loadModel("cliente");

    // Conta os leads
    $aCliente = $ClienteModel->countCliente();

    // Passa os dados para a visualização
    return $this->loadViewHome("restrita/homeAdmin", ['aCliente' => $aCliente,'aLeads' => $aLeads]);
    }



    /**
     * criarConta
     *
     * @return void
     */
    public function criarConta()
    {
        $this->loadHelper('Formulario');
        
        return $this->loadView("usuario/formCriarConta", []);
    }
}