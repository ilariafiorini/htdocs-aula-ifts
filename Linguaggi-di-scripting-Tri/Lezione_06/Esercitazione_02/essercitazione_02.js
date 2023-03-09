class Contatto {
constructor (nome, cognome, numerotelefono){
    if (typeof nome === "string"){
        this.nome = nome;
    } else {
        this.nome = "nome";
    }
    if (typeof cognome === "string"){
        this.cognome = cognome;
    } else {
        this.cognome = "cognome";
    }
    if (typeof numeroTelefono === "string"){
        this.numeroTelefono = numerotelefono;
    }else {
        if (numeroTelefono === "number"){
            this.numeroTelefono = numeroTelefono.toStrong();
        } else {
            this.numeroTelefono = "1231234567";
        }
    } 
}



class Rubrica {
constructor 

}