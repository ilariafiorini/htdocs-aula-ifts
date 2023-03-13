var Calciatore = {};
Calciatore.nome = "Lorenzo";
Calciatore.cognome = "Pellegrini";

console.log(Calciatore);

Calciatore.nome = "Giuseppe";

console.log(Calciatore);

delete Calciatore.cognome;

console.log(Calciatore);

console.log(typeof(Calciatore));
