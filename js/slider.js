var slideNow = 1;
var slideCount = $('#slidewrapper').children().length;//8
var translateWidth = 0;
var equally = 1;


// if($('#viewport').width() >= 260 && $('#viewport').width() <= 320 ){
//     slideNow = 1;
//     equally = 1;
//     slide = 1;
//
// }else{
//     slideNow = 2;
//     equally = 2;
//     slide = 5;
// };


function prevSlide() {
    if (slideNow === equally || slideNow <= 0 || slideNow > slideCount) {
        translateWidth = -$('#viewport').width() * (slideCount - 1);

        $('#slidewrapper').css({
            'transform': 'translate(' + translateWidth + 'px, 0)',
            '-webkit-transform': 'translate(' + translateWidth + 'px, 0)',
            '-ms-transform': 'translate(' + translateWidth + 'px, 0)'
        });
        slideNow = slideCount;
    } else {
        translateWidth = translateWidth - -$('#viewport').width();
        if(translateWidth >=0){
            translateWidth = 0;
        }
        $('#slidewrapper').css({
            'transform': 'translate(' + translateWidth + 'px, 0)',
            '-webkit-transform': 'translate(' + translateWidth + 'px, 0)',
            '-ms-transform': 'translate(' + translateWidth + 'px, 0)'
        });
        slideNow = slideNow - equally ;
    }
}
function nextSlide() {

    if (slideNow === slideCount || slideNow <= 0 || slideNow > slideCount) {
        $('#slidewrapper').css('transform', 'translate(0, 0)');
        translateWidth = 0;
        slideNow = equally;
    } else {
        translateWidth = translateWidth + -$('#viewport').width() ;
        $('#slidewrapper').css({
            'transform': 'translate(' + translateWidth + 'px, 0)',
            '-webkit-transform': 'translate(' + translateWidth + 'px, 0)',
            '-ms-transform': 'translate(' + translateWidth + 'px, 0)',
        });
        slideNow = slideNow + equally;
    }
}
$('#next-btn').click(function() {
    nextSlide();
});

$('#prev-btn').click(function() {
    prevSlide();
});