class Calcolatrice {
    constructor (n1, n2){
        if (n1 > 0){
            this.n1=n1;
        } else {
            this.n1 = 1;
        }
        if (n2 > 0){
            this.n2=n2;
        } else {
            this.n2 = 1;
        }
    }
    somma(){
        return this.n1+ this.n2;
    }
    moltiplica(){
        return this.n1 * this.n2;
    }
    dividi(){
        if (this.n2 > 0){
            return this.n1 / this.n2;
        } else {
            return NaN;
        }

    }
}


var miaCalcolatrice = new Calcolatrice(6,2);
console.log("6 + 2 ="+miaCalcolatrice.somma());
console.log("6 * 2 ="+miaCalcolatrice.moltiplica());
console.log("6 / 2 ="+miaCalcolatrice.dividi());
