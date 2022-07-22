<?require $_SERVER["DOCUMENT_ROOT"].'/core/backend.php';?>

<?
if (isset($_POST['content_add_form'])){
$arr = $_POST;
$sort = db::arr_s("SELECT SORT FROM CONTENT WHERE IBLOCK_ID='12'");

if ($sort=='empty'){$arr['sort_status']=1;}else{$arr['sort_status']=$sort['SORT']+1;}	
$arr['active_status']=1;
$arr['block_id']=12;
$add_request = insert::CONTENT($arr);
}
?>










<? //echo "<pre>"; print_r($sort); echo "</pre>";  ?>
<? //echo "<pre>"; print_r($arr['sort_status']); echo "</pre>";  ?>

  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"> Xabar</h4>
      </div>
      <div class="modal-body">
	  
	  <? //echo "<pre>"; print_r(strpos($_SERVER['REQUEST_URI'], '/ajax/')); echo "</pre>";  ?>
	  
	  	<?if ($add_request['stat']=='success'):?>
        <h4><i class="fa fa-check-square-o"></i>       <?=$_POST['fullname']?> , Murojatingiz uchun rahmat ! </h4>
		<?else:?>
		<h4><i class="fe  icon_error-circle_alt"></i>       Error !.</h4>
		<?endif?>
		
		
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Yopish</button>
      </div>
    </div>

  </div>


