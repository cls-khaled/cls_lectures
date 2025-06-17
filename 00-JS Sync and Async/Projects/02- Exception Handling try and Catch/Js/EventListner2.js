        document.getElementById("btncalc").addEventListener("click",function(){
        
            let firstNumber=document.getElementById("n1").value;
            let secondNumber=document.getElementById("n2").value;

            //------- call Function -------

            try
            {
           let Theresult= divide(Number(firstNumber),Number(secondNumber));
           document.getElementById("result").innerHTML="Result is : "+Theresult;
            
           /* في حالة حدوث ايررور لا يتم تنفيذ اي امر داخل ال 
           try
           ولكن يتم الذهاب مباشرة الي ال 
           Catch
           */
           console.log("HIIIIIIII");
           console.log("Welcome");
            }
            catch(error)
            {
            console.log(error);
             alert("can't divid by Zero");
             document.getElementById("result").innerHTML="";
            }
            finally
            {
               console.log("Hello World ");
            }
    
      

        
        });
