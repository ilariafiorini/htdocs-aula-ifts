function getOreMinutiSecondi (numerosecondi){
    var ore = Math.round(numerosecondi/3600);
    var minuti = Math.round( (numerosecondi % 3600)/60);
    var secondi = (numerosecondi % 60);
    console.log(" A " +numerosecondi + " secondi corrispondono: "+ ore + " ore, " + minuti + 
            " minuti e "+ secondi + " secondi");
    return [ore, minuti, secondi];
}

console.log(getOreMinutiSecondi(54071));