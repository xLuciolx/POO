<?php
$params = $this->getParams();

 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Document</title>
 </head>
 <body>
   <table>
     <thead>
       <tr>
         <th>ID</th>
         <th>Nom</th>
         <th>Prenom</th>
         <th>Mail</th>
       </tr>
     </thead>
     <tbody>

        <?php foreach ($params['auteurs'] as $value): ?>
          <tr>
            <td>
              <?= $value->IDAUTEUR?>
            </td>
            <td>
              <?= $value->PRENOMAUTEUR?>
            </td>
            <td>
              <?= $value->NOMAUTEUR?>
            </td>
            <td>
              <?= $value->EMAILAUTEUR?>
            </td>
          </tr>
        <?php endforeach; ?>

     </tbody>
   </table>
 </body>
 </html>
