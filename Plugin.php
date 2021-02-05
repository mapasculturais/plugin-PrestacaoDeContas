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

        $app->hook('GET(prestacao-de-contas.<<*>>):before', function() use($app) {
            $app->view->enqueueScript('app', 'ng.mc.module.notifications', 'js/ng.mc.module.notifications.js');
            $app->view->enqueueScript('app', 'ng.mc.directive.editBox', 'js/ng.mc.directive.editBox.js');
            $app->view->enqueueScript('app', 'ng.prestacao-de-contas', 'js/ng.prestacao-de-contas.js', ['mapasculturais']);
        });
    }

    function register()
    {
        $app = App::i();

        $app->registerController('prestacao-de-contas', 'PrestacaoDeContas\\Controller');
    }
}
