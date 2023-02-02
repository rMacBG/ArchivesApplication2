<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class Event extends Model
{
    use CrudTrait;
    use HasFactory;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'events';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    protected $guarded = ['id'];
    // protected $fillable = [];
    // protected $hidden = [];
    // protected $dates = [];


    public function archives()
    {
        return $this->belongsToMany(Archive::class, 'event_archives', 'event_id', 'archive_id');
    }



    /*
    |--------------------------------------------------------------------------
    | ACCESSORS
    |--------------------------------------------------------------------------
    */

    public static function boot()
    {
        parent::boot();
        static::deleting(function($obj){
            Storage::delete(Str::replaceFirst('storage/','public/', $obj->image));
        });
    }
    public function setImageAttribute($value)
    {
        $attribute_name = "image";
        $destination_path = "archives";
        if ($value == null){
            Storage::delete(Str::replaceFirst('storage/','public/',$this->{$attribute_name}));

            $this->attributes[$attribute_name] = null;
        }
        $disk = "public";
        $this->uploadFileToDisk($value, $attribute_name, $disk, $destination_path, $fileName = null);
        $this->attributes[$attribute_name] = 'storage/' . $this->attributes[$attribute_name];
    }
}
