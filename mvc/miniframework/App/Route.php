<?php

namespace App;

use MF\Init\Bootstrap;

class Route extends Bootstrap {

	protected function initRoutes() {

		$routes['home'] = array(
			'route' => '/',
			'controller' => 'indexController',
			'action' => 'index'
		);

		$routes['admininicio'] = array(
			'route' => '/admininicio',
			'controller' => 'indexController',
			'action' => 'admininicio'
		);

		$routes['controlelogin'] = array(
			'route' => '/controlelogin',
			'controller' => 'indexController',
			'action' => 'controlelogin'
		);

		$routes['controlecadastro'] = array(
			'route' => '/controlecadastro',
			'controller' => 'indexController',
			'action' => 'controlecadastro'
		);

		$routes['loginerror'] = array(
			'route' => '/loginerror',
			'controller' => 'indexController',
			'action' => 'loginerror'
		);

		$routes['logoff'] = array(
			'route' => '/logoff',
			'controller' => 'indexController',
			'action' => 'logoff'
		);

		$routes['cadastro'] = array(
			'route' => '/cadastro',
			'controller' => 'indexController',
			'action' => 'cadastro'
		);

		$routes['listausuarios'] = array(
			'route' => '/listausuarios',
			'controller' => 'indexController',
			'action' => 'listausuarios'
		);

		$routes['edituser'] = array(
			'route' => '/edituser',
			'controller' => 'indexController',
			'action' => 'edituser'
		);

		$routes['edituser_db'] = array(
			'route' => '/edituser_db',
			'controller' => 'indexController',
			'action' => 'edituser_db'
		);

		$routes['editform'] = array(
			'route' => '/editform',
			'controller' => 'indexController',
			'action' => 'editform'
		);

		$routes['deleteuser'] = array(
			'route' => '/deleteuser',
			'controller' => 'indexController',
			'action' => 'deleteuser'
		);

		$routes['deleteuser_db'] = array(
			'route' => '/deleteuser_db',
			'controller' => 'indexController',
			'action' => 'deleteuser_db'
		);





		$this->setRoutes($routes);
	}

}

?>