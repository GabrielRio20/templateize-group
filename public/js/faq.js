var acc = document.getElementsByClassName('secondary-container');
var i;
var len = acc.length;
for(i = 0; i < len; i++){
    acc[i].addEventListener('click', function () {
        this.classList.toggle('active');
        var answer = this.nextElementSibling;
        if(answer.style.maxHeigth) {
            answer.style.maxHeigth = null;
        } else {
            answer.style.maxHeigth = answer.scrollHeight + "px";
        }
    });
}