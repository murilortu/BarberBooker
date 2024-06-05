<?php 

Class configController extends Controller {
    public function index() { //padrão  www.nome.com/
        
        $this->protegerPagina(); // Verifica se o usuário está autenticado
        //chamar um model
        //chamar a view
        //fazer junção back e front end
        $this->carregarTemplate('configuração');
    }
}