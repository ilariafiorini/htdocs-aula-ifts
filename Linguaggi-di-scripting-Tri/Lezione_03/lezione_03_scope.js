let totale = 2;
function incrementa(totale){
    // let totale = 0;
    totale += 1;
    console.log("il valore totale è : " + totale);
    return totale;
    

}
function incrementaEsterno(){
    // let totale = 0;
    totale += 1;
    console.log("il valore totale è : " + totale);
    // return totale;
}

// totale = incrementa(totale);
incrementa(totale);
console.log("il valore totale è : " + totale);

// totale = incrementa(totale);
incrementa(totale);
console.log("il valore totale è : " + totale);

totale = incrementa(totale);
console.log("il valore totale è : " + totale);

totale = incrementa(totale);
console.log("il valore totale è : " + totale);

incrementaEsterno();
console.log("il valore totale è : " + totale);

incrementaEsterno();
console.log("il valore totale è : " + totale);

// let nonStampareExt = true;

// function stampa(){
//     let nonStampare = !nonStampareExt;
//     if(!nonStampare){
//         console.log("Stampo");
//     }
// }

// stampa();

let nonStampare = true;

function stampa(){
    nonStampare = !nonStampare;
    if(!nonStampare){
        console.log("Stampo");
    }
}

stampa();
stampa();
stampa();
stampa();
stampa();
