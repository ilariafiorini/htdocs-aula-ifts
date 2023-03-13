function Calcolatrice(){
    
    this.leggi = function(numero1, numero2){
        if (typeof numero1  == "number" && typeof numero2  == "number"){
            
            this.numero1=numero1;
            this.numero2=numero2;
        } else{
            return false;
        }
    };
    
    this.somma = function(){
        if (this.numero1 !== undefined && this.numero2 !== undefined ){

            return this.numero1+this.numero2;
        }else {
            return NaN;
        }
    };
    
    this.moltiplica = function(){
        if (this.numero1 !== undefined && this.numero2 !== undefined ){
    
            return this.numero1*this.numero2;
        }else {
            return NaN;
        }
    };
    
    this.dividi = function(){
        if (this.numero1 !== undefined && this.numero2 !== undefined ){
    
            if (this.numero2 > 0){
                
                return this.numero1/this.numero2;
            } else{
                return NaN;
            }
        }else {
            return NaN;
        }
    };


}


var miaCalcolatrice = new Calcolatrice();
miaCalcolatrice.leggi(6,2);
console.log("6 + 2 ="+miaCalcolatrice.somma());
console.log("6 * 2 ="+miaCalcolatrice.moltiplica());
console.log("6 / 2 ="+miaCalcolatrice.dividi());
