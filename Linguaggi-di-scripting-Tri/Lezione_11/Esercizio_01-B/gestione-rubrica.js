const modificaContattoModal = new bootstrap.Modal('#modificaContattoModal', {});
const aggiungiContattoModal = new bootstrap.Modal('#aggiungiContattoModal', {});

$(document).ready(
    function () {
        if (rubrica !== null && rubrica !== undefined) {
            //Tolgo lo spinner
            $("#loader").hide();
            stampaContatti();

            $("button.salva-contatto").on("click", function () {
                //validazione dei campi
                const nome = $("#mod-nome").val();
                const cognome = $("#mod-cognome").val();
                const telefono = $("#mod-numero").val();
                const id = $("#mod-id-contatto").val();
                //creiamo un oggetto contatto da passare al nostro serviceManager Rubrica
                let contatto = new Contatto(nome, cognome, telefono);
                if (rubrica !== null && rubrica !== undefined && id !== undefined) {
                    rubrica.modificaContatto(id, contatto);
                    stampaContatti();
                    modificaContattoModal.hide();
                }
            });


            $("button.crea-contatto").on("click", function () {
                const nome = $("#nome").val();
                const cognome = $("#cognome").val();
                const telefono = $("#numero").val();
                //creiamo un oggetto contatto da passare al nostro serviceManager Rubrica
                let contatto = new Contatto(nome, cognome, telefono);
                if (rubrica !== null && rubrica !== undefined) {
                    rubrica.aggiungiContatto(contatto);
                    stampaContatti();
                    aggiungiContattoModal.hide();
                }
            });


            $("#aggiungi-contatto").on("click", function () {
                $("#nome").val("");
                $("#cognome").val("");
                $("#numero").val("");
                aggiungiContattoModal.show();
            });


            $("#ricerca").on("keyup", function () {
                let valore = $(this).val();
                if (valore.length <= 3) {
                    $("#loader").show();
                    $("#rubrica-row").hide();
                } else {
                    $("#loader").hide();
                    const lista = rubrica.ricercaContatto(valore);
                    stampaContatti(lista);
                    $("#rubrica-row").show();
                }
            });

            $("button.cerca").on("click", function () {
                let valore = $("#ricerca").val();
                const lista = rubrica.ricercaContatto(valore);
                stampaContatti(lista);
                $("#loader").hide();
                $("#rubrica-row").show();
            });
        }
    }
);


function stampaContatti(listaContatti) {
    if (listaContatti === undefined) {
        listaContatti = rubrica.stampaContatti("az");
    }
    let divRoot = $("#rubrica-row");
    divRoot.html("");
    let divRighe = [];
    for (let index = 0; index < listaContatti.length; index++) {
        const contatto = listaContatti[index];
        let divRiga = creaDivRighe(index);
        divRoot.append(divRiga);
        divRiga.appendChild(creaDivColonne(index, "col-1"));
        divRiga.appendChild(creaDivColonne(contatto.nome, "col-3"));
        divRiga.appendChild(creaDivColonne(contatto.cognome, "col-3"));
        divRiga.appendChild(creaDivColonne(contatto.telefono, "col-3"));
        let divActions = creaDivColonne(creaBtnAzione(index, "Cancella"), "col-2");
        divActions.appendChild(creaBtnAzione(index, "Modifica", contatto));
        divRiga.appendChild(divActions);
        divRighe.push(divRiga);

    }
    divRoot.append(divRighe);

    $("button.cancella").on("click", function (event) {
        let id = $(this).attr("data-id");
        if (rubrica !== null && rubrica !== undefined && id !== undefined) {
            rubrica.eliminaContatto(id);
            stampaContatti();
        }
    });

    $("button.modifica").on("click", function (event) {
        let id = $(this).attr("data-id");
        const contatto = $(this).attr("data-model");
        let contattoobj = JSON.parse(contatto);
        //console.dir(contattoobj);
        if (rubrica !== null && rubrica !== undefined && id !== undefined) {
            //prepolare i campi del nostro contatto sul form
            $("#mod-nome").val(contattoobj._nome);
            $("#mod-cognome").val(contattoobj._cognome);
            $("#mod-numero").val(contattoobj._telefono);
            $("#mod-id-contatto").val(id);
            modificaContattoModal.show();
        }
    });





}

function creaDivColonne(valore, classeCss) {
    let divCol = document.createElement("div");
    divCol.className = classeCss;
    if (valore instanceof HTMLElement) {
        divCol.appendChild(valore);
    } else {
        divCol.innerHTML = valore;
    }
    return divCol;
}

function creaBtnAzione(id, azione, model) {

    let btn = document.createElement("button");
    //vado ad inserire un attributo con l'id del elemento della riga in modo da richiamarlo successivamente
    btn.setAttribute("data-id", id);
    if (model !== null && model !== undefined) {
        btn.setAttribute("data-model", JSON.stringify(model));
    }
    btn.className = "btn btn-block btn-primary " + azione.toLowerCase();
    btn.innerHTML = azione;
    return btn;
}

function creaDivRighe(indice) {
    let divRow = document.createElement("div");
    divRow.setAttribute("data-id", indice);

    if (indice % 2 === 0) {
        divRow.className = "row";
    } else {
        divRow.className = "row bg-light";
    }

    return divRow;
}