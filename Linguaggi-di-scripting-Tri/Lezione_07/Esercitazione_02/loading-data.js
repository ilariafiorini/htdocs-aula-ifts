function creaDivColonne(valoreTesto){
    let divCol = document.createElement("div");
    divCol.className = "col-md-3";
    divCol.innerHTML = valoreTesto;
    return divCol;
}

function creaDivRighe(indice){
    let divRow = document.createElement("div");
    divRow.setAttribute("data-id", indice);
    if (indice % 2 == 0){
        divRow.className = "row";
    }else {

        divRow.className = "row bg-light";
    }
    return divRow;
}

let divRowRoot = document.getElementById("ordine-row");


    
    for (let index = 0; index < ordini.length; index++) {
        const contatto = ordini[index];
        let divRiga = creaDivRighe(index);
        divRiga.appendChild(creaDivColonne(index));
        divRiga.appendChild(creaDivColonne(contatto.contatto));
        divRiga.appendChild(creaDivColonne(contatto.indirizzo));
        divRiga.appendChild(creaDivColonne(contatto.prodotti));
        divRowRoot.appendChild(divRiga);
    }