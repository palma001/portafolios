<?php
namespace App\Helpers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Spatie\Dropbox\Client;

class Helpers
{    
    public static function upload($file, $folders)
    {
        $nameImge = Str::random(40).'.'.$file->getClientOriginalExtension();
        Storage::disk('dropbox')->putFileAs(
            $folders,
            $file,
            $nameImge
        );
        return  $nameImge;
    }

    public static function validImage($url)
    {
        if (Storage::disk('dropbox')->exists($url)) {
            return Storage::disk('dropbox')->url($url);
        }
        return Storage::disk('dropbox')->url('undraw_empty_xct9.png');
    }
}
