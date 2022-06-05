<?php

/* ---- Conditionals & Operators ---- */

/* ------------ Operators ----------- */

/*
  < Less than
  > Greater than
  <= Less than or equal to
  >= Greater than or equal to
  == Equal to
  === Identical to
  != Not equal to
  !== Not identical to
*/

//$age = 20;
//
//if ($age >= 18) {
//    echo 'you are old enough to vote';
//} else {
//    echo 'you are not old enough to vote';
//
//}
//
//$t = date("H");
//
//if ($t < 12) {
//    echo 'Good Morning';
//} else if ($t < 17) {
//    echo 'Good afternoon';
//} else {
//    echo 'Good evening';
//}

$post = ['First post'];
//
//if (!empty($post)) {
//    echo $post[0];
//} else {
//    echo 'no post';
//}
//
//if (true) {
//    echo 123;
//}

//echo !empty($post) ? $post[0] : 'No post';
//$firstPost = !empty($post) ? $post[0] : 'No post';
//$firstPost = !empty($post) ? $post[0] : null;
//$firstPost = $post[0] ?? null;
//echo $firstPost;

$favecolor = 'red';

switch ($favecolor) {
    case 'red':
        echo 'Your favorite color is red';
        break;
    case 'blue':
        echo 'your favorite color is blue';
        break;
    default:
        echo 'colors not found';
}
/* ---------- If & If-Else Statements --------- */

/*
** If Statement Syntax
if (condition) {
  // code to be executed if condition is true
}
*/

/* -------- Ternary Operator -------- */
/*
  The ternary operator is a shorthand if statement.
  Ternary Syntax:
    condition ? true : false;
*/


/* -------- Switch Statements ------- */
