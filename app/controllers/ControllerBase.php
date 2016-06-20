<?php

use Phalcon\Mvc\Controller;

class ControllerBase extends Controller{
	protected $translateEngine;
	protected $phpFramework;
	protected $currentFramework;
	protected $frameworkIds;

	public function initialize(){
		$this->translateEngine=$this->session->get("translateEngine");
		$this->translateEngine->setRequest($this->request);
		$this->phpFramework=$this->session->get("phpFramework",1);
		$this->currentFramework=Framework::findFirst($this->phpFramework);
		$phql = "SELECT f.id FROM Framework AS f WHERE f.id<>".$this->phpFramework;
		$ids = $this->modelsManager->executeQuery($phql);
		$this->frameworkIds=[];
		foreach ($ids as $id){
			$this->frameworkIds[]=$id["id"];
		}
	}

	public function getTranslateEngine() {
		return $this->translateEngine;
	}

	public function getPhpFramework() {
		return $this->phpFramework;
	}

	public function setPhpFramework($phpFramework) {
		$this->phpFramework=$phpFramework;
		$this->session->set("phpFramework",$phpFramework);
		return $this;
	}


}
