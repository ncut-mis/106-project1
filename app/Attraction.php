<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attraction extends Model
{
    public function guides()
    {
        return $this->belongsTo(Guide::class);
    }
    public function files()
    {
        //一對多
        return $this->hasMany(File::class);
    }
    public function photos()
    {
        //一對一
        return $this->hasOne(Photo::class);
    }
    public function videos()
    {
        //一對多
        return $this->hasMany(Video::class);
    }
    protected  $fillable=[
        'name',
        'location',
        'content',
        'price',
        'status',
        'guide_id',
        'reservation',
        'video_path',
        'is_feature',
    ];

    protected $table='attractions';

}
