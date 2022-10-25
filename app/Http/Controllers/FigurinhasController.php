<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
        $data = $request->all();
        unset($data['_token']);
        $arquivo = $_FILES['foto']['name'];
        
        $pasta_dir = "../../../public/images/";
        
        $arquivo_nome = $pasta_dir . $arquivo;
        
        move_uploaded_file($_FILES["foto"]['tmp_name'], $arquivo_nome);
        $certo ['id'] = '';
        $certo ['nome'] = $data['nome'];
        $certo ['foto'] = $arquivo_nome;
        $certo ['naturalidade'] = $data['nt'];

        DB::table('figurinhas')->insert($certo);
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