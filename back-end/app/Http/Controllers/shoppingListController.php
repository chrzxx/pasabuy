<?php

namespace App\Http\Controllers;

use App\Models\ShoppingList;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class shoppingListController extends Controller
{
    //
    public function getShoppingList()
	{
		# code...
		// $data = DB::select('SELECT * FROM tbl_shoppingList WHERE email = \''.Auth::user()->email.'\'');
		// return $data[0];
		$data = DB::table('tbl_shoppingList')->where('email','=',Auth::user()->email)->get();
        for($i=0;$i<$data->count();$i++){
            $data[$i]->shoppingListContent = json_decode($data[$i]->shoppingListContent);
        }
		return $data;
	}
    public function editList(Request $request, $listNum)
	{
		# code...
		// $data = DB::select('SELECT * FROM tbl_shoppingList WHERE email = \''.Auth::user()->email.'\'');
		// return $data[0];
        $validator=Validator::make($request->all(),[
            'list'=>'required',
            'listName'=> 'required'
            ]);

        if($validator->fails()) {
            return response()->json($validator->errors(),422);
        }
		if(DB::table('tbl_shoppingList')->where('email','=',Auth::user()->email)->where('shoppingListNumber',$listNum)->update(["shoppingListContent"=>json_encode($request->list),'shoppingListTitle'=>$request->listName,"dateModified"=>Carbon::now('Asia/Manila')])){
            $selectedList = ShoppingList::where('shoppingListNumber', $listNum)->first();
            $selectedList->shoppingListContent = json_decode($selectedList->shoppingListContent);
            return response()->json($selectedList,201);
        }else{
            return response()->json(["error"=>"error in updating list"],422);

        }
	}
    public function createList(Request $request)
	{
		# code...
		// $data = DB::select('SELECT * FROM tbl_shoppingList WHERE email = \''.Auth::user()->email.'\'');
		// return $data[0];
        $validator=Validator::make($request->all(),[
            'list'=>'required',
            'listName'=>'required'
            ]);

        if($validator->fails()) {
            return response()->json($validator->errors(),422);
        }
        $insertList = DB::table('tbl_shoppingList')->where('email','=',Auth::user()->email)->insert(["dateModified"=>Carbon::now('Asia/Manila'),"shoppingListContent"=>json_encode($request->list),"shoppingListTitle"=>$request->listName, 'shoppingListNumber'=> '076-'.str_pad(Auth::user()->indexUserAuthentication,4,'0',STR_PAD_LEFT).'-'.str_pad(ShoppingList::count()+1,5,'0',STR_PAD_LEFT), 'email'=>Auth::user()->email]);
		if($insertList){
            $selectedList = ShoppingList::where('shoppingListNumber', '076-'.str_pad(Auth::user()->indexUserAuthentication,4,'0',STR_PAD_LEFT).'-'.str_pad(ShoppingList::count(),5,'0',STR_PAD_LEFT))->first();
            $selectedList->shoppingListContent = json_decode($selectedList->shoppingListContent);
            return response()->json($selectedList,201);
        }else{
            return response()->json(["error"=>"error in updating list"],422);

        }
	}
   
}
