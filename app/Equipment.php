<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    protected $table = 'equipment';

    public function professions()
    {
    	return $this->belongsToMany(Profession::class, 'equipment_professions', 'profession_id', 'id')
    	->using(EquipmentProfession::class);
    }
    public function works()
    {
    	return $this->belongsToMany(Work::class, 'equipment_works', 'work_id', 'id')
    	->using(EquipmentWork::class);
    }
}
