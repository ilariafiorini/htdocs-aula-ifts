function makeAutomobile(nomeModello, nomeMarca){
    return {
        nomeModello,
        nomeMarca
    }
}

let garage = {
    automobili: []
};

garage.validaAuto = function(auto){

    if (auto === null || auto === undefined){
        return false;
    }
    if ("nomeMara" in auto && "nomeModello" in auto){
        return true;
    }
    return false;
}

garage.inserisciAuto = function(auto){
    if (this.validaAuto){

        let indice = this.automobili.length;
        this.automobili[indice] = auto;
    }
    
}

garage.rimuoviAuto = function(auto){
    if (this.validaAuto(auto)){

        // for (var indice in this.automobili){
        //     if (this.automobili[indice] == auto){
        //         delete 
        //     }
        let indiceDaEliminare = -1;
        for (let indice = 0; indice < this.automobili-length; indice++){
            let autoInGarage = this.automobili[indice];
            if (autoInGarage.nomeMarca === auto.nomeMarca && autoInGarage.nomeModello === auto.nomeModello){
                indiceDaEliminare = indice;
                break;
            }
    
        }
        
        }
    }
    delete this.automobili[auto];
}

gatrage.stampaAuto = function(nomeMarca){
    for (const auto of this.automobili) {
        if (nomeMarca === auto.nomeMarca){
            console.log(auto.nomeMarca+" "+auto.nomeModello);
        }
    }
}