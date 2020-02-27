<?php

namespace App;

use Illuminate\Support\Facades\Storage;
use Spatie\Dropbox\Client;
class Common extends Model
{
	// public function __construct()
 //    {
 //        // Necesitamos obtener una instancia de la clase Client la cual tiene algunos métodos
 //        // que serán necesarios.
 //        $this->dropbox = Storage::disk('dropbox')->getDriver()->getAdapter()->getClient();   
 //    }

	// public function upload($image)
	// {
	// 	Storage::disk('dropbox')->putFileAs(
 //            '/',
 //            $request->file('avatar'), 
 //            $request->file('avatar')->getRealPath()
 //        );
 //        $response = $this->dropbox->createSharedLinkWithSettings(
 //            $request->file('avatar')->getRealPath(),
 //            ["requested_visibility" => "public"]
 //        );
	// }
}
