let h1 = document.querySelector("h1");

let section_array = document.querySelectorAll('.section_select');
/*
* mise en place du rabattement des sections
*/
if (section_array){
    for (let i = 0 ; i < section_array.length; i++){
        //console.log(i);
        //console.log(section_array[i]);
        section_array[i].addEventListener('click',section);

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
