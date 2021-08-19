<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Product extends Model
{
    use HasFactory;

    protected $guarded = array('id');
    public $timestamps = false;
    protected $table = 'products';

    protected static function booted()
    {
        static::deleted(function ($product) {
            if ($product->gazou)
            {
                Storage::delete($product->get_gazou_file_location());
            }
        });
    }

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
