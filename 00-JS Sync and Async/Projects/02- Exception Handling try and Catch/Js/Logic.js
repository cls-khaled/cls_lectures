    //----- create Function by Single Responsability Principle
        // function divide(num1,num2)
        // {
        //  return num1/num2;
        // }


       function divide(num1,num2)
        {
            if(num2==0)
            {
                alert("can't divid by Zero");
                // return "Can't Divid BY ZERO "
                return "Unknown";
            }
         return num1/num2;
        }