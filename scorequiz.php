
<?php
// First, go through all the questions:
/*$points = 0;
foreach($_POST as $quizanswer) {
    $points = $points + $quizanswer;
}

// Now points is the total of all field values.  Let's see where we want to go.
if ($points > 100) {
    header('location: showanswer.php?a=4');
} else if ($points > 60) {
    header('location: showanswer.php?a=3');
} else if ($points > 30) {
    header('location: showanswer.php?a=2');
} else {
    header('location: showanswer.php?a=1');
}*/

header("location:jurullumii.html");

?>