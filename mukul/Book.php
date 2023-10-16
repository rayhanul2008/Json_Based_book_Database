<?php

class Book{
    public $isbn;
    public $title;
    public $author;
    public $available;
}

$book = new Book();
$book -> title = "1984";
$book -> author = "George Orwell";
$book -> available = true;
var_dump($book);

$book1 = new Book();
$book1 -> title = "1984";
$book2 = new Book();
$book2 -> title = "To Kill a Mockingbird";
var_dump($book1, $book2);