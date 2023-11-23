<?php
   $string = 'Я уже устал писать эти задачи';
   if (strlen($string) > 5) {
       $string = substr($string, 0, 5) . '...';
   }
   echo $string;
   
