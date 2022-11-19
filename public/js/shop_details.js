
var g_besar = document.getElementById('MainImg');
var g_kecil = document.getElementsByClassName('small-img');

g_kecil[0].onclick = function(){
    g_besar.src = g_kecil[0].src;
}
g_kecil[1].onclick = function(){
    g_besar.src = g_kecil[1].src;
}
g_kecil[2].onclick = function(){
    g_besar.src = g_kecil[2].src;
}
g_kecil[3].onclick = function(){
    g_besar.src = g_kecil[4].src;
}