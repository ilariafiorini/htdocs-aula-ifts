class FiguraGeometrica {
    
constructor (lati){
    console.log(typeof lati);
    if (lati.length > 0){
       
        this.lati = lati;
    }  else {
        this.lati = [];
    }
}

calcolaPerimetro(){
    let perimetro = 0;
    for (let lato of this.lati){
        perimetro = perimetro + lato;
    }
    return perimetro;
}

calcolaArea(){
    return NaN;
}


}


class Triangolo extends FiguraGeometrica{
    constructor (lato1, lato2, lato3){
        //let arrayLati = new Array([lato1,lato2,lato3]);
        let arrayLati = [lato1,lato2,lato3];
        super(arrayLati);
        this.lato1 = lato1;
        this.lato2 = lato2;
        this.lato3 = lato3;
        console.log("constructor"+this.lati);
        //this.base = base;
        //this.altezza = altezza;
    }

    calcolaArea (){
        let p = this.calcolaPerimetro()/2;
        console.log(this.lato1);
        console.log(this.lato2);
        console.log(this.lato3);
        let a = this.lato1;
        let b = this.lato2;
        let c = this.lato3;
        console.log(a);
        console.log(b);
        console.log(c);
        let delta = (p*(p-a)*(p-b)*(p-c));
        console.log("delta"+delta);
        return Math.sqrt(delta);
    }
} 

class Quadrato extends FiguraGeometrica{
    constructor(lato){
        super([lato,lato,lato,lato])
        this.lato = lato;
    }
    calcolaArea(){
        let area = this.lato*this.lato;
        return area;
    }
}

class Rettangolo extends FiguraGeometrica{
    constructor(base, altezza){
        super([base,base,altezza,altezza])
        this.base = base;
        this.altezza = altezza;
    }

    calcolaArea(){
        let area = this.base*this.altezza;
        return area;
    }
}

class Cerchio extends FiguraGeometrica{
    constructor(raggio){
        this.raggio=raggio;
    }
    calcolaPerimetro(){
        let perimetro = this.raggio*2*3.14;
        return perimetro;
    }

    calcolaArea(){
        let area = this.raggio*this.raggio*3.14;
        return area;
    }
}


//let triangolo = new Triangolo(7,11,8);
//console.log(triangolo.calcolaPerimetro());
//console.log(triangolo.calcolaArea());

let quadrato = new Quadrato(5);
console.log(quadrato.calcolaArea());
console.log(quadrato.calcolaPerimetro());