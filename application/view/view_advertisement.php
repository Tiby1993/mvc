<html>
 <head>
   <title>Advertisement List</title>
     <link rel="stylesheet" href="application/include/style.css">
 </head>
 <body>
   <h1>Advertisement list</h1>
     <table>
         <tr>
            <td>advertisement's name</td>
             <td>advertisement</td>
   <?php 
   for($i=0;$i< count($data); $i++){
       echo "<tr><td>". $data[$i]['name']."</td>";
       echo "<td>". $data[$i]['title']."</td></tr>";

   }
   ?>
    </table>
 </body>
</html>
