<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>hph table</title>
  </head>
  <body>
    <p>hello</p>
    <?php
    $a=10;
    $b=20;

    // echo $a-- . "</br>";
    // echo --$a;
    $arr="9"+"7";

    echo "<p>sum is".$arr."</p>";


     ?>
     <table border="1" >
       <?php
       for($i=1;$i<=9;$i++){
         echo "<tr>";
         for($j=1;$j<=$i;$j++){
           echo "<th>",$i,"*",$j," = ",$i*$j,"</th>";
         }
         echo "</tr>";

       }

        ?>
     </table>
    <p id="p1">
      <script>
      var arr=[1,2,3];
      document.getElementById("p1").innerText=arr[1];
      </script>
    </p>
<!-- <p>2*3</p> -->
  </body>
</html>
