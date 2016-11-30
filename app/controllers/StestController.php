<?php
use Phalcon\Mvc\View;
class StestController extends ControllerBase{
	public function afterExecuteRoute($dispatcher){
		$this->jquery->compile($this->view);
	}
	public function indexAction(){
		$this->view->setRenderLevel(View::LEVEL_ACTION_VIEW);
		$bt=$this->jquery->semantic()->htmlButton("btClients","Afficher clients","green");
		$bt->OnClick("$.tab('change tab', 'menutabs2item1');",false,false);
	}

	public function clientsAction($index=null){
		$this->view->setRenderLevel(View::LEVEL_ACTION_VIEW);
		if(!isset($index) || !is_numeric($index)){
			$clients=Client::find();
			$this->view->setVars(array("model"=>"Clients","objects"=>$clients));
			$this->jquery->getOnClick(".edit", "Stest/clients/","#ajax-content");
		}else{
			$client=Client::findFirst($index);
			$this->view->setVars(array("model"=>"Clients","client"=>$client));
			$this->view->pick("Stest/client");
		}
	}
}