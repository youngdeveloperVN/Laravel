<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $table = 'categories';

    public $timestamps = false;
    
    public function getName()
    {
        return $this-> name ;
    }
    public function getId()
    {
        return $this-> id ;
    }

}