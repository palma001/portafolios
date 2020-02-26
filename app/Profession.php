<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profession extends Model
{
    public function equipmanets()
    {
    	return $this->belongsToMany(Equipment::class, 'equipments', 'equipment_id', 'id')
    	->using(EquipmentProfession::class);
    }
}
