let  etichetta = "nomeProprieta";
let  etichetta1 = "nomeProprieta";
let oggetto ={
    [etichetta1]: "ciao"
}
let oggetto1 ={
    "etichetta": "ciao"
}
let oggetto2 ={
    etichetta: "ciao"
}

console.log(oggetto.nomeProprieta);
console.log(oggetto[etichetta1]);
console.log(oggetto["nomeProprieta"]);
console.log(etichetta);

function makeObj(nominativo){
    return {
        nominativo,
        nome,
    }
}

let og = makeObj("prova");
console.log(og.nominativo);
console.log(og.nome);


function existProperty(nomeProperty, obj){
    if (obj === null || obj === undefined ){
        return false;
    }
    if (nomeProperty === null || nomeProperty === undefined ){
        return false;
    }

    if (obj[nomeProperty] === undefined){
        return false
    }
    
}


