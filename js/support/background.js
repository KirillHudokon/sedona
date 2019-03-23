function Background(obj) {
    this.images=document.querySelectorAll(obj.images);
    var self=this;

    for(var i=0; i<this.images.length; i++){
        self.images[i].onclick=_swap;
    }


    function _swap() {
        if(this.classList.contains('block')){
            this.classList.remove('block')
        }
        else {
            this.classList.add('block')
        }
    }

}