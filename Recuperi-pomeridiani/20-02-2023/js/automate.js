//lego le funzioni ai pulsanti

// document.getElementById("btnRosso").addEventListener("mousedown", aggiungi_rosso);
// document.getElementById("btnRosso").addEventListener("mouseup", aggiungi_bianco);
// document.getElementById("btnBlu").addEventListener("mousedown", aggiungi_blu);
// document.getElementById("btnBlu").addEventListener("mouseup", aggiungi_bianco);
// document.getElementById("btnVerde").addEventListener("mousedown", aggiungi_verde);
// document.getElementById("btnVerde").addEventListener("mouseup", aggiungi_bianco);

// alla pressione del pulsante con ID "btnRosso" chiamo la funzione aggiungi_rosso
document.getElementById("btnRosso").addEventListener("click", aggiungi_rosso);

// alla pressione del pulsante con ID "btnBlu" chiamo la funzione aggiungi_blu
document.getElementById("btnBlu").addEventListener("click", aggiungi_blu);

// alla pressione del pulsante con ID "btnVerde" chiamo la funzione aggiungi_verde
document.getElementById("btnVerde").addEventListener("click", aggiungi_verde);

// alla pressione del pulsante con ID "btnAlterna" chiama la funzione alterna_colore
document.getElementById("btnAlterna").addEventListener("click", alterna_colore());



function aggiungi_classe(classe){
    //carico i DIV nella variabile mieiDIV
    var mieiDIV = document.getElementsByClassName("quadrato");
    //ciclo su contenuto di mieiDIV e aggiungo la classe "bgRosso" ad ogni elemento
    for(i = 0; i<mieiDIV.length; i++ ){
       mieiDIV[i].classList.add(classe);
    }
}

function azzera_classi(){
    var mieiDIV = document.getElementsByClassName("quadrato");
    //ciclo su contenuto di mieiDIV e aggiungo la classe "bgRosso" ad ogni elemento
    for(i = 0; i<mieiDIV.length; i++ ){
        mieiDIV[i].classList.remove("bgVerde");
        mieiDIV[i].classList.remove("bgBlu");
        mieiDIV[i].classList.remove("bgRosso");
        mieiDIV[i].classList.remove("bgBianco");
    }
}

function alterna_colore() {
	//carico i DIV nella variabile mieiDIV
	var mieiDIV = document.getElementsByClassName("quadrato");

	//tolgo le classi già presenti
	azzera_classi();

	//ciclo sul contenuto di mieiDIV e aggingo la classe "bgRosso" ad ogni elemento
	for (i = 0; i < mieiDIV.length; i+=3){
		mieiDIV[i].classList.add("bgRosso");
	}
	for (i = 1; i < mieiDIV.length; i+=3){
		mieiDIV[i].classList.add("bgVerde");
	}
	for (i = 2; i < mieiDIV.length; i+=3){
		mieiDIV[i].classList.add("bgBlu");
	}
}



function aggiungi_rosso(){
    azzera_classi();
    aggiungi_classe("bgRosso");

}

function aggiungi_verde(){
    azzera_classi();
    aggiungi_classe("bgVerde");

}

function aggiungi_blu(){
    azzera_classi();
    aggiungi_classe("bgBlu");

}

// function aggiungi_rosso(){
//     //carico i DIV nella variabile mieiDIV
//     var mieiDIV = document.getElementsByClassName("quadrato");
//     //ciclo su contenuto di mieiDIV e aggiungo la classe "bgRosso" ad ogni elemento
//     for(i = 0; i<mieiDIV.length; i++ ){
//         mieiDIV[i].classList.add("bgRosso");
//         mieiDIV[i].classList.remove("bgVerde");
//         mieiDIV[i].classList.remove("bgBlu");
//         // mieiDIV[i].classList.remove("bgBianco");

//     }
// }


// 

// 

// function aggiungi_bianco(){
//     //carico i DIV nella variabile mieiDIV
//     var mieiDIV = document.getElementsByClassName("quadrato");
//     //ciclo su contenuto di mieiDIV e aggiungo la classe "bgRosso" ad ogni elemento
//     for(i = 0; i<mieiDIV.length; i++ ){
//         mieiDIV[i].classList.add("bgBianco");
//         mieiDIV[i].classList.remove("bgRosso");
//         mieiDIV[i].classList.remove("bgVerde");
//         mieiDIV[i].classList.remove("bgBlu");
//         // mieiDIV[i].classList.remove("bgBianco");

//     }
// }
