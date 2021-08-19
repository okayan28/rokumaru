<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = array('id');
    public $timestamps = false;
    protected $table = 'products';

    public function get_gazou_path()
    {
        $parsed_uri = explode('/', $this->gazou);
        $file_name = end($parsed_uri);
        return '/storage/images/' . $file_name;
        
    }

    public function get_gazou_file_location()
    {
        $parsed_uri = explode('/', $this->gazou);
        $file_name = end($parsed_uri);
        return 'public/images/' . $file_name;
    }
}
