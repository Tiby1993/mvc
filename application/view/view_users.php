<html>
 <head>
   <title>User List</title>
     <link rel="stylesheet" href="application/include/style.css">
 </head>
 <body>
   <h1>User list</h1>
     <table>
   <?php 
   for($i=0;$i< count($data); $i++){
       echo "<tr><td>". $data[$i]['name']."</td></tr>";
   }
     ?>
    </table>
 </body>
</html>
