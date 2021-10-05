

$(document).ready(function() {
    $("h1")
        .animate({fontSize : "2rem"},2000)
        .animate({fontSize : "1.5rem"},2000)
        .queue(function () {
            $('h2')
                .animate({marginLeft: '20rem', width: "50%"}, 1500)
                .animate({marginLeft: '1rem', width: "80%"}, 1500);
            $('h3').animate({fontSize: '1.5rem'},1000);
        })
    }
);

/**
 * section
 */
$(document).ready(function(){
    $('.section_select').click(function(){
        if ($(this).children('div').css('display') === 'block'){
            $(this).children('h2').children('span').html('&#8595; ');
            $(this).children('div').hide();
        }
        else {
            $(this).children('h2').children('span').html('&#8594; ');
            $(this).children('div').show()
        }
    });
    $('a').click(function (e){
        e.stopPropagation();
    });
});
/*

/!**
 * label
 *!/
$(document).ready(function (){
    let message_tmp;
    $('label').mouseover(function (){
        //console.log($(this).html());


    });
});*/
