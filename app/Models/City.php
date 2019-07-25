<?php
/**
 * @ Author: @CristianMarinT
 * @ Create Time: 2019-07-24 15:14:49
 * @ Modified by: @CristianMarinT
 * @ Modified time: 2019-07-24 15:43:32
 * @ Description:
 */


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = 'city';
    
    protected $fillable = [
        'name',
        'state_id'
    ];

    public function state(){
        return $this->belongsTo('State');
    }

    public function person(){
        return $this->hasOne('Person');
    }
}
