 function Rate(obj) {
     this.rating=document.querySelectorAll(obj.rating);


     for(var i=0; i<this.rating.length; i++){
         console.log(this)
         this.rating[i].onclick=_clicker
     }

     function _clicker() {
             if(this.classList.contains('noneactive')){
                 this.classList.remove('noneactive');
                 this.classList.add('active1');

             }
             else{
                 this.classList.add('noneactive');
                 this.classList.remove('active1');
             }
     }
 }