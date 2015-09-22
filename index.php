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
      <img src="xkcd polo.png" class="polo" title="polo!"/>

      <div class="password">
        <h1>
          <!--may need to comment this out-->
          <?php echo $password ?>
        </h1>
      </div>

      <form method='GET' action='index.php' name='numWords'>
        <!--  Enter number of words (min 3, max 9)*
          <input type="" name="numWords"><br> -->
          Number of words
          <select name="numWords">
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
          </select>
          <br>
          <input type="checkbox" name="inclNumber">
          Include a number
          <img src="hatguy.jpg" class="hatguy">
          How many
          <select name="numNumber">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
          </select>
          <br>
          <input type="checkbox" name="inclSymbol">
          Include a special symbol (@!&$#%)
          <img src="hatguy.jpg" class="hatguy">
          How many
          <select name="numSymbol">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
          </select>
          <br>
          <input type="checkbox" name="uppercase">
           All uppercase?
           <br>
           <input type="checkbox" name="firstUppercase">
            OR first letter of each word uppercase?
          <br>
          <input type="submit" value="Generate">
          <br><br>
      </form>
      <a href="#explanation">Explanation</a>

      <?php //print_r($_GET);?> <!--testing-->
        <br>
      <a href="http://xkcd.com/936/" target="_blank">
        <img src="xkcd comic.png" title="comic" class="comic" style="max-width:500px;"/>
      </a>
      <br><br>
      <a href="http://xkcd.com/936/"> xkcd Password Strength comic </a>
      <br>

      <a name="explanation"></a>
      <div class "explanation">
        Password Generator Explained:
      </div>
    </div>
  </body>
</html>
