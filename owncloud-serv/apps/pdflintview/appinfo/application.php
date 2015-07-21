<?php
namespace OCA\PDFLintViewer\AppInfo;
use \OCP\AppFramework\App;
use \OCA\MyApp\Controller\PageController;
class Application extends App {
public function __construct(array $urlParams=array()){
parent::__construct(’pdflintview’, $urlParams);
$container = $this->getContainer();
/**
* Controllers
*/
$container->registerService('PageController', function($c) {
return new PageController($c->query(’AppName’),
$c->query(’Request’));
});
}
}