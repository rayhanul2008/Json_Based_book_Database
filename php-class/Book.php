<?php

class Book{
    public $isbn;
    public $title;
    public $author;
    public $available;

    public function __construct(
        string $isbn,
        string $title,
        string $author,
        int $available = 0
    ){
        $this->isbn = $isbn;
        $this->title = $title;
        $this->author = $author;
        $this->available = $available;
    }
    public function __get($name){
        if($name == 'title'){
            return $this->title;
        }
        elseif($name == 'author'){
            return $this->author;
        }
        elseif($name == 'isbn'){
            return $this->isbn;
        }
        elseif($name == 'available'){
            return $this->available;
        }
        return null;
    }
    public function __set($name, $value){
        if($name == 'title'){
            $this->title = $value;
        }
        elseif($name == 'author'){
            $this->author = $value;
        }
        elseif($name == 'isbn'){
            $this->isbn = $value;
        }
        elseif($name == 'available'){
            $this->available = $value;
        }
    }
    public function __call($name, $arguments){
        if($name == 'getCopy'){
            if($this->available < 1){
                return 0;
            }
            else{
                $this->available--;
                return 1;
            }
        }
        else if($name == 'addCopy'){
            $this->available++;
            return $this->available;
        }
    }
    
}


?>