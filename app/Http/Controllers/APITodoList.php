<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class APITodoList extends Controller
{
    public function showData(){ 
        $result = DB::table(table:"todolist")->orderBy(column: 'id', direction: 'desc')->get();
        return response()->json($result);
    }

    public function addData() {
        $content = request(key: "content");
        DB::table(table:"todolist")
            -> insert([
                'created_at' => date(format:'Y-m-d H:i:s'),
                'content' => $content
            ]);
        return response()->json(['status' => true, 'message'=>'data berhasil ditambahkan !']);       
    }

    public function updateData($id){
        $content = request(key: "content");
        DB::table(table:"todolist")
            -> where(column:'id',$id)
            -> update([
                'updated_at' => date(format:'Y-m-d H:i:s'),
                'content' => $content
            ]);
        return response()->json(['status' => true, 'message'=>'data berhasil diperbarui !']);       
    }
    
    public function deleteData($id){
        DB::table(table:"todolist")
            -> where(column:'id',$id);
            -> delete();
        return response()->json(['status'=>true, 'message'=> 'data berhasil dihapus !']);
    }
}
