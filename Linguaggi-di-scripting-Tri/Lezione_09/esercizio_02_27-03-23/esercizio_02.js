var form = document.getElementById("formContatto");
let s = function gestisciForm(e){
    form.removeEventListener("submit", s , true)
    
    let target = e.target;
    console.log("pippo"+target);
    e.preventDefault();

}
form.addEventListener("submit", s, true );