let slide = 'slide1';
let speed = 400;

(function($){
    $(function(){
        // DOM ready
        $('.slideShow-item').on('mouseenter', function (e) {
            slide = e.currentTarget.id;
            setTimeout(() => {
                slideAnimationIn();
            }, speed);
        });
        $(window).on('blur', function(){
            slide = 'slide0';
            slideAnimationOut();
        });
        // $('.slideShow-item').on('mouseleave', function (e) {
        //     slideAnimation(e.currentTarget.id);
        // });
    });

    // Run immediately
    // slideAnimationIn('slide1');
})(jQuery);

function slideAnimationIn(){
    switch (slide) {
        case 'slide1':
            $('#slide1').animate({width: '50.0000%', left: '0.0000%',  'z-index': 1}, speed);
            $('#slide2').animate({width: '33.3333%', left: '50.0000%', 'z-index': 0}, speed);
            $('#slide3').animate({width: '33.3333%', left: '83.3333%', 'z-index': 0}, speed);
            break;
        case 'slide2':
            $('#slide1').animate({width: '33.3333%', left: '-8.3333%', 'z-index': 0}, speed);
            $('#slide2').animate({width: '50.0000%', left: '25.0000%', 'z-index': 1}, speed);
            $('#slide3').animate({width: '33.3333%', left: '75.0000%', 'z-index': 0}, speed);
            break;
        case 'slide3':
            $('#slide1').animate({width: '33.3333%', left: '-16.6666%', 'z-index': 0}, speed);
            $('#slide2').animate({width: '33.3333%', left: '16.6666%',  'z-index': 0}, speed);
            $('#slide3').animate({width: '50.0000%', left: '50.0000%',  'z-index': 1}, speed);
            break;
    }
}

function slideAnimationOut(){
    setTimeout(() => {
        $('#slide1').animate({width: '33.3333%', left: '0.0000%',  'z-index': 0}, speed);
        $('#slide2').animate({width: '33.3333%', left: '33.3333%', 'z-index': 0}, speed);
        $('#slide3').animate({width: '33.3333%', left: '66.6666%', 'z-index': 0}, speed);
    }, 3000);
}