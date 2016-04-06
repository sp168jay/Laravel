<?php

use App\Task;//使用之間建立用來對應資料表的模型
use Illuminate\Http\Request;//用來處理連線使用者的要求

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::group(['middleware ' => 'web'], function(){//使用框架中間層保護相關 URL


    //規劃路由
    Route::get('/', function () {//顯示所有任務
        return view('welcome');//網頁使用者介面

    });

        Route::post('/task', function (Request $request) {//新增任務
        $validator = Validator::make(%request->all()),[
            'name'=>'required|max:255';
        ]);
            if($validator->fails()){
                return redirect('/')
                    ->withInput()
                    ->withErrors($validator);
            }

    });

        Route::deltet('/task/{task}', function (Task $task) {//刪除任務
        //

    });

    
    

});