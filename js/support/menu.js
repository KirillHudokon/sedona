function Menu(obj) {
    this.menu=document.querySelector(obj.menu);
    this.btn=document.querySelector(obj.btn);
    var self=this;

    this.btn.addEventListener('click', _open);

    function _open() {
        if(self.menu.classList.contains('toflex')){
            self.menu.classList.remove('toflex');

        }
        else{
            self.menu.classList.add('toflex');

        }
    }
}