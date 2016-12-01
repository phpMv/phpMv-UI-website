<?php
use Phalcon\Mvc\View;
class SbreadController extends ControllerBase {
	public function afterExecuteRoute($dispatcher){
		$bc=$this->jquery->semantic()->htmlBreadcrumb("bc10");
		$bc->fromDispatcher($this->jquery,$dispatcher,0);
		$bc->addIconAt("home",0);
		$bc->jsSetContent($this->jquery);
		$bc->autoGetOnClick("#ajax-content");
		$this->jquery->compile($this->view);
	}
	public function indexAction(){
		$this->view->setRenderLevel(View::LEVEL_ACTION_VIEW);
		$bt=$this->jquery->semantic()->htmlButton("btClients","Afficher clients","red");
		$bt->getOnClick("SBread/clients","#ajax-content",array("attr"=>""));
	}

	public function clientsAction($index=null){
		$this->view->setRenderLevel(View::LEVEL_ACTION_VIEW);
		if(!isset($index) || !is_numeric($index)){
			$clients=Client::find();
			$this->view->setVars(array("model"=>"Clients","objects"=>$clients));
			$this->jquery->getOnClick(".edit", "SBread/clients/","#ajax-content");
		}else{
			$client=Client::findFirst($index);
			$this->view->setVars(array("model"=>"Clients","client"=>$client));
			$this->view->pick("SBread/client");
		}
	}
}
