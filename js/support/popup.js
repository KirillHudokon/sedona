function PopUp(obj) {
    this.btn=document.querySelector(obj.btn)
    this.popup=document.querySelector(obj.popup);
    var self=this;


    this.btn.addEventListener('click', _open);
   /* this.btn.addEventListener('click',styles);*/

    function _open() {

        if(self.popup.classList.contains('toblock')){
            self.popup.classList.remove('toblock');
            this.classList.remove('style');
            this.innerHTML='Найти гостиницу';

        }
        else{
            self.popup.classList.add('toblock');
            this.classList.add('style');
            this.innerHTML='Поиск гостиниц в Седоне'
        }
    }
    /*function styles() {
        this.style.background='brown';
        this.innerHTML='Поиск гостиниц в Седоне'
    }*/

}