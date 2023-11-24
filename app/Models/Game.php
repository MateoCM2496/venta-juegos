<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'image',
        'gender',
        'price',
        'stock',
    ];

    public function storeImage($request)
    {
        ini_set('memory_limit', -1);
        $file = $request->file('file');
        $nameFile = Str::uuid().".". $file->extension();
        $image = Image::make($file);
        $image->fit(1000, 1000);
        $imagenPath = public_path('uploads').'/'.$nameFile;
        $image->save($imagenPath);
        return $image;
    }

}
