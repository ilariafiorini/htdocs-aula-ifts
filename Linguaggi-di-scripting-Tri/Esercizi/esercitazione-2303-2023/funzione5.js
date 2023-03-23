var matrice = [[1,2,3],[4,5,6],[7,8,9],[10,11,12]];

function trasponiMatrice(matrice){
    let matriceTrasposta = [];
    var numeroColonne = matrice.length;
    var numeroRighe = matrice[0].length;
    for(x = 0 ; x < numeroRighe; x++){
        let arraytemp = [];
        for (y = 0; y < numeroColonne; y++ ){
            arraytemp.push(matrice[y][x]); 
        }
        matriceTrasposta[x] = arraytemp;
    }
    return matriceTrasposta;
}

console.log(matrice);
console.log(trasponiMatrice(matrice));