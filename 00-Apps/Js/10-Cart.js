let QtyInput=document.getElementById("QTYBYINPUT");
let btnCalc=document.getElementById("btnCalc");
let QTYPRINT=document.getElementById("QTYH");
let DiscPerc=document.getElementById("DiscPerc");
let TotallCostBeforDiscount=document.getElementById("ToalCostH");
let TotallCostAfterDiscount=document.getElementById("TotalAfterDisc");
let NetAfterVat=document.getElementById("NetCostAfterVate");

let popDetails=document.getElementsByClassName("popUp")[0];


btnCalc.addEventListener("click",()=>{

          console.log("yesssssssssssssssssss");

          popDetails.classList.add("active");
          let QTY=QtyInput.value;
          let totalcost=0;
          let CostAfterVat=0;
          
          if(QTY!="" && QTY<=3)
          {
           totalcost=QTY*300;
           CostAfterVat=totalcost-(totalcost*14)/100;

           QTYPRINT.innerHTML=QTY +"Items";
           TotallCostBeforDiscount.innerHTML=totalcost +"LE";
           NetAfterVat.innerHTML=CostAfterVat +"LE";

          


          }
          else if(QTY!=""&& QTY>3)
          {
                    totalcost=QTY*300;
                    TotallCostBeforDiscount.innerHTML=totalcost +"LE";
                    totalcost-=(totalcost*30)/100;

                    CostAfterVat=totalcost-(totalcost*14)/100;
         
                    QTYPRINT.innerHTML=QTY +"Items";
                    TotallCostAfterDiscount.innerHTML=totalcost +"LE";
                    NetAfterVat.innerHTML=CostAfterVat +"LE";     
          }
          
})
