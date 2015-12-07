<?php

class Book {
    private $author;
    private $title;
    function __construct($title_in, $author_in) {
        $this->author = $author_in;
        $this->title  = $title_in;
    }
 
    function getTitle() {
        return $this->title;
    }
}


class BookTitleExclaimDecorator{
    private $btd;
    public function __construct(Book $btd_in) {
        $this->btd = $btd_in;
		
        $this->resetTitle();
    }
	
	function resetTitle() {
        $this->title = $this->book->getTitle();
    }
	
    function exclaimTitle() {
        $this->btd->title = "!" . $this->btd->title . "!";
    }
}



  $patternBook = new Book('Harry Potter', 'J. K. Rolling');
 
  $exclaimDecorator = new BookTitleExclaimDecorator($patternBook);
 
  print_r('showing title after two exclaims added : ');
  $exclaimDecorator->exclaimTitle();
