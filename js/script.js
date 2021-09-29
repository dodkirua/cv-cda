let h1 = document.querySelector("h1");

let section_array = document.getElementsByClassName('section_select');

//console.log(section_array.length);
//console.log(h1);
if (section_array){
    for (let i = 0 ; i < section_array.length; i++){
        //console.log(i);
        //console.log(section_array[i]);
        section_array[i].addEventListener('click',section);

        function section() {
            console.log(this.children[0].children[0]);
        }
    }
}
