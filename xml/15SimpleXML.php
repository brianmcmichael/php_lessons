<?php
/**
 * User: Brian
 * Date: 3/18/13
 * Time: 11:03 PM, 3/18/13, 2013
 */

$x = simplexml_load_file('xmldom.xml');

//echo $x->book[1]->author[0];

foreach ($x->book as $book) {
    echo "<b>Book title:</b> " . $book->title . "<br />" .
        "<b>Author: </b>" . $book->author . "<br />" .
        "<b>Year: </b>" . $book->year . "<br />" .
        "<b>Price: </b>" . $book->price . "<br /><br />";
}




