// Cambia il titolo della finestra del browser
window.document.title = "Nuovo Titolo";

// Mostra un popup di avviso
window.alert("Questo è un messaggio di avviso!");

// Chiede all'utente di inserire dati
let nome = window.prompt("Inserisci il tuo nome:", "Nome di default");

// Conferma una scelta dell'utente
let conferma = window.confirm("Sei sicuro di voler procedere?");

// Esempio di utilizzo dell'oggetto Window
window.alert("Ciao, sono una finestra di avviso!");

// Esempio di utilizzo dell'oggetto Navigator
console.log("Nome del browser:", navigator.appName);
console.log("User-Agent:", navigator.userAgent);

// Esempio di utilizzo dell'oggetto Location
console.log("URL corrente:", location.href);

// Esempio di utilizzo dell'oggetto History
console.log("Numero di pagine nella cronologia:", history.length);

// Esempio di utilizzo dell'oggetto Screen
console.log("Larghezza dello schermo:", screen.width);
console.log("Altezza dello schermo:", screen.height);
