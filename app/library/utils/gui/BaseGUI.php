<?php

namespace utils\gui;

abstract class BaseGUI {
	protected $controller;

	public function __construct(\IndexController $controller) {
		$this->controller=$controller;
	}

	public abstract function getMainMenu();

	public abstract function getBreadcrumbs($domaines);

	public abstract function getMenuTabs($domaines);

	public abstract function getAnchorsDropDown($anchors);

	public abstract function getAlert($id, $style, $message);

	public abstract function getPanel($id, $content, $header, $footer);

	public abstract function replaceAlerts($html);

	public abstract function initPHP();

	public abstract function backButton();

	public abstract function showMainDomaine($id, $domaines);

	public abstract function insertCurrentFrameworkTag($subject,$currentFramework);

	public abstract function searchPanel($id,$title);

	public abstract function addSearchPanelCount($panel,$count=NULL);

}