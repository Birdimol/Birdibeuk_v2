<?php 
	/**
     * @file autoloader.class.php 
     * @brief Ce fichier définit la fonction my_autoloader() utilisée comme spl_autoload_register.
     * @author  Birdimol
     * @version 2.0 
     * @date 30 octobre 2015
     */
    
    /**
     * @brief Charge les classes au fur et a mesure qu'elle sont appelées. 
     *
     * Essaie de charger la classe voulue dans le repertoire 'model'. Essaie le fichier nom_classe.class.php, 
     * nom_class.php, puis la même chose avec seulement la première lettre de la classe en Majuscule.
     *
     * @author  Birdimol
     * @version 2.0 
     * @date 30 octobre 2015
     * @param $class le nom de la classe à charger.
     */
	function my_autoloader($class)
	{
        $class2 = strtoupper(substr($class,0,1)).strtolower(substr($class,1));
        
		if(is_file(__DIR__."/".$class . '.class.php'))
        {
            include __DIR__."/".$class . '.class.php';		
        }
        else if(is_file(__DIR__."/".$class2. '.class.php'))
        {
            include __DIR__."/".$class2 . '.class.php';		
        }
        else if(is_file(__DIR__."/".$class . '.php'))
        {
            include __DIR__."/".$class . '.php';		
        }
        else if(is_file(__DIR__."/".$class2. '.php'))
        {
            include __DIR__."/".$class2 . '.php';		
        }        
	}

	spl_autoload_register('my_autoloader');

?>