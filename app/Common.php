<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Spatie\Dropbox\Client;

class Common extends Model
{
	public function __construct()
    {
        // Necesitamos obtener una instancia de la clase Client la cual tiene algunos métodos
        // que serán necesarios.
        $this->dropbox = Storage::disk('dropbox')->getDriver()->getAdapter()->getClient();   
    }

	static function upload($image)
	{
		Storage::disk('dropbox')->putFileAs(
            '/',
            $image, 
            $image->getRealPath()
        );
        $response = $this->dropbox->createSharedLinkWithSettings(
            $image->getRealPath(),
            ["requested_visibility" => "public"]
        );
        return $response;
	}
}
