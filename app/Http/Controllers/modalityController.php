<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\facades\DB;
use App\Models\Modality;
use App\Models\Target;
use Exception;

class modalityController extends Controller
{
    public function index() 
    {
        // Error handling
        try{
            $data = Modality::dropdown();
        } catch (\Exception $exception) {
            return view('errors.connection-failed');
        }
        
        // Returning view with the 'modalities' table data as the $data variable
        //echo json_encode($data);
        return view('designer', ['data'=>$data]);
        

        
    }
    
    function fetch(Request $request)
    {
        $modName = $request->get('modName');

        $fetch = Modality::fetch($modName);
        return json_encode(!empty($fetch[0]) ? $fetch[0] : abort(400, "OMG U.U - Model did not respond"));

    }

    function target(){
        
        return view('layouts.target');
    }
    function targetSave(Request $request){
        
        $request->validate([
            
            'targetDescription' => 'required',
            'targetLevel'=>'required',
            'targetType'=>'nullable',
            'targetDistance'=>'required',
            'targetMaxShots'=>'required',
    
            ]);
        $target = new Target;
        $target->targetDescription = $request->input('targetDescription');
//        $target->modName = $request->input('modName');
        $target->targetLevel = $request->input('targetLevel');
        $target->targetType = $request->input('targetType');
        $target->targetDistance = $request->input('targetDistance');
        $target->targetMaxShots = $request->input('targetMaxShots');

        $target->save();
        return redirect('designer');
    }

    public function save(Request $req)
    {
        // return "this works";
        $req->validate([

        'modName'=>'required|unique:modalities,modName',
        'modtype'=>'required',
        'numberOfGames'=>'required',
        'continuous'=>'required',
        'notes'=>'nullable',

        ]);
        
        $modality = new Modality;
        $modality->modName = $req->input('modName');
        $modality->modtype = $req->input('modtype');
        $modality->numberOfGames = $req->input('numberOfGames');
        $modality->continuous = $req->input('continuous');
        $modality->notes = $req->input('notes');
        $modality->created_at = date("Y-m-d H:m:s");
        
        // $modality->tableintxt = $req->('tableintxt');
        
        $modality->save();
        return redirect('designer');//->route('modality');;
    }
}
// placeholder="i.e: 'Soccer, Basketball, Slingshot...' 