
let GetImg=document.getElementsByClassName("redtheme")[0];

function GreenTheme()
{
         if(GetImg.classList.contains("redtheme"))
         {
          // GetImg.classList.add("Greentheme");
          GetImg.classList.replace("redtheme","Greentheme");
         }
         else
         {
          GetImg.classList.add("Orangetheme");
         }
}