<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Spatie\Dropbox\Client;

class CommonController extends Controller
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
            $image->getClientOriginalName()
        );
        dd($this->dropbox);
        // $response = $this->dropbox->createSharedLinkWithSettings(
        //     $image->getRealPath(),
        //     ["requested_visibility" => "public"]
        // );
        return $response;
	}
}
