<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ApiTodoListController extends Controller
{
    public function showData(){ 
        $result = DB::table('todolist')->orderByDesc('id')->get();
        return response()->json($result);
    }

    public function addData() {
        $content = request('content');
        DB::table('todolist')
            -> insert([
                'created_at' => Carbon::now(),
                'content' => $content
            ]);
        return response()->json(['status' => true, 'message'=>'data berhasil ditambahkan !']);       
    }

    public function updateData($id){
        $content = request('content');
        DB::table('todolist')
            -> where('id',$id)
            -> update([
                'updated_at' => Carbon::now(),
                'content' => $content
            ]);
        return response()->json(['status' => true, 'message'=>'data berhasil diperbarui !']);       
    }
    
    public function deleteData($id){
        DB::table('todolist')
            -> where('id',$id)
            -> delete();
        return response()->json(['status'=>true, 'message'=> 'data berhasil dihapus !']);
    }
}
