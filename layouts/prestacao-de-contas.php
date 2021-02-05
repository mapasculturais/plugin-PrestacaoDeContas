<?php
$this->part('header', $render_data);
$this->part('prestacao-de-contas/header', ['page_title' => $this->page_title]);

echo $TEMPLATE_CONTENT;

$this->part('footer', $render_data);