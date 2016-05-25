<?php
header ("Content-Type: text/html; charset=utf-8");?>
<?php
     include 'autorize.php';
     $id = $_POST["id"];
     $notes = $person["notes"];
     $rez = array();
     $k = 0; 
           for ($i = 0; $i < count($notes);$i++)
           {
              if ($i == $id)
              {
                  continue;
              } 
              $notes[$i]["id"] = $k;
              $rez[$k++] = $notes[$i];
           }

      $option = array("upsert" => true);
      $newDoc = array('$set'=>array("notes"=>$rez));
      $list->update($person,$newDoc,$option);
   ?>
<script>
       document.location = 'main.php'; 
</script>