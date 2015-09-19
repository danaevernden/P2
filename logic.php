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
)

$wordsLen = sizeof($words)
$symbols = Array ('!', '@', '#', '$', '%', '&')
# create the password array

$password = '';

# the form array will look like this:
# [0] numwords
# [1] include a number?
# [2] include a special symbol?


#generate the password here, initially one word
$password = $words(rand(0,$wordsLen))

#add on to the password according to the desired length
#may need to check the append .-. here
for ($i = 0; $i < $_Post[0], $i = $i + 1) {
  $password = $password.-.$words(rand(0,$wordsLen));
}

# if the number box is checked, append a random number to the
# end of the password
if ($_POST[1]) {
  $password = $password.rand(0,9);
}

# if the symbols box is checked, append a random symbol to the
# end of the password
if ($_POST[1]) {
  $password = $password.$symbols[rand(0,5)];
}


?>
