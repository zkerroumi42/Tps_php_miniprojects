function factoriel(nb){
    let i,fact=1;
    if(nb==1 || nb==0)
        return 1;
    for(i=nb;i>0;i--){
        fact*=i;

    }
    return fact;
}

function SFactoriel(n){
     var some=0,i;
     str="0!";
     for(i=n;i>=0;i--){
        some+=factoriel(i);
        str+="+"+i+"!";
     }
     factorielle.value=n+"! = "+ factoriel(n);
     s.value=str +"="+some;

}
