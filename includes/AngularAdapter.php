<?php
namespace ArcherSys\AngularJS;
class AngularExpressionAdapter{
	static function  addExpression($expressionContents){
		echo "{{ ${expressionContents} }}";
	}
}

?>