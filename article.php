<?php
$id = $_GET['id'];

?>

<?php

$connection = mysql_connect('127.0.0.1', 'root', 'test54321');
mysql_select_db('DANNIE_blog');
// mysql_connect(‘SQLdata.com’, ‘Jones’, ‘un1c0rn’, ‘my_database’);


// Check connection
if (!$connection) {
  die('Unable to connect: ' . mysql_errno());
}

if ($connection) {
  //die('YAY: ' . mysql_errno());
  // SQL Query
  $result = mysql_query('SELECT id, title, author, body FROM articles where id = ' . $id );

  // Fetch the data from the result
  while ($article = mysql_fetch_array($result)) {
  	print '<!DOCTYPE html>
          <html>
          <head>
              <meta charset="utf-8">
              <meta name="viewport" content="initial-scale=1.0">
              <title>index</title>
              <link href="http://fonts.googleapis.com/css?family=Arvo:400|Montserrat:400,400" rel="stylesheet" type="text/css">
              <link rel="stylesheet" href="css/standardize.css">
              <link rel="stylesheet" href="css/index-grid.css">
              <link rel="stylesheet" href="css/index.css">

                    <style type="text/css">
                        body {
                                background-color: rgb(114, 255, 116);
                								font: 400 1.875em/1.38 Montserrat;
                								color: rgb(0, 0, 0);
                            }

                            .title {
                                color: #4566EC;
                                font:  Montserrat;
                                font-size: 30px;
                                position: absolute;
                                top: 40px;
                                left: 10px;


                            }

                             .author {
                                color: #4566EC;
                                font:  Montserrat;
                                font-size: 20px;
                                position: absolute;
                                top: 75px;
                                left: 15px;

                            }


                            .story {
                                font:  Montserrat;
                                color: #ffffff;
                                font-size: 40px;
                                position: absolute;
                                top: 120px;
                                left: 10px;
                            }

                            .home {
                                color: #4566EC;
                                font:  Montserrat;
                                font-size: 20px;
                                position: absolute;
                                top: 10px;
                                left: 10px;


                    </style>

          </head> ';


       print '<body>';


    echo 
         "<h1 class='title'>" . "<a href='article.php?id=" . $article['id'] . "'>" .  $article['title'] . "</a>" . "</h1>" . "<br>" .
         "<h2 class='author'>" . $article['author'] . "</h2>" .
         " <p class='story'>"  . $article['body']  . " </p>" . "<br>";

         print  "<h1 class='home'>" . "<a href='index.html'> HOME <a/>" . "</h1>" ;

         print '</body>';
         
         print '</html>';
  }
}

mysql_close($connection);
?>
