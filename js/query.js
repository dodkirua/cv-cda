

$(document).ready(function() {
    $("h1")
        .animate({fontSize : "2rem"},5000)
        .animate({fontSize : "1.5rem"},5000)
        /*.queue(function () {
            $('h2')
                .animate({marginLeft: '20rem', width: "50%"}, 1500)
                .animate({marginLeft: '3rem', width: "80%"}, 1500)
        })*/
        .queue(function () {
            $('h3').hide()
            setTimeout(show,1000);

        })
    }
);




function show(){
    $('h3').show();
}