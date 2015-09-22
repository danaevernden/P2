<?php
# create the words array
$words = Array (
'refugee', 'heart', 'favor', 'dispatch', 'production', 'faith',
'serpent', 'digital', 'concussion', 'doberman', 'pilgrim', 'waffles',
'rainbow', 'monkey', 'correct', 'horse', 'battery', 'staple',
'arbitrary', 'bellyache', 'hard', 'murica', 'hot', 'common',
'basket', 'bigwig', 'execute', 'barnyard', 'chapter', 'sweat',
'bench', 'slap', 'blurry', 'chewable', 'vitamin', 'life',
'blade', 'wig', 'howling', 'hoop', 'expert', 'classic','reckless',
'think', 'pipes', 'black', 'breaking', 'barnacle'
);

## testing web scraping
//$homepage = file_get_contents('http://www.paulnoll.com/Books/Clear-English/words-01-02-hundred.html');
#print_r($homepage);
//preg_match_all("~<li>(.*?)</li>"~s, $homepage, $out, PREG_PATTERN_ORDER);
//print_r($out[1]);
#|<[^>]+>(.*)</[^>]+>|
##end testing web scraping

$wordslen = sizeof($words);
// print(sizeof($words)); #testing
//print_r($_GET['numWords']); #testing

$symbols = Array ('!', '@', '#', '$', '%', '&');
# create the password array

$password = '';
$random_word=array_rand($words,3);
$password = $words[$random_word[0]];

#generate the password here, initially one word
for ($i =1; $i<3; $i++){
$password = $password.'-'.$words[$random_word[$i]];
}

#add on to the password according to the desired length
#a second way - using the rand() function
if(isset($_GET['numWords'])){
  for ($i = 1; $i < $_GET['numWords']-2; $i++) {
    $random = rand(0,$wordslen-1);
    $password = $password.'-'.$words[$random];
  }
  if(isset($_GET['uppercase'])){
    if($_GET['uppercase']){
      $password = strtoupper($password);
    }
  }
}


# if the number box is checked, append a random number to the
# end of the password
//print $_GET['inclNumber']; #testing

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

if (isset($_GET['numWords'])) {
  if ($_GET['numWords']>9 or $_GET['numWords']<3){
    $password = "sorry, please enter a number between 3 and 9";

  }
}
// print $symbols[rand(0,5)] #testing
# To do
# 2. add extra challenges
# - Spaces or camelCase or hyphens.
# - Error checking: For example, what happens if a user
#   enters a string instead of an integer for # of words?
# - Scrape an online word list to build a really long
#   word list. (No clue where to start? Here's an outline
#   for approach).
?>
