<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use App\ItemModel;

class ListController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function create(Request $request){

      
        DB::table('item_models')->insert(
            [              
                'item' => $request->item,
                
                'created_at' =>\Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
            ]);

            return 'Done';

       
    }

     
    public function delete(Request $request){    

        ItemModel::where('id', $request->id) ->delete();              
        return $request->all();     
    }

    public function update(Request $request){    

        $item = ItemModel::find($request->id);    
        $item->item =$request->item;
        
        $item->save();
        return $request->all();     
    }


}

