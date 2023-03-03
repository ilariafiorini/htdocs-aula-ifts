var calciatori = [
    {nome: "Lorenzo", cognome: "Pellegrini", maglia: 10 },
    {nome: "Edin", cognome: "Dzeko", maglia: 23 },
    {nome: "Federico", cognome: "Chiesa", maglia: 99 },
    {nome: "Paulo", cognome: "Dybala", maglia: 10 },
    {nome: "Lorenzo", cognome: "Insigne", maglia: 10 },
    {nome: "Andrea", cognome: "Belotti", maglia: 9 },
    {nome: "Antonio", cognome: "Vacca", maglia: undefined },
];

function cercaMaglia(lista, numeroMaglia){
    for (giocatore of lista){
        if(giocatore.maglia === numeroMaglia){
            console.log(giocatore.nome+" "+giocatore.cognome)
        }

    }
}

cercaMaglia(calciatori,10);
