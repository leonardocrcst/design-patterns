<?php
include_once 'config.php';
use Creational\Prototype\RegistroPrototipo\GerenciadorPrototipos;
use Creational\Prototype\RegistroPrototipo\Relatorio;


$gerenciador = new GerenciadorPrototipos();


$gerenciador->registrarPrototipo('vendas', new Relatorio('Relatório de Vendas: '));
$gerenciador->registrarPrototipo('despesas', new Relatorio('Relatório de Despesas: '));

$relatorioVendas = $gerenciador->criarRelatorio('vendas');
$relatorioDespesas = $gerenciador->criarRelatorio('despesas');

$relatorioVendas->conteudo .= ' 10.000 unidades vendidas'.PHP_EOL;
$relatorioDespesas->conteudo .= ' 5.000 unidades de despesa'.PHP_EOL;

echo $relatorioVendas->obterConteudo();
echo $relatorioDespesas->obterConteudo();
