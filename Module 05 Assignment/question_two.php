<?php

class Book {

    // Private properties
    private $title;
    private $availableCopies;

    public function __construct($title, $availableCopies) {
        $this->title = $title;
        $this->availableCopies = $availableCopies;
    }

    // Get book title
    public function getTitle() {
        return $this->title;
    }

    // Get number of available copies
    public function getAvailableCopies() {
        return $this->availableCopies;
    }

    // Decrease available copies by 1 when a book is borrowed
    public function borrowBook() {
        if ($this->availableCopies > 0) {
            $this->availableCopies--;
        } else {
            echo "No copies available for '{$this->title}' to borrow.\n";
        }
    }

    // Increase available copies by 1 when a book is returned
    public function returnBook() {
        $this->availableCopies++;
    }
}

class Member {

    // Private property
    private $name;

    public function __construct($name) {
        $this->name = $name;
    }

    // Get member name
    public function getName() {
        return $this->name;
    }

    // Borrow a book
    public function borrowBook(Book $book) {
        $book->borrowBook();
    }

    // Return a book
    public function returnBook(Book $book) {
        $book->returnBook();
    }
}


// === Usage ===

// Create 2 books
$book1 = new Book("The Great Gatsby", 5);
$book2 = new Book("To Kill a Mockingbird", 3);

// Create 2 members
$member1 = new Member("John Doe");
$member2 = new Member("Jane Smith");

// Member 1 borrows Book 1
$member1->borrowBook($book1);

// Member 2 borrows Book 2
$member2->borrowBook($book2);

// Print available copies
echo "Available Copies of '{$book1->getTitle()}': " . $book1->getAvailableCopies() . "\n";
echo "Available Copies of '{$book2->getTitle()}': " . $book2->getAvailableCopies() . "\n";

?>
