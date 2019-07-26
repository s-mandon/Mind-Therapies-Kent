document.getElementById('wrapper').onclick = function() {

    var className = ' ' + wrapper.className + ' ';

    this.className = ~className.indexOf(' active ') ?
                         className.replace(' active ', ' ') :
                         this.className + ' active';
};

document.getElementById('wrapper2').onclick = function() {

    var className = ' ' + wrapper2.className + ' ';

    this.className = ~className.indexOf(' active ') ?
                         className.replace(' active ', ' ') :
                         this.className + ' active';
}

document.getElementById('wrapper3').onclick = function() {

    var className = ' ' + wrapper3.className + ' ';

    this.className = ~className.indexOf(' active ') ?
                         className.replace(' active ', ' ') :
                         this.className + ' active';
}

document.getElementById('wrapper4').onclick = function() {

    var className = ' ' + wrapper4.className + ' ';

    this.className = ~className.indexOf(' active ') ?
                         className.replace(' active ', ' ') :
                         this.className + ' active';
}


