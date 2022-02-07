
for (let i = 0; i < 3; ++i) {
    masyvas.push(i+'_elem');
}



for (let h = 0; h < masyvas.length; ++h) {
    console.log('ELEM: ' + masyvas[h]);
}



let masyvas = ['a', 'b', 5, 8, 'Jonas', true];

for (let i = 0; i < 6; ++i) {
    let elementas = masyvas[i];
    console.log('FOR ciklas: ' + elementas);
    suma += elementas + '-';
}



let j = 10;
while(j >= 1) {
    console.log('WHILE ciklas ' + j);
    j--;
}



let j = masyvas.length - 1;
while(j >= 0) {
    console.log('WHILE ciklas ' + j + '=' + elementas);
    j--;
}


let z = 0;
do {
   let elementas = masyvas[z];
    console.log('WHILE ciklas ' + z + '=' + elementas);
    z++;
} while (z <= masyvas.length - 1);



let masyvas = ['a', 'b', 5, 8, 'Jonas', true];

masyvas[0] = 'Tautvydas';
masyvas[3] = 'Dulskis';

arr.push('kestas');
arr[0] = 'Petras';

for (let i = 0; i < 3; ++i) {
    masyvas.unshift(items: i+'_elem');
}

for (let i = 0; i < 3; ++i) {
    masyvas.push(i+'_elem');
}


let asmuo = {};

asmuo.akiuSpalva = 'melyna';
asmuo.amzius = 35;
asmuo.ugis = 180;

let akius = asmuo.akiuSpalva;

console.log(asmuo);