<?php
namespace App\Http\Controllers;
use App\Word;
use Illuminate\Http\Request;

class WordController extends Controller
{
    public function showAllWords()
    {    return response()->json(Word::all());
    }
    
    
     public function create(Request $request){
       $word = Word::create($request->all());
       return response()->json($word);
     
      /*  $file = Request::file(‘file’);
       Storage::put($file->getClientOriginalName(), File::get($file));
      return response()->json(‘success’);*/
         
     }
 
    
    
}