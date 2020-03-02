<?php

namespace App;
use Illuminate\Database\Eloquent\Relations\Pivot;

class EquipmentWork extends Pivot
{
    public function work()
    {
    	return $this->belogsTo(Work::class);
    }
    public function equipment()
    {
    	return $this->belogsTo(Equipment::class);
    }
}
