<?php
namespace PrestacaoDeContas;

class Controller extends \MapasCulturais\Controller {
    function __construct()
    {
        $this->layout = 'prestacao-de-contas';
    }

    // http://localhost/prestacao-de-contas/
    function GET_index() {
        $this->render('index');
    }

    function GET_relatorios() {
        $this->render('relatorios');
    }
}