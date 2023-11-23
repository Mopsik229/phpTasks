<?php
   $password = 'password123';
   $length = strlen($password);
   if ($length > 5 && $length < 10) {
       echo "Пароль подходит";
   } else {
       echo "Нужно придумать другой пароль";
   }
   
