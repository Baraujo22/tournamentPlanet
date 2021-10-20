<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\model;
use Illuminate\Support\facades\DB;


class Modality extends Model
{
    use HasFactory;
    public function modality() 
    {
        $fillable = [
            'Modality_Id',
            'modName',
            'modtype',
            'numberOfGames',
            'continuous',
            'notes',
            'created_at',
        ];
    }

    public static function dropdown(){
        $data = DB::table('modalities')->select('Modality_Id', 'modName')->orderBy('modName')->get(); //Modality::all('Modality_Id', 'modName');

        return $data;
    }

    public static function fetch($modName){

        $query = DB::table('modalities')->select('*')->where('modName', $modName)->get()->toArray();

        return $query;
    }
}
