var phone = document.getElementById('phone-tab')
var fashion = document.getElementById('fashion-tab')
var house = document.getElementById('housewares-tab')

fashion.onclick = function fa() {
    fashion.style.background = '#FFD744';
    house.style.background = '#EAEDF1';
    phone.style.background = '#EAEDF1';
}
house.onclick = function ho() {
    house.style.background = '#b4e4f2';
    fashion.style.background = '#EAEDF1';
    phone.style.background = '#EAEDF1'; 
}

phone.onclick = function ph() {
    phone.style.background = '#ED4E2E'
    house.style.background = '#EAEDF1';
    fashion.style.background = '#EAEDF1';
}
