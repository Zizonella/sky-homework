<?php
namespace Agency;

class Type
{
    private $id;
    private $type;
    
    public function __construct( $id, $type) 
    {
        $this->id = $id;
        $this->type = $type;
    }
    
    public function getId(){
        return $this->id;
    }public function getName(){
        return $this->type;
    }
}


$ee= new Type(3, 'hrr');
echo $ee-> getId();