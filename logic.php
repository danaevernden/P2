<?php
# words and symbols arrays
$words = file('corncob_lowercase.txt', FILE_IGNORE_NEW_LINES);
$symbols = Array ('!', '@', '#', '$', '%', '&');

$wordslen = sizeof($words);

# create the initial password, 3 words long
for ($i=0; $i<3; $i++){
  $random_word= rand(0,$wordslen);
  if ($i == 0){
    $password = $words[$random_word];
  }
else{
  $password = $password.'-'.$words[$random_word];
  }
}

#add on to the password according to the desired length
if(isset($_GET['numWords'])){
  for ($i = 1; $i < $_GET['numWords']-2; $i++) {
    $random = rand(0,$wordslen-1);
    $password = $password.'-'.$words[$random];
  }
  # if uppercase is specified, change letters to uppercase
  if(isset($_GET['uppercase'])){
      $password = strtoupper($password);
    }
}


# if the number box is checked, append a random number to the
# end of the password

if (isset($_GET['inclNumber'])) {
  if ($_GET['inclNumber']) {
    for ($i=1; $i < $_GET['numNumber']+1; $i++){
    $password = $password.rand(0,9);
    }
  }
}
# if the symbols box is checked, append a random symbol to the
# end of the password
if (isset($_GET['inclSymbol'])) {
  if ($_GET['inclSymbol']) {
    for($i=1; $i <$_GET['numSymbol']+1;$i++){
    $password = $password.$symbols[rand(0,5)];
    }
  }
}

# validation. This was added when the number of words field was
# not a dropdown. Even though it'll probably never be used, I'll
# leave it in here for now to showcase my committment to
# a website with validation!
if (isset($_GET['numWords'])) {
  if ($_GET['numWords']>9 or $_GET['numWords']<3){
    $password = "sorry, please enter a number between 3 and 9";
  }
}

?>
