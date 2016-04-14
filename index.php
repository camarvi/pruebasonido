<?php

  $link="timbre.mp3";
  $audio="<embed src:'" . $link . "'>";
  
  echo $audio;

?>




<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php 
        
        $contador=1;
        if ($contador>0){
        ?>
        
        <audio autoplay>
            <source src="timbre.mp3" type="audio/mpeg">
        </audio>
        <?php
        }
        ?>
        
        
    </body>
</html>
