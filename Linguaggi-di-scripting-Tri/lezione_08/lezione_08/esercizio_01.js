function stampaTabelline(numeroInteri) {
    let div = document.getElementById("tabelline");
    for (let index = 1; index <= numeroInteri; index++) {
        let cols = creaColonne(index);
        let riga = creaRiga(index, cols);
        div.appendChild(riga);
    }
}

function creaColonne(index) {
    let cols = [];
    for (let y = 1; y <= 10; y++) {
        let colonna = document.createElement("div");
        colonna.className = "col";
        colonna.innerHTML = y * index;
        cols.push(colonna);
    }
    return cols;
}

function creaRiga(index, cols) {
    let riga = document.createElement("div");
    riga.className = "row";
    /*for (let i = 0; i < cols.length; i++) {
        const element = cols[i];
        riga.appendChild(element);
    }*/
    cols.forEach(el => riga.appendChild(el));
    return riga;
}