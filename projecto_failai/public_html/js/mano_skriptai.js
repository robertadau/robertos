let x = 5;
let y = 6;

if (x == 5) {
    let msg = 'Pirma Salyga atitinka';
    window.alert('Salyga atitinka');
    console.log(msg);
}

if (x === 5 || y === 6) {
    let msg = 'Antra Salyga atitinka';
    window.alert(msg);
    console.log(msg);
}

if (x !== 4 && y !== 6) {
    let msg = 'Trecia Salyga atitinka';
    window.alert(msg);
    console.log(msg);
} else if (x === '5' || y === 'Jonas') {
    let msg = 'Bplanas treciai salygai';
    window.alert(msg);
    console.log(msg);
} else {
    let msg = 'Trecios Salygos atsarginis planas';
    window.alert(msg);
    console.log(msg);
}






