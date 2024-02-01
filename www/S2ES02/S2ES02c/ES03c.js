let num1 = prompt("Inserisci il primo numero:");
let num2 = prompt("Inserisci il secondo numero:");
let operazione = prompt("Inserisci un'operazione matematica tra '+', '-', '*', '/', '**':");

if (!Number.isNaN(num1) && !Number.isNaN(num2)) {
    let risultato;
    switch (operazione) {
        case '+':
            risultato = num1 + num2;
            break;
        case '-':
            risultato = num1 - num2;
            break;
        case '*':
            risultato = num1 * num2;
            break;
        case '/':
            if (num2 !== 0) {
                risultato = num1 / num2;
            } else {
                console.log("Errore: Divisione per zero non consentita.");
                break;
            }
            break;
        case '**':
            risultato = Math.pow(num1, num2);
            break;
        default:
            console.log("Errore: Operazione non valida.");
            break;
    }
        console.log("Il risultato è: " + risultato);
} else {
    console.log("Errore: Inserire numeri validi.");
}
