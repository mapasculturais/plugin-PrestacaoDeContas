<?php 
$this->page_title = 'Relatórios';

$this->bodyProperties['ng-app'] = 'prestacao-de-contas.app';
$this->bodyProperties['ng-controller'] = 'PrestacaoDeContasController';
?>

<div>
    <input ng-model="data.teste">
    {{data.teste}}
</div>