<?php
namespace App\Helpers;

use Illuminate\Support\Facades\Storage;
use Spatie\Dropbox\Client;

class FunctionsHelpers
{
    public function __construct()
    {
        // Necesitamos obtener una instancia de la clase Client la cual tiene algunos métodos
        // que serán necesarios.
        $this->dropbox = Storage::disk('dropbox')->getDriver()->getAdapter()->getClient();
    }
    
    public static function upload($file)
    {
        Storage::disk('dropbox')->putFileAs(
            '/',
            $file, 
            $file->getClientOriginalName()
        );
        $response = $this->dropbox->createSharedLinkWithSettings(
            $image->getClientOriginalName(),
            ["requested_visibility" => "public"]
        );
        dd($response);
        return $response;
    }
}
