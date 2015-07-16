<?php
$app->group('/comunidade', function () use ($app) {

//lista todas as comunidades
	$app->get('/lista', function () use ($app) {
		$data['lista']=$app->banco->comunidade->order('id desc');
		$app->render("comunidade.php",$data);
	});

//adiciona comunidade
	$app->post('/lista', function () use ($app) {
		$nome =	$app->request->post('nome');
		$app->banco->comunidade->insert(['nome'=>$nome]);
		$app->flash('success', 'Registro inserido com suscesso.');
		$data['lista']=$app->banco->comunidade->order('id desc');
		$app->view->setData($data);
		$app->redirect(baseUrl().'/comunidade/lista');
	});

//editar - carregar os dados no formulario para edição
	$app->get('/edita/:id', function ($id) use ($app) {
		$data['lista']=$app->banco->comunidade->order('id desc');
		$com = $app->banco->comunidade()->where('id',$id)->fetch();
		if($com)
		{
			$data['campo'] = array('nome'=>$com['nome']);
		}
		else
		{
			$app->flash('info', 'Registro não existe.');
			$app->redirect(baseUrl().'/comunidade/lista');
		}
		$app->render("comunidade.php",$data);
	});

	$app->post('/edita/:id', function ($id) use ($app) {
		$nome =	$app->request->post('nome');
		$com = $app->banco->comunidade()->where('id',$id)->fetch();
		if($com)
		{
			$app->flash('success', 'Registro atualizado com suscesso.');
			$com->update(['nome'=>$nome]);
		}
		else
		{
			$app->flash('error', 'Registro não atualizado.');
		}
		$data['lista']=$app->banco->comunidade->order('id desc');
		$app->view->setData($data);
		$app->redirect(baseUrl().'/comunidade/lista');
	});
//deleta o resgistro por id
	$app->get('/delete/:id', function ($id) use ($app) {
		$com = $app->banco->comunidade()->where('id',$id)->fetch();
		if($com){
			$app->flash('success', 'Registro apagado com suscesso.');
			$com->delete();
		}
		$data['lista']=$app->banco->comunidade->order('id desc');
		$app->view->setData($data);
		$app->redirect(baseUrl().'/comunidade/lista');
	});

});