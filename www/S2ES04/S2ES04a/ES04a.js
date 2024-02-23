let num1 = prompt("Inserisci il primo numero:");
let num2 = prompt("Inserisci il secondo numero:");
let operazione = prompt("Inserisci un'operazione matematica tra '+', '-', '*', '/', '**':");
const operazioni= {
	somma:(a, b) => {
		return `${a} + ${b} = ${a+b}`;
	},
	sottrazione:(a, b) => {
		return `${a} - ${b} = ${a-b}`
	},
	moltiplicazione:(a, b) => {
		return `${a} * ${b} = ${a*b}`
	},
	divisione:(a, b) => {
		if(b!=0) return `${a} / ${b} = ${a/b}`;
		return `Cannot Divide by Zero!!!`;
	},
    potenza:(a, b) => {
        return `${a} ** ${b} = ${a**b}`;
    }
}
if (!Number.isNaN(num1) && !Number.isNaN(num2)) {
    let risultato;
    switch (operazione) {
        case '+':
            risultato = operazioni.somma(num1,num2);
            break;
        case '-':
            risultato = operazioni.sottrazione(num1,num2);
            break;
        case '*':
            risultato = operazioni.moltiplicazione(num1,num2);
            break;
        case '/':
            risultato = operazioni.divisione(num1,num2);
            break;
        case '**':
            risultato = operazioni.potenza(num1,num2);
            break;
        default:
            console.log("Errore: Operazione non valida.");
            break;
    }
        console.log("Il risultato è: " + risultato);
} else {
    console.log("Errore: Inserire numeri validi.");
}