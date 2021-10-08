<html>
  <head>
      <link rel="stylesheet" href="style.css">
      <title>NEWS</title>
  </head>
  <body>
    <b>
      <?php
        if (isset($_GET['read'])) {
          readMyFile();
        }
        function readMyFile(){
        $myfile = fopen("contact.txt", "r") or die("Unable to open file!");
        while(!feof($myfile)) {
          echo fgets($myfile) . "<br>";
        }
        fclose($myfile);
        }
      ?>
    </b>
  </body>
</html>
