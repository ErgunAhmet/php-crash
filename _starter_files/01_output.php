<?php
/* -------- Output & Comments ------- */
//    echo 123, 'Hello', 10.5;
//
//    print 123;
//
//    print_r([1,2,3]);

//    var_dump('Hello');
    var_export('Hello')
/*
  A .php file running on a server, can output both HTML and PHP code. There are multiple functions that can be used to output data to the browser.
*/
?>

<h1><?php echo 'Post'; ?></h1>
<h1><?= 'Post'; ?></h1>
