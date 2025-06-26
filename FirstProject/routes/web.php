<?php

use Illuminate\Support\Facades\Route;

//-------- Calling Controller  name space Controller -----------------
use App\Http\Controllers\Home;

use App\Http\Controllers\ControllerByView;





Route::get('/', function () {
    return view('welcome');
})->name('GetHomePage');


//--------------------------------

Route::get('/GetPro',function(){
   
    // echo "Welcome To products ";

    return view("Product");
}
);

//-----------

Route::get('/GetSup',function(){
   
    // echo "Welcome To products ";

    return view("Supplier.SupplierDetails");
}
);

//----------- Route By ID ---

Route::get('/EmpDetails/{SSN}',function(){
   
    // echo "Welcome To products ";

    return view("Employee");
}
);


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
Route::get("/GetRoutByEncodedForwardSlash/{name}/{Yourage}",function($name,$MYage){

    return "Welcome: ".$name."age is : ".$MYage;
})->where('Yourage','.*');//-- حروف كابيتال او اسمال ومن حرف الايه الي الزد
//---- }إرسال اي عدد من البراميتيز الي الروت  
//----- http://127.0.0.1:8000/GetRoutByEncodedForwardSlash/omar/55/sss/dddd/99/ddd/88

//=================  Route Name And Call Route Name By :
// <a href="{{route('GetCategoryPro')}}"> Product By Category </a>  =================
//---- Notes : Call Rout Name in Welcome.blade.php View 

Route::get('/catPro', function () {
    return view('Category');

  
})->name('GetCategory');


Route::get('/GetHomeNew', function () {
    return view('Home');

  
})->name('HomeRoute');

Route::get('/GetSupplierNew', function () {
    return view('Supplier.SupplierDetails');

  
})->name('SupplierRoute');


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
Route::get("/CreateFunctionByController",[Home::class,"Create"])->name('CreateByController');
Route::get("StoreFunctionByController",[Home::class,"Store"]);
Route::get("EditFunctionByController",[Home::class,"Edit"]);
Route::get("UpdateFunctionByController",[Home::class,"Update"]);
Route::get("DeleteFunctionByController",[Home::class,"Delete"]);
Route::get("DestroyFunctionByController",[Home::class,"Destroy"]);


/*========= Before   Route  Controller Groups    ======================  */

/*========= Before   Route  Controller Groups    ======================  */

Route::get("CallingHomeView",[ControllerByView::class,"CallView"])->name('CallByViewIndex');
Route::get("CallingViewInternalFolder",[ControllerByView::class,"CallViewInternalFolder"])->name('RouteByViewInternalFolder');
Route::get("SendParameterToViews",[ControllerByView::class,"CallViewAndSendParameters"])->name('RouteBySendparameter');
Route::get("SendMultiParameterToViews",[ControllerByView::class,"CallViewAndSendMultiParameters"])->name('RouteSendMultiParams');
Route::get("CallViewAndSendMultiParametersByArray",[ControllerByView::class,"CallViewAndSendMultiParametersWithArray"])->name('RouteSendByArray');
Route::get("AAAAAAAAAAAAAAAA",[ControllerByView::class,"SendParameterToView"])->name('RouteByIF');
Route::get("DDDDDDDDD",[ControllerByView::class,"IsSetByBladeView"])->name('RouteByISSet');
Route::get("FFFFFFF",[ControllerByView::class,"EmptySendParameter"])->name('RouteByEmpty');
Route::get("TTTT",[ControllerByView::class,"ForeachByArray"])->name('RouteByForeach');

//----------  Controller Group -----------------

Route::controller(ControllerByView::class)->group(function(){


    
Route::get("CallingHomeView","CallView")->name('CallByViewIndex');
Route::get("CallingViewInternalFolder","CallViewInternalFolder")->name('RouteByViewInternalFolder');
Route::get("SendParameterToViews","CallViewAndSendParameters")->name('RouteBySendparameter');
Route::get("SendMultiParameterToViews","CallViewAndSendMultiParameters")->name('RouteSendMultiParams');
Route::get("CallViewAndSendMultiParametersByArray","CallViewAndSendMultiParametersWithArray")->name('RouteSendByArray');
Route::get("AAAAAAAAAAAAAAAA","SendParameterToView")->name('RouteByIF');
Route::get("DDDDDDDDD","IsSetByBladeView")->name('RouteByISSet');
Route::get("FFFFFFF","EmptySendParameter")->name('RouteByEmpty');
Route::get("TTTT","ForeachByArray")->name('RouteByForeach');

        
    });
    

 /*=========   Route By  Redierct  ======================  */

Route::get('/CommingSoonURL', function () {
    return view('CommingSoon');
});


Route::redirect("ssssssss","CommingSoonURL")->name('GetComingSoon'); 




// Route::get("GetFunctionByController",[Home::class,"Index"])->name('IndexByController');

Route::redirect("AAADFFF","GetFunctionByController")->name('GetComingSoonCat'); 


Route::get('/catPro', function () {
    return view('Category');

  
})->name('GetCategory');

Route::redirect("catPro","CommingSoonURL")->name('GetCategory'); 
