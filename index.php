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

      <!--function for selections, to keep selections after submission-->
      <?php function keepselection($number, $selectionName){
            if(isset($_GET[$selectionName]) and $_GET[$selectionName]==$number)
            {echo "selected='selected'";}
          }
            function keepselectionB($selectionName2){
              if(isset($_GET[$selectionName2]))
              {echo "checked='checked'";}
          }
      ?>

      <form method='GET' action='index.php' name='numWords'>
        <!--  Enter number of words (min 3, max 9)*
        -->  Number of words
          <select name="numWords">
            <option value="3"
            <?php keepselection(3, 'numWords') ?>
            >3</option>
            <option value="4"
              <?php keepselection(4, 'numWords') ?>
            >4</option>
            <option value="5"
              <?php keepselection(5, 'numWords') ?>
            >5</option>
            <option value="6"
              <?php keepselection(6 ,'numWords') ?>
            >6</option>
            <option value="7"
              <?php keepselection(7, 'numWords') ?>
            >7</option>
            <option value="8"
              <?php keepselection(8, 'numWords') ?>
            >8</option>
            <option value="9"
            <?php keepselection(9, 'numWords') ?>
            >9</option>
          </select>
          <br>
          <input type="checkbox" name="inclNumber"
          <?php keepselectionB('inclNumber') ?>
          >
          Include a number
          <img src="hatguy.jpg" class="hatguy">
          How many
          <select name="numNumber">
            <option value="1"
            <?php keepselection(1, 'numNumber') ?>
            >1</option>
            <option value="2"
              <?php keepselection(2, 'numNumber') ?>
            >2</option>
            <option value="3"
              <?php keepselection(3, 'numNumber') ?>
            >3</option>
            <option value="4"
              <?php keepselection(4, 'numNumber') ?>
            >4</option>
            <option value="5"
              <?php keepselection(4, 'numNumber') ?>
            >5</option>
          </select>
          <br>
          <input type="checkbox" name="inclSymbol"
          <?php keepselectionB('inclSymbol') ?>
          >
          Include a special symbol (@!&$#%)
          <img src="hatguy.jpg" class="hatguy">
          How many
          <select name="numSymbol">
            <option value="1"
            <?php keepselection(1, 'numSymbol') ?>
            >1</option>
            <option value="2"
              <?php keepselection(2, 'numSymbol') ?>
            >2</option>
            <option value="3"
              <?php keepselection(3, 'numSymbol') ?>
            >3</option>
            <option value="4"
              <?php keepselection(4, 'numSymbol') ?>
            >4</option>
            <option value="5"
              <?php keepselection(5, 'numSymbol') ?>
            >5</option>
          </select>
          <br>
          <input type="checkbox" name="uppercase">
           All uppercase?
          <br>
          <input type="submit" value="Generate">
          <br><br>
      </form>

      <a href="#explanation">Explanation</a>
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
