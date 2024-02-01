let M = prompt("Inserire un intero per il coefficente angolare:");
let Q = prompt("Inserire un intero per il punto di intersezione:");

const x = -1;
const X = 10;

let y1 = M*x+Q*1;
let y2 = M*X+Q*1;

console.log("L'ordinata, con ascissa "+ x +", è: "+ y1);
console.log("L'ordinata, con ascissa " + X + ", è: "+ y2);

let intersezioneY = Q;
let intersezioneX = -Q / M;

console.log("Punto di intersezione con l'asse y: "+ intersezioneY);
console.log("Punto di intersezione con l'asse y: "+ intersezioneX);
