<!DOCTYPE html>
<html lang="en">
  <head>
    <title>xkcd Password Generator</title>
    <link href="style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link rel="shortcut icon" href="favicon.ico">
    <?php require('logic.php'); ?>
  </head>
  <body>
    <div class="container">
      <h1>xkcd Password Generator</h1>
      <div class="password">
        <h1>
          <!--may need to comment this out-->
          <?php echo $password ?>
        </h1>
      </div>

      <form method='POST' action='index.php'>
        <div class="col-md-6">
          <img src="xkcd polo.png" class="polo" title="polo!"/>
        </div>
          <input type="" name="numWords"><br>
          <input type="checkbox" name="inclNumber">
          Include a number
          <br>
          <input type="checkbox" name="inclSymbol">
          Include a special symbol (@!&$#%)
          <br><br>
          <input type="submit" value="Generate">
      </form>
        <br>
      <a href="http://xkcd.com/936/" target="_blank">
        <img src="xkcd comic.png" title="comic" class="comic" style="max-width:500px;"/>
      </a>
      <br><br>
      <a href="http://xkcd.com/936/"> xkcd Password Strength comic </a>
      <br>
      <a href="#explanation">Explanation</a>

      <a name="explanation"></a>
      <div class "explanation">
        Password Generator Explained:
      </div>
    </div>
  </body>
</html>
