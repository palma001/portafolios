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
}
