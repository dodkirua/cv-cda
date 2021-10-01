import {random_color} from './function.js';

export class Label_change {
    constructor (span, label) {
        this.span_nb = 0;
        this.span_max =
        this.sp = span;
        this.lab = label;
    }

    change(){

    }


}

function label_over() {

    over();
}

function label_out(){
    clearInterval(span);

}

function label_reset(sp_nb){
    label.children[sp_nb].classList = "";
    label.children[sp_nb].style.color = "";
}

function label_mod(sp_nb) {
    label.children[sp_nb].className = "sp";
    label.children[sp_nb].style.color = "#" + random_color();
}