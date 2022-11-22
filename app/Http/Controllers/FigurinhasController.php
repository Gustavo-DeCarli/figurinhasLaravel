<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class FigurinhasController extends Controller{
    
    function index(){
        $figurinhas = DB::table('figurinhas')->get();
        return view('figurinhas.index', [
            'figurinhas' => $figurinhas,
        ]);
    }

    function createf(){
        return view('figurinhas.create');
    }
    function storef(Request $request){
        $filenameWithExt = $request->file('foto')->getClientOriginalName();
        //Get just filename
        $filename = pathinfo($filenameWithExt);
        
        // Filename to store
        $fileNameToStore = $filename["filename"] . '_' . time() . '.' . $filename["extension"];

        // Upload Image
        $path = $request->file('foto')->storeAs('', $fileNameToStore);

        $data = $request->all();
        unset($data['_token']);
        
        $certo ['id'] = null;
        $certo ['nome'] = $data['nome'];
        $certo ['foto'] = $path;
        $certo ['naturalidade'] = $data['nt'];
        $certo ['dtnasc'] = "1985-07-14";

        $id = DB::table('figurinhas')->insertGetId($certo);
        return redirect('/figurinhas');
    }

    function editf($id){
        $figurinhas = DB::table('figurinhas')->find($id);
        return view('figurinhas.edit', ['figurinhas' => $figurinhas]);
    }
    function updatef(Request $request)
    {
    $data = $request->all();
        unset($data['_token']);
        $id = array_shift($data);
        DB::table('figurinhas')
            ->where('id', $id)
            ->update($data);
        return redirect('/figurinhas');
    }
    function showf($id){
        $figurinhas = DB::table('figurinhas')->select()->find($id);
        return view('figurinhas.show', ['figurinhas' => $figurinhas]);
    }
    function destroyf($id)
    {
        DB::table('figurinhas')->where('id', $id)->delete();
        return redirect('/figurinhas');
    }


}

?>