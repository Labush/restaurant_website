const cart = document.getElementById('cart')
const zero = document.getElementById('delete');
/****** CREATION DUNE DIV QUI APPARAIT AU CLICK SUR CART / AFFICHAGE DU SHOPPING ******/



/******* */
let total = 0;
/***** */
const click_1 = document.getElementById('1');
click_1.addEventListener('click', () => {
    zero.style.visibility = 'visible';
    const prix_1 = document.getElementById('prix_1');
    //on ajoute une valeur au premier menu, qui correspond à son prix
    prix_1.value = 3.50;
    cart.innerHTML += 'Menu 1 - ' + prix_1.value + '€ <br>';
    total += prix_1.value;
    /*** affichage du total */
    document.getElementById('total').innerHTML = ' : ' +  total + '€';
})

const click_2 = document.getElementById('2');
click_2.addEventListener('click', () => {
    zero.style.visibility = 'visible';
    const prix_2 = document.getElementById('prix_2');
    //on ajoute une valeur au premier menu, qui correspond à son prix
    prix_2.value = 7.50;
    cart.innerHTML += 'Menu 2 - ' + prix_2.value + '€ <br>';
    total += prix_2.value;
    /*** affichage du total */
    document.getElementById('total').innerHTML = ' : ' +   total + '€';
})

const click_3 = document.getElementById('3');
click_3.addEventListener('click', () => {
    zero.style.visibility = 'visible';
    const prix_3 = document.getElementById('prix_3');
    //on ajoute une valeur au premier menu, qui correspond à son prix
    prix_3.value = 13;
    cart.innerHTML += 'Menu 3 - ' + prix_3.value + '€ <br>';
    total += prix_3.value;
    /*** affichage du total */
    document.getElementById('total').innerHTML = ' : ' +   total + '€';
})

const click_4 = document.getElementById('4');
click_4.addEventListener('click', () => {
    zero.style.visibility = 'visible';
    const prix_1 = document.getElementById('prix_4');
    //on ajoute une valeur au premier menu, qui correspond à son prix
    prix_4.value = 4.50;
    cart.innerHTML += 'Menu 4 - ' + prix_4.value + '€ <br>';
    total += prix_4.value;
    /*** affichage du total */
    document.getElementById('total').innerHTML = ' : ' +   total + '€';
})

const click_5 = document.getElementById('5');
click_5.addEventListener('click', () => {
    zero.style.visibility = 'visible';
    const prix_5 = document.getElementById('prix_5');
    //on ajoute une valeur au premier menu, qui correspond à son prix
    prix_5.value = 7.90;
    cart.innerHTML += 'Menu 5 - ' + prix_5.value + '€ <br>';
    total += prix_5.value;
    /*** affichage du total */
    document.getElementById('total').innerHTML = ' : ' +   total + '€';
})

const click_6 = document.getElementById('6');
click_6.addEventListener('click', () => {
    zero.style.visibility = 'visible';
    const prix_6 = document.getElementById('prix_6');
    //on ajoute une valeur au premier menu, qui correspond à son prix
    prix_6.value = 12;
    cart.innerHTML += 'Menu 6 - ' + prix_6.value + '€ <br>';
    total += prix_6.value;
    /*** affichage du total */
    document.getElementById('total').innerHTML = ' : ' +   total + '€';
})

/*** remettre total à zero ***/
zero.style.cursor = 'pointer';
zero.addEventListener('click', () => {
    if (total > 1) {
        document.getElementById('total').innerHTML = ' : ' + 0 + '€';
        total = 0;
        zero.style.visibility = 'hidden';
        cart.innerHTML = "";
    }
})

