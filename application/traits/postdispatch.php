<?php

//$rotuloCliente = '';
//if (Zend_Auth::getInstance()->hasIdentity())
//{
//	$contents = Zend_Auth::getInstance()->getStorage()->read();
//	$rotuloCliente = "Cliente: {$contents->nome}";
//	$acao = 'logout';
//	$nomeDoLink = 'Sair';
//}
//else
//{
//	$acao = 'pre-login';
//	$nomeDoLink = 'Acessar';
//}
$urlIndex = $this->getUrl('index', 'acesso', 'Siscon');
$urlCadastrarForm = $this->getUrl('cadastrar-form', 'usuario', 'Siscon');
$urlRecuperarSenha = $this->getUrl('recuperar-senha', 'acesso', 'Siscon');
$login = $this->getUrl('login', 'acesso', 'Siscon');

$this->view->assign('urlIndex', $urlIndex);
$this->view->assign('urlCadastrarForm', $urlCadastrarForm);
$this->view->assign('urlRecuperarSenha', $urlRecuperarSenha);
$this->view->assign('login', $login);
