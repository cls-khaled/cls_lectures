        document.getElementById("btncalc").addEventListener("click",function(){
        
            let firstNumber=document.getElementById("n1").value;
            let secondNumber=document.getElementById("n2").value;

            //------- call Function -------
           let Theresult= divide(Number(firstNumber),Number(secondNumber));

           document.getElementById("result").innerHTML="Result is : "+Theresult;
        });
