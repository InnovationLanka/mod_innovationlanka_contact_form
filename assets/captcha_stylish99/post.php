	<?php
define( '_JEXEC', 1 );
define( 'JPATH_BASE', realpath(dirname(__FILE__).'/../../../../' ));
require_once ( JPATH_BASE. '/includes/defines.php' );
require_once ( JPATH_BASE. '/includes/framework.php' );
$mainframe = JFactory::getApplication('site');
$mainframe->initialise();


$session = JFactory::getSession();
$random_number=$session->get('random_number','');
	
	//include('dbcon.php');

	//echo $_SESSION['random_number']."<br>";

	
	if(@strtolower($_REQUEST['code']) == strtolower($random_number))
	{
		
		// insert your name , email and text message to your table in db
		
		echo 1;// submitted 
		
	}
	else
	{
		echo 0; // invalid code
	}
	?>
