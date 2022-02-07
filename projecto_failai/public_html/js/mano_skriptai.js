let a = -5;
let b = 0;
let c = -4;
let d = 4;
let x = '???';
let y = '???';

if (a > b || d < c || d < a || c > b) {
    window.alert('Sankirta negalima');
} else {
    if (c <= a && a <= d) {
        x = a;
    }
    if (a <= c && c <= d) {
        x = c;
    }
    if (a <= d && d <= b) {
        y = d;
    }
    if (c <= b && b <= d) {
        y = b;
    }

    let atsakymas = x + ' ir ' + y

    document.getElementById('ats').innerHTML = 'Rasta sankirta: ' + x + 'ir' + y;
    document.getElementById('ats').innerHTML = 'Rasta sankirta: ' + atsakymas;
}




