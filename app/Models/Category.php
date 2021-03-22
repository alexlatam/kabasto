<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'category','description','padre_id','photo','slug','status'
    ];

    //Relacion uno a uno, en misma tabla
    public function categoy_father($padre_id){
        $category_father=Category::where('padre_id',$padre_id)->get();
        return $category_father;
    }

    //Relacion uno a muchos
    public function products()
    {
        return $this->hasMany('App\Models\Product');
    }


}
