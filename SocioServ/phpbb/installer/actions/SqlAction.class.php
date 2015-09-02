<?php

	class SqlAction extends AbstractAction 
	{
		/**
		 * @return CopyAction
		 */
		public static function me()
		{
			return Singleton::getInstance(__CLASS__);
		}
		
		/**
		 * @return CopyAction
		 */
		public function setParentAction(InstallAction $action)
		{
			return parent::setParentAction($action);
		}
		
		public function run()
		{
			global $db, $auth, $user, $template;
			global $phpbb_root_path, $phpEx, $config;
			$db->return_on_error = 1;
			$db->sql_query(self::get_cdata($this->getXmlElement()));
			
		}
	}

?>