<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class EquipmentProfession extends Pivot
{
    protected $table = 'equipment_prosfessions';

    public function profession()
    {
    	return $this->belogsTo(Profession::class);
    }
    public function equipment()
    {
    	return $this->belogsTo(Profession::class);
    }
}
