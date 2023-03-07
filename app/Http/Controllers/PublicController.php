<?php
namespace App\Http\Controllers;


use App\Models\Article;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Mail;


class PublicController extends Controller
{
    public function welcome(){
        return view('welcome');
    }
    public function Form(){
        return view('form');
    }
    public function iscriviti(Request $request){
        $name = $request->name;
        $email = $request->email;
        $number = $request->number;
        $description = $request->description;
     
        
        //   dd($request)->all();
        $user = compact('name','email','number','description');
          Mail::to($email)->send(new ContactMail($user));

       
        return redirect(route('welcome'))->with('message', 'la tua email è stata inviata con successo');
    }

    public function index(){
        return view('index');
    }

    public function edit($id){
        $article = Article::findOrFail($id);
        return view('edit', compact('article'));
   
 }     
    



}
