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
$urlIndex = $this->getUrl('index', 'acesso', 'externo');
$urlCadastrarForm = $this->getUrl('cadastrar-form', 'usuario', 'externo');
$urlRecuperarSenha = $this->getUrl('recuperar-senha', 'acesso', 'externo');
$login = $this->getUrl('login', 'acesso', 'externo');

$this->view->assign('urlIndex', $urlIndex);
$this->view->assign('urlCadastrarForm', $urlCadastrarForm);
$this->view->assign('urlRecuperarSenha', $urlRecuperarSenha);
$this->view->assign('login', $login);
