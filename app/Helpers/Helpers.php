<?php
namespace App\Helpers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Spatie\Dropbox\Client;

class FunctionsHelpers
{    
    public static function upload($file)
    {
        $nameImge = Str::random(40) + $file->getClientOriginalExtension();
        Storage::disk('dropbox')->putFileAs(
            '/equipments',
            $file,
            $nameImge
        );
        return  $nameImge;
    }
}
