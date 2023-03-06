class Garage{
    constructor(){
        this.automobili = [];

    }

    //inserisciAuto(auto = new Auto(marca.modello)){
    inserisciAuto(auto){
        let indice = this.automobili.length;
        this.automobili[indice] = auto;
    }    
        
    stampaModelloDiMarca(nomeMarca){
        for (automobile of this.automobili){
            if (automobile.isMiaMarca(nomeMarca)){
                console.log(automobile.modello);
            }
        } 
    }

    eliminaAuto(marca, modello){
        for (numauto in automobibili){
            if (automobile[numauto].marca == marca && automobile[numauto].modello == modello){
                automobile[numauto] == null;
            }
        }
    }
} //Garage

class Auto{
    constructor (marca, modello){
        if (typeof marca == " string" ){

            this.marca = marca;
        } else {
            return false;
        }
        if (typeof modello == " string" ){

            this.modello = modello;
        } else {
            return false;
        }
    }
  
    isMiaMarca(marca){
        if (typeof marca == "string" && marca == this.marca){
            return true
        } else{
            return falser
        }
    }

    get modello(){
        return this.modello;
    }

    get marca(){
        return this.marca;
    }

    
    
}// Auto