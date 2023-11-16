function showpassword(){
    var a=document.getElementById("pass");
    var b=document.getElementById("confipass");
   if (a.type === "password" ||b.type === "password"){
       a.type = "text";
       b.type = "text";
   }
   else{
       a.type = "password";
       b.type = "password";
   }
}