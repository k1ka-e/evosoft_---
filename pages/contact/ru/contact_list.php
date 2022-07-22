<?

// echo '<pre>';
// print_r($_POST);
// echo '</pre>';



if (isset($_POST['contact_button'])) {

  $add_request['ins'] = db::query("INSERT INTO `requests` (
    `DATE_SEND`,
    `NAME`,
    `EMAIL`, 
    `TEXT`,
    `LANG`,
    `STATUS`)
    VALUES 
    ( now(), 
    '$_POST[fullname]', 
    '$_POST[email]', 
    '$_POST[message]', 
     '$_GET[lang]', 
     '1')");
}
?>


 
 <script>
  $(document).ready(function() {

    $("form").submit(function(event) {

      //event.preventDefault();
      alert("Ваша заявка отправлена");



      // $.ajax({
      //   type: $(this).attr('method'),
      //   url: $(this).attr('action'),
      //   data: new FormData(this),
      //   // contentType: false,
      //   // cache: false,
      //   // processData: false,

      //   success: function(result) {
      //     alert(result);
      //   },
      // });

    });
  });
 </script>