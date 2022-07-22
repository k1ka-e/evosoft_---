<?if ($_GET['page']=='projects' AND $_GET['item_id']==NULL){require $_GET['lang'].'/projects_list.php';}?>



<?if ($_GET['page']=='projects' AND $_GET['item_id']!==NULL){require $_GET['lang'].'/projects_detail.php';}?>