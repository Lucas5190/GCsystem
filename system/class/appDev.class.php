<?php
	/*\
	 | ------------------------------------------------------
	 | @file : appDev.class.php
	 | @author : fab@c++
	 | @description : class � utiliser lors du d�veloppement de l'application
	 | @version : 2.0 b�ta
	 | ------------------------------------------------------
	\*/
	
	class appDev{
		
		public  function __construct(){
			$tpl = new templateGC('GCsystemDev', 'GCsystemDev', 0);
			
			$tpl->assign(array(
				'text'=>"interface de d�veloppement en cours de cr�ation",
				'IMG_PATH'=>IMG_PATH
			));
				
			$tpl->show();
		}
		
		public  function __desctuct(){
		
		}
	}
?>