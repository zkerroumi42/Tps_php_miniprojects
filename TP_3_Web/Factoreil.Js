
function factoriel(entier){
 if(entier===0 || entier===1)
    return 1;
    for(var i =entier-1 ;i>=1;i--){
    entier *=i;
}
return entier;

}
function SFactoriel(n){
    let somme =0;
    let str="1!";
    for(var i=2;i<n;i++){
        somme+=factoriel(i);
        str+=" +  "+i+"!";
    }
    id2.value  =n +"!  =  "+factoriel(n);
    id3.value  = str +  " = " +somme;

}
 /*
 function fact(i){
     var f=1; var j=1;
     while(j<=i){
         f*=j;
         j++
     }
     return f;
 }
 function sfact(n){
     var somme ;
     var str;
     for (var i=2; i<=n;i++){
         somme+=factoriel(i);
         str += "+"+i+" !";
     }
     id2.value  =n+"!  =  "+factoriel(n);
     id3.value  = str +  " = " +somme;
 }  */