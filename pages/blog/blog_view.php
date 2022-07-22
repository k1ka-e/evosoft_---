<?php if ($_GET['page']=='blog' AND $_GET['item_id']==NULL){require $_GET['lang'].'/blog_list.php';}?>

<?php if ($_GET['page']=='blog' AND $_GET['item_id']!==NULL){require $_GET['lang'].'/blog_detail.php';}?>