<?php

use Illuminate\Http\Request;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Support\Facades\Route;

Route::prefix("user")-> middleware ("guest")->group(function () {
    Route::view('/welcome','welcome',['name' =>'Tylor']);

});

Route::get('/', function () {
    return view('welcome');
})->name('home');

//Route:: get("/login",function(){
//return "hi";
//});

/*Route:: get("/login",function(){
    return response("<h1>Hi</h1>",200,["Content-type"=>"application/json"]);
    });
*/

Route::any("/login",function(){
    return response("<h1>Hi</h1>",200)
    ->header("exampleheader","abc");
    });

Route::redirect('/a1', '/a2');

Route::get('/a2', function(){
    return"a2";
});

Route::view('/welcome', 'welcome');

Route::view('/welcome', 'welcome', ['name' => 'Taylor']);

Route::get('/user/{id}', function (string $id) {
    return 'User '.$id;
});

 
Route::get('/r/{i}', function (string $i) {
    // ...
})->where(['i', '[0-9]+', 'name'=>'[a-z]+']);

Route::get("search",function(Request $request) {
dd($request);
});