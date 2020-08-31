<html>
   <head>
      <title>Тестируем PHP</title>
   </head>
   <body>
      <h1>
         <?php echo '<p>Тестируем связку GitHub + DockerHub!</p>'; ?>
      </h1>
      <p> <?php  
         echo 'IP-адрес сервера, на котором выполняется текущий скрипт ';
         $pr1 = $_SERVER['SERVER_ADDR']; 
         echo $pr1; 
          ?>
      </p>
      <p>
         <?php
            echo 'Имя и версия информационного протокола, через который была запрошена страница '; 
            $pr = $_SERVER['SERVER_PROTOCOL'];
            echo $pr;
             ?>
      </p>
            <p> 
      <?php  
         echo 'Удаленный хост, с которого пользователь просматривает текущую страницу ';
         $pr1 = $_SERVER['REMOTE_ADDR']; 
         echo $pr1; 
          ?>
      </p>
   </body>
</html>