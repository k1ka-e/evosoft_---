<?require $_SERVER["DOCUMENT_ROOT"].'/core/backend.php';?>

<?
/*
if (isset($_POST['zayavka_add_form'])){
$arr = $_POST;
$sort = db::arr_s("SELECT SORT FROM CONTENT WHERE IBLOCK_ID='11'");

if ($sort=='empty'){$arr['sort_status']=1;}else{$arr['sort_status']=$sort['SORT']+1;}	
$arr['active_status']=1;
$arr['block_id']=11;
$q = insert::CONTENT($arr);
}

*/
?>

<?
$ism=  str_replace("'","\'",$_POST['ism']);
$email=str_replace("'","\'",$_POST['pochta']);
$mavzu=str_replace("'","\'",$_POST['mavzu']);
$tekst=str_replace("'","\'",$_POST['matn']);
if (db::arr_s("SELECT * FROM zayavki WHERE ISM='$ism' AND EMAIL='$email' AND MAVZU='$mavzu' AND TEKST='$tekst'")=='empty'){
$q['ins'] = db::query("INSERT INTO zayavki (ISM,EMAIL,MAVZU,TEKST) VALUES ('$ism','$email','$mavzu','$tekst')");}
?>




<div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Tabriklaymiz</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
	  
	  
<? //echo "<pre>"; print_r($q); echo "</pre>";  ?>
	  
    <h4><i class="fa fa-check-square-o"></i>       <?=$ism?> , Sizning murojatingiz qabul qilindi ! </h4>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">ok</button>
      </div>

    </div>
  </div>






<? //echo "<pre>"; print_r($sort); echo "</pre>";  ?>
<? //echo "<pre>"; print_r($arr['sort_status']); echo "</pre>";  ?>

<?/*

  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"> Xabar</h4>
      </div>
      <div class="modal-body">
	  
	  <? //echo "<pre>"; print_r(strpos($_SERVER['REQUEST_URI'], '/ajax/')); echo "</pre>";  ?>
	  
	  	<?if ($q['stat']=='success'):?>
        <h4><i class="fa fa-check-square-o"></i>       <?=$_POST['name']?> , Sizning so`rovingiz qabul qilindi. Tez orada siz bilan bizning menejerlarimiz bog`lanishadi ! </h4>
		<?else:?>
		<h4><i class="fe  icon_error-circle_alt"></i>       Error !.</h4>
		<?endif?>
		
		
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Yopish</button>
      </div>
    </div>

  </div>

*/?>
