function eseguiGet() {
    let xhr = new XMLHttpRequest();
    xhr.open("GET", "https://dev.entrainhotel.com/wp-json/wao-portali/v1/mappaHotels?pagina=1&per_page=-1&comune=Rimini&trattamenti=&categorie_struttura=&servizi=&family=&bnb=")
    xhr.send();

    xhr.onload = function () {
        console.log(xhr.status);
    }

    xhr.onerror = function () {
        console.log(xhr.statusText);
    }
}

setTimeout(function(){eseguiGet();}, 5000 );