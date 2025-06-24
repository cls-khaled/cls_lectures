<?php

use Illuminate\Support\Facades\Route;

//-------- Calling Controller -----------------
use App\Http\Controllers\Home;

use App\Http\Controllers\ControllerByView;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*========= Defualt Route ======================  */
Route::get('/', function () {
    return view('welcome');
});

/*=========  Route By Message ======================  */

Route::get('Yes',function(){

    echo "Welcome Yes And Message "."</br>";
    return "Welcome By YESSSSS";
});

/*=========  Route By Parmeter  ======================  */

Route::get('RouteByParameter/{id}',function(){

    return "Welcome By User By ID ";
});

/*=========  Route By Parameter And Print Parameter  ======================  */
Route::get('RouteByParameterAndPrint/{Name}',function($n){

    return "Welcome MR :  ".$n;
});


/*=========  Route By Optional Parameter  ======================  */

Route::get('RoutByOptionalParameter/{Name?}',function($n=null){

    return "Welcome MR :  ".$n;
});

/*=========  Route By Multi Parameters  ======================  */

Route::get('RouteByMultiParameter/{Name}/{Age}/{Qulifications}',function($n,$age,$Q){

    return "Welcome MR :  ".$n ."</br>"."Age Is : ".$age."</br>"."Qulifications is : ".$Q;
});

/*=========   Route By Multi Parameters And Print By Echo  ======================  */

Route::get('RouteByMultiParameterByEcho/{Name}/{Age}/{Qulifications}',function($n,$age,$Q){

    echo "Welcome Mr : ". $n ."</br>";
    echo "Age IS : ". $age ."</br>";
    echo "Qulifications  IS  : ". $Q ."</br>";


});

/*=========   Route By Multi optional  Parameters And Print By Echo  ======================  */

Route::get('RouteByMultiOptionalParameter/{Name?}/{Age?}/{Qulifications?}',function($n="Omar",$age=12,$Q="Arts"){

    echo "Welcome Mr : ". $n ."</br>";
    echo "Age IS : ". $age ."</br>";
    echo "Qulifications  IS  : ". $Q ."</br>";


});

/*=========   Route By Multi Parameters By REgular Expressions   ======================  */

Route::get('RouteByMultiParameterByRegularExpression/{Name?}/{Age?}/{Qulifications?}',function($n="Omar",$age=12,$Q="Arts"){

    echo "Welcome Mr : ". $n ."</br>";
    echo "Age IS : ". $age ."</br>";
    echo "Qulifications  IS  : ". $Q ."</br>";


})->where('Name','[A-Za-z]+');//-- حروف كابيتال او اسمال ومن حرف الايه الي الزد


//---- Route by  Regular Expression  by Expression 2 parameteres----------
Route::get("/GetRoutByRegularbyMultiParameters/{name}/{age}",function($name,$age){

    return "Welcome: ".$name."   age is : ".$age;
})->where(['age'=>'[1-9]+','name'=>'[a-z]+']);

//-- 9  حروف كابيتال او اسمال ومن حرف الايه الي الزد او أرقام من 1  الي


//---- Route by  Regular Expression  by Expression 2 parameteres and bultin function ----------
Route::get("/GetRoutByRegularBuiltInFUnction/{name}/{age}",function($name,$age){

    return "Welcome: ".$name."age is : ".$age;
})->whereNumber('age')->whereAlpha('name');//-- حروف كابيتال او اسمال ومن حرف الايه الي الزد


//---- Route by  Regular Expression  by Expression 2 parameteres Alpha Numuric ----------
Route::get("/GetRoutByRegularAlphaNumric/{name}/{age}",function($name,$age){

    return "Welcome: ".$name."age is : ".$age;
})->whereAlphaNumeric('name')->whereNumber('age');//-- حروف كابيتال او اسمال ومن حرف الايه الي الزد



//---- Route by  Global Constrain in Route Service Provider  ----------
Route::get("/GetRoutByGlobalConstrain/{name}/{MYage}",function($name,$MYage){

    return "Welcome: ".$name."age is : ".$MYage;
});//-- صناعة كونسترين على مستوي المشروع فى ال
//-- Go to app/Http/Providers /Route Service Provider/RouteServiceProvider.php 
//-- > Function  boot(){  Route::pattern("MYage","[0-9]+"); }



//---- Route by  Encoded Forward Slash [Unlimited Prameters ] /  /  /  /  /    ----------
Route::get("/GetRoutByEncodedForwardSlash/{name}/{MYage}",function($name,$MYage){

    return "Welcome: ".$name."age is : ".$MYage;
})->where('MYage','.*');//-- حروف كابيتال او اسمال ومن حرف الايه الي الزد
//---- }إرسال اي عدد من البراميتيز الي الروت  
//----- http://127.0.0.1:8000/GetRoutByEncodedForwardSlash/omar/55/sss/dddd/99/ddd/88



//=================  Route Name And Call Route Name By :
// <a href="{{route('GetCategoryPro')}}"> Product By Category </a>  =================
//---- Notes : Call Rout Name in Welcome.blade.php View 

Route::get('/catPro', function () {
    return view('CategoryProducts');

  
})->name('GetCategoryPro');


Route::get('/ProductBySupplier', function () {
    return view('Supplier.SupplierByPro');

   
})->name('GetSupplierByPro');


//============================== Before Route Prefix =====================



//  Route::get('admin/Home',function(){
//         return "Home ...****************************..";

//         //-------- http://127.0.0.1:8000/admin/Home -----
//  });

//  Route::get('admin/products',function(){
//             return "Productssssssssssss  .....";

//             //-------- http://127.0.0.1:8000/admin/products -----
// });

// Route::get('admin/About',function(){
//     return "Aboutsssssssssss  .....";

//     //-------- http://127.0.0.1:8000/admin/About -----
// });



  // =========== After Prefix ==========================
  Route::prefix('admin')->group(function(){

    Route::get('Home',function(){
    return "Home .....";

    //-------- http://127.0.0.1:8000/admin/Home -----
    });

    Route::get('products',function(){
    return "Products .....";

    //-------- http://127.0.0.1:8000/admin/products -----
    });

    Route::get('About',function(){
    return "About .....";

        //-------- http://127.0.0.1:8000/admin/About -----

    });


    });


/*=========   Route By Controller   ======================  */

Route::get("GetFunctionByController",[Home::class,"Index"])->name('IndexByController');
Route::get("/CreateFunctionByController",[Home::class,"Create"]);
Route::get("StoreFunctionByController",[Home::class,"Store"]);
Route::get("EditFunctionByController",[Home::class,"Edit"]);
Route::get("UpdateFunctionByController",[Home::class,"Update"]);
Route::get("DeleteFunctionByController",[Home::class,"Delete"]);
Route::get("DestroyFunctionByController",[Home::class,"Destroy"]);


/*========= Before   Route  Controller Groups    ======================  */

Route::get("CallingHomeView",[ControllerByView::class,"CallView"]);
Route::get("CallingViewInternalFolder",[ControllerByView::class,"CallViewInternalFolder"]);
Route::get("SendParameterToViews",[ControllerByView::class,"CallViewAndSendParameters"]);
Route::get("SendMultiParameterToViews",[ControllerByView::class,"CallViewAndSendMultiParameters"]);
Route::get("CallViewAndSendMultiParametersByArray",[ControllerByView::class,"CallViewAndSendMultiParametersWithArray"]);


//---------- Product Controller Group -----------------

Route::controller(ControllerByView::class)->group(function(){


    
Route::get("CallingHomeViewByGroupController","CallView");
Route::get("CallingViewInternalFolderByGroupController","CallViewInternalFolder");
Route::get("SendParameterToViewsByGroupController","CallViewAndSendParameters");
Route::get("SendMultiParameterToViewsByGroupController","CallViewAndSendMultiParameters");
Route::get("CallViewAndSendMultiParametersByArrayByGroupController","CallViewAndSendMultiParametersWithArray");



});



/*=========   Route  Controller And Blade And View   ======================  */

Route::get('GetViewByBlade', function () {
    return view('ViewByBlade');
});

Route::get("SendParameterToViewAndDisplayByBlade",[ControllerByView::class,"SendParameterToView"]);

/*=========     IS Set Function Return True or False    ======================  */


Route::get("IsSetByBladeViewTrueOrFalse",[ControllerByView::class,"IsSetByBladeView"]);

/*=========   empty Function Return True or False    ======================  */


Route::get("EmptySendParameteryView",[ControllerByView::class,"EmptySendParameter"]);

/*=========   For each  By Array ======================  */


Route::get("ForeachByArrayByBlade",[ControllerByView::class,"ForeachByArray"]);

/*=========   For each  By Array ======================  */

Route::match(['post','get'],'RouteByMatch',function(){

    return " Welocme By Post Or Get ";
}); 

/*=========   Route By Any  ======================  */

// Route::any('/',function(){

//     return " Welocme By ANY  ";
// }); 


/*=========   Route By  Redierct  ======================  */

Route::get('/CommingSoonURL', function () {
    return view('CommingSoon');
});


Route::redirect("GoToComingSoon","CommingSoonURL");