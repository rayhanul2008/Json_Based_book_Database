<?php

require_once 'Book.php';
require_once 'Customer.php';

$book1 = new Book(
    '978-3-16-148410-0',
    'The PHP Book',
    'John Doe',
    10
);
$book2 = new Book(
    '978-3-16-148410-1',
    'The PHP Book',
    'John Doe',
    10
);
$book3 = new Book(
    '978-3-16-148410-2',
    'The PHP Book',
    'John Doe',
    10
);

$customer1 = new Customer(
    1,
    'Abdullah',
    'Muhammad',
    'abdullah@gmail.com'
);
$customer2 = new Customer(
    2,
    'Ali',
    'Hassan',
    'ali@gmail.com'
);
$customer3 = new Customer(
    3,
    'Hussain',
    'Hassan',
    'hussain@gmail.com'
);

echo "<b> Book_1 </b> <br>";
echo "Book-1 Title: " .$book1 -> __get("title") ."<br>";
echo "Book-1 Author: " .$book1 -> __get("author") ."<br>";
echo "Book-1 ISBN: " .$book1 -> __get("isbn") ."<br>";

echo "</br> <b> CUSTOMER 1 </b> <br>";
echo "Customer-1 ID: " .$customer1 -> __get("id") ."<br>";
echo "Customer-1 First Name: " .$customer1 -> __get("firstname") ."<br>";
echo "Customer-1 Last Name: " .$customer1 -> __get("lastname") ."<br>";
echo "Customer-1 Email: " .$customer1 -> __get("email") ."<br>";
$customer1 -> __set("firstname", "Abdullah");
$customer1 -> __set("lastname", "Muhammad");
$customer1 -> __set("email", "islam@gmail.com");
echo "Customer-1 First Name: " .$customer1 -> __get("firstname") ."<br>";

?>


