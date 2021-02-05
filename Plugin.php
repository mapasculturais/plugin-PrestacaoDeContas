<?php

namespace PrestacaoDeContas;

use MapasCulturais\App;

class Plugin extends \MapasCulturais\Plugin
{
    function __construct(array $config = [])
    {
        parent::__construct($config);
    }

    function _init()
    {
        $app = App::i();

        $app->hook('template(site.index.home-search):after', function() {
            echo "<h1>TESTE</h1>"; 
        });
    }

    function register()
    {
        $app = App::i();

        $app->registerController('prestacao-de-contas', 'PrestacaoDeContas\\Controller');
    }
}
