<?php
/**
* 
*/
class galeriaController extends controller{

	public function index(){
		$dados = array(
			'qnt' =>129
		);

		$this->loadTemplate('galeria', $dados);
	}
	
}