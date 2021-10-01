import {Label_change} from "./Label_change.js";
import {random_color} from "./function.js";
//let h1 = document.querySelector("h1");

let section_array = document.querySelectorAll('.section_select');
/*
* mise en place du rabattement des sections
*/
if (section_array){
    for (let i = 0 ; i < section_array.length; i++){
        //console.log(i);
        //console.log(section_array[i]);
        section_array[i].addEventListener('click',section);
        let link = document.querySelector("a");
        if (link){
            link.addEventListener('click', linkF, true);
        }

        function linkF(e) {
            e.stopPropagation()
        }

        function section() {
            if (this.children[1].style.display === "none"){
                this.children[0].children[0].innerHTML = "&#8594;";
                this.children[1].style.display = "";
            }
            else {
                this.children[0].children[0].innerHTML = "&#8595;";
                this.children[1].style.display = "none";
            }
        }
    }
}

/*
* balise label
*/

let label_array = document.querySelectorAll("label");
let timer = 0;

if (label_array){
    for (let i = 0; i < label_array.length; i++) {
        let text = label_array[i].innerHTML;
        label_array[i].innerHTML = "";
        for (let j = 0; j < text.length; j++) {
            let span = document.createElement('span');
            span.innerHTML = text[j];
            span.id = "sp" + j;
            label_array[i].append(span);
        }
    }

    for (let i = 0; i < label_array.length; i++) {
        let label = label_array[i];
        label.addEventListener('mouseover', label_over);
        //label.addEventListener('mouseout', label_out);

        function label_over() {

            over();
        }

        /*function label_out() {
            clearInterval(this);
        }*/

        function over(it = 0) {
            if (it === 0) {
                label_mod(label.children.length - 1, it);

                timer = setInterval(over, 1000, 1);
            } else if (it < label.children.length - 1) {

                label_mod(it - 1, it);
                timer = setInterval(over, 1000, it + 1);
            } else {

                label_mod(label.children.length - 2, label.children.length - 1);
                timer = setInterval(over, 1000);
            }
        }

        function label_mod(sp_nb, sp_nb2) {
            label.children[sp_nb].classList = "";
            label.children[sp_nb].style.color = "";
            label.children[sp_nb2].className = "sp";
            label.children[sp_nb2].style.color = "#" + random_color();
        }
    }
    let section_formation = document.querySelector("#formation");

    let dl_formation = section_formation.children[1];
    /*fetch("../json/data.json")
        .then(resp => resp.json())
        .then(json => {
            for(let formation of json["formation"]){
                for (let i = 0 ; i < 4 ; i++) {
                    let dt = document.createElement("dt");
                    dt.innerHTML = formation[i];
                    let dd = document.createElement("dd");
                    i++;
                    dd.innerHTML = formation[i];
                    dl_formation.appendChild(dt);
                    dl_formation.appendChild(dd);
                }

            }
            /!*for(let coord of json["coord"]){
                let li = document.createElement("li");
                li.innerHTML = coord;
                coord_elem.appendChild(li);
            }*!/
        });*/
}