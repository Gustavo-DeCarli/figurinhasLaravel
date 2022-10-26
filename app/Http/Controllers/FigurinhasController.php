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
        
        // $filename = 'J4xgksKNAkazIa153QCDYpD6tgwQBJrmsQXe9Gta.png';
        // //echo Storage::url($filename);

        // echo asset("storage/{$filename}");
        // echo "<br/>";
        // echo "<img src='" .  asset("storage/{$filename}")."'/>";
        // die();
        return view('figurinhas.create');
    }
    function storef(Request $request){
        $data = $request->all();
        unset($data['_token']);
        

        
        
        //move_uploaded_file($_FILES["foto"]['tmp_name'], $arquivo_nome);
        $certo ['id'] = '';
        $certo ['nome'] = $data['nome'];
        $certo ['foto'] = "";
        $certo ['naturalidade'] = $data['nt'];

        //$id = DB::table('figurinhas')->insertGetId($certo);



        $path = $request->file('foto')->store('imagens');
        $parts = explode("/", $path);
        $filename = $parts[count($parts)-1];
      
         echo Storage::url($filename);
         echo "<br/>";
        echo asset("storage/{$filename}");
        echo "<br/>";
        echo "<img src='" .  asset("storage/{$filename}")."'/>";
die();
        //DB::table('figurinhas')->where('id', $id)->update(['foto' => $filename]);


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