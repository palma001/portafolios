<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    public function equipments()
    {
    	return $this->belongsToMany(Equipment::class, 'equipment_works', 'work_id', 'id')
    	->using(EquipmentWork::class);
    }
}
