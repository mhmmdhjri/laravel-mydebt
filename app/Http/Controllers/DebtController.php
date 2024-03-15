<?php

namespace App\Http\Controllers;

use App\Models\Debt;
use Illuminate\Http\Request;

class DebtController extends Controller
{
    public function index()
    {
      $debt = Debt::all();
      
      return view('home',compact('debt'));

    }
// inpur data
   public function input(){
    return view('form');
   }
//    progress
 public function store(Request $request){

  $debt = Debt::create($request->all());
  return redirect('home');


     }
     public function edit($id){
          $debt = Debt::find($id);
         return view('update.edit',compact('debt'));



     }
     public function update($id, Request $request){
      $debt = Debt::find($id);
      $debt->update($request->all());
      return redirect('home');

     }
     public function destroy($id)
     {
         $debt = Debt::find($id);
     
         if ($debt) {
             $debt->delete();
             return redirect('home');
         } else {
             return redirect('home')->with('error', 'Debt not found.');
         }
     }
     
 
    
}
