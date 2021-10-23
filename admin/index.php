<?php
include('header.php');
include('siderbar.php');

$page = $_REQUEST['page'];
switch ($page) {
	case 'dashboard':
		include('body.php');
		break;
	case 'doneradd':	
		include('../donors/add.php');
		break;
	case 'donerlist':
		include('../donors/list.php');
		break;
	case 'edit':
	include('../donors/edit.php');
	break;
	case 'delete':
	include('../donors/delete.php');
	break;	
	default:
		// include('body.php');
		break;
}
include('footer.php');

?>
        

            

               