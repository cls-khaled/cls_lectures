        document.getElementById("btncalc").addEventListener("click",function(){
        
            let firstNumber=document.getElementById("n1").value;
            let secondNumber=document.getElementById("n2").value;

            //------- call Function -------
           let Theresult= divide(Number(firstNumber),Number(secondNumber));

           if(Theresult!="Unknown")
           {
           document.getElementById("result").innerHTML="Result is : "+Theresult;

           }
           else
           {
        document.getElementById("result").innerHTML="";

           }
        });
