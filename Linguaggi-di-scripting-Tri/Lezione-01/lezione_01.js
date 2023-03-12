let numero = 10;
//alert(numero);
let primi = [
    {"nomeDelPiatto": "Carbonara", "prezzo":12},
    {"nomeDelPiatto": "Tonnarelli cacio e pepe", "prezzo":15}
];
let secondi = [
    {"nomeDelPiatto": "Coda alla vaccinara", "prezzo":20},
    {"nomeDelPiatto": "Trippa alla romana", "prezzo":15}
];
let menu = {"primi": primi, "secondi": secondi};
console.log(menu.secondi[1].prezzo);