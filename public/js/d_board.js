// alert("hey");

const menu = document.getElementById('menu-label');
const focus = document.getElementById('focus');
const sidebar = document.getElementsByClassName('sidebar')[0];
const logo = document.getElementsByClassName('logo')[0];

menu.addEventListener('click', function(){
    sidebar.classList.toggle('hide');
    // logo.src = locil.src;
    logo.classList.toggle('logo-kecil');
})

// function triggerBtnClick(){
//     focus.click();
// }

// menu.onclick = function(){
//     logo.src = 'img/Frame 90.png';
// }

