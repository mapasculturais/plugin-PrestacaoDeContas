<?php
namespace PrestacaoDeContas;

class Controller extends \MapasCulturais\Controller {
    // http://localhost/prestacao-de-contas/
    function GET_index() {
        $this->render('index');
    }

    function GET_relatorios() {
        $this->render('relatorios');
    }
}