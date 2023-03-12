

function isEmpty(obj){
    if (obj !== undefined && obj !== null){
        if(typeof(obj) === "object"){
            for (key in obj){
                return false;
            }
            return true;

        }else{
            return true;

        }

    } else{

        return true;
    }
}

var Calciatore = {};
Calciatore.nome = "Lorenzo";
Calciatore.cognome = "Pellegrini";

console.log(isEmpty(Calciatore));

var Operaio = {};
//Operaio.lavoro = "manovale";

console.log(Operaio);
console.log(isEmpty(Operaio));
