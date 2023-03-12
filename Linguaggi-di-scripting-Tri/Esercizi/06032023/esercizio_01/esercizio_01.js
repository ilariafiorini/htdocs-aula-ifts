function isNumeriPrimi(num){
    if (typeof num === "number" && num >= 1){
        for (let i = num-1;  i > 1; i--){
            if (num%i == 0){
                return false;
            }
            //return true;

        }
        return true;


    }
    return false;
}

function stampaNumeriPrimi(n){
    if (typeof n == "number" && n >= 1){
        let i = 1;
        while (n >= 1){
            if (isNumeriPrimi(i)){
                console.log(i);
                n--;
            }
        i++;
        }
    }
}
console.log(isNumeriPrimi(4));
stampaNumeriPrimi(15);