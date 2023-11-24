<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function cropImage(StoreImageRequest $request)
    {
        try {
            $image = Game::storeImage($request);
            return response()->json([
                'imagePath' => asset('uploads').'/'.$image->basename,
                'imageName' => $image->basename
            ]);
        } catch (\Throwable $th) {
            dd($th->getMessage());
        }
    }
}
