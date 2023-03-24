function calcolaOperazione(operatore) {
    let operatore1 = document.getElementById("operatore1"); //tag html input
    let operatore2 = document.getElementById("operatore2"); //tag html input

    let op = parseInt(operatore1.value); //converto la stringa in un intero
    let op2 = parseInt(operatore2.value);// converto la stringa in un intero

    let risultatoOperazione = null;
    switch (operatore) {
        case '+':
            risultatoOperazione = op + op2;
            break;
        case '-':
            risultatoOperazione = op - op2;
            break;
        case '*':
            risultatoOperazione = op * op2;
            break;
        case '/':
            risultatoOperazione = op / op2;
            break;
        default:
            break;
    }

    document.getElementById("risultato").innerHTML = risultatoOperazione;
}