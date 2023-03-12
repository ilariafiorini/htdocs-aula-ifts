//let numero = 3;

function tabellinaDiEnne(n){
    console.log("tabellina di: "+n);
    for (i=1; i <= 10; i++){
        console.log(n+" x "+i+" = "+(n*i) )
    }
}
let numero = prompt();
tabellinaDiEnne(parseInt(numero));