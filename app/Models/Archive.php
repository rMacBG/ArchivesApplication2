<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Archive extends Model
{
    use CrudTrait;
    use HasFactory;



    protected $table = 'archives';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    protected $guarded = ['id'];
    // protected $fillable = [];
    // protected $hidden = [];
    // protected $dates = [];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */




    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */
//        public static function boot()
//        {
//            parent::boot();
//            static::deleting(function($obj){
//                Storage::delete(Str::replaceFisrt('storage/','public/', $obj->Document));
//            });
//        }
//   public function setImageAttribute($value)
//   {
//            $attribute_name = "image";
//            $destination_path = "archives";
//            if ($value == null){
//                Storage::delete(Str::replaceFirst('storage/','public/',$this->{$attribute_name}));
//
//                $this->attributes[$attribute_name] = null;
//            }
//            $disk = "public";
//       $this->uploadFileToDisk($value, $attribute_name, $disk, $destination_path, $fileName = null);
//       $this->attributes[$attribute_name] = 'storage/' . $this->attributes[$attribute_name];
//   }


}
