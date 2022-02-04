let a = -5;
let b = 0;
let c = -4;
let d = 4;
let x = -4;
let y = 0;

if (a === -5 || d === 4) {
    let msg = 'Intervalu sankirta egzistuoja';
    window.alert('Pirmas sankirtos rezis');
    console.log(msg);
}

if (a === -5 || b === 0) {
    let msg = 'Antras sankirtos rezis';
    window.alert(msg);
    console.log(msg);
}

if (a === -5 || c === -4) {
    let msg = 'Neegzistuoja sankirtos rezis';
    window.alert(msg);
    console.log(msg);

}

if (c === -4 || b === 0 ) {
    let msg = 'Trecias sankirtos rezis';
    window.alert(msg);
    console.log(msg);
}

if (c === -4 || d === 4) {
    let msg = 'Ketvirtas sankirtos rezis';
    window.alert(msg);
    console.log(msg);
}

if (b === 0 || d === 4) {
    let msg = 'Neegzistuoja sankirtos rezis';
    window.alert(msg);
    console.log(msg);
    }
if (x === -4 || y === 0) {
    let msg = 'Penktas sankirtos rezis';
    window.alert(msg);
    console.log(msg);
}

if (x === -4 || y === 0) {
    let msg = 'Penktas sankirtos rezis';
    window.alert(msg);
    console.log(msg);
}
else if (x === '-4' || y === '0') {
    let msg = 'rezis';
    window.alert(msg);
    console.log(msg);
} else {
    let msg = 'egzistuoja rezis';
    window.alert(msg);
    console.log(msg);
}






