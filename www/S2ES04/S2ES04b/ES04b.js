let num = prompt("Inserisci un numero intero");
function inverti_cifre(num) {
    let string = " ";
    for(let i=num.length-1; i>=0; i--){
        string += num[i];
    }
    return parseInt(string);
}
console.log(inverti_cifre(num));