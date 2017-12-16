var enroll_access = true,
    prepare_access = true,
    schedule_access = true,
    exam_access = true,
    pass_access = true;

var locale = $('#locale').data('attr');


var initiate = function(locale){
    $('.flipbook').turn({
        // Height
        height: 500,
        // Elevation
        elevation: 50,
        page: 2,
        direction: locale,
        when: {
            start: function (event, pageObject, corner) {
                if (pageObject.next == 1)
                    event.preventDefault();
            },
            turning: function (event, page, view) {
                if (page == 1)
                    event.preventDefault();
            }
        }
    });
} 


if(locale == 'en'){
    initiate('ltr');
}
else{
    initiate('rtl');
}

//qualify click tab
$('.qualify_tab a').click(function () {
    if($(".flipbook").turn("page") == 3 || $(".flipbook").turn("page") == 4)
        return;
    else if($(".flipbook").turn("page") < 3)
        goto_qualify();
    else
        backto_qualify();
});

var goto_qualify = function(){
    $(".flipbook").turn("next");
    if($(".flipbook").turn("page") == 2 || $(".flipbook").turn("page")  == 3){
        return;   
    }
    else
        goto_qualify();
}

var backto_qualify = function(){
    $(".flipbook").turn("previous");
    if($(".flipbook").turn("page") == 2 || $(".flipbook").turn("page")  == 3){
        return;   
    }
    else
        backto_qualify();
}


//enroll click tab
$('.enroll_tab a').click(function () {
    if($(".flipbook").turn("page") == 4 || $(".flipbook").turn("page") == 5)
        return;
    else if($(".flipbook").turn("page") < 5)
        goto_enroll();
    else
        backto_enroll();
});

var goto_enroll = function(){
    $(".flipbook").turn("next");
    if($(".flipbook").turn("page") == 4 || $(".flipbook").turn("page")  == 5){
        return;   
    }
    else
        goto_enroll();
}

var backto_enroll = function(){
    $(".flipbook").turn("previous");
    if($(".flipbook").turn("page") == 4 || $(".flipbook").turn("page")  == 5){
        return;   
    }
    else
        backto_enroll();
}

$('.ch-img-2 a').click(function () {
    if (enroll_access) {
        setTimeout(function () {
            if(locale == 'en'){
                    enroll_book('ltr');
                }
                else{
                    enroll_book('rtl');
                }
        }, 5);
    }
});

//prepare click tab
$('.prepare_tab a').click(function () {
    if($(".flipbook").turn("page") == 8 || $(".flipbook").turn("page") == 9)
        return;
    else if($(".flipbook").turn("page") < 9)
        goto_prepare();
    else
        backto_prepare();
});

var goto_prepare = function(){
    $(".flipbook").turn("next");
    if($(".flipbook").turn("page") == 8 || $(".flipbook").turn("page")  == 9){
        return;   
    }
    else
        goto_prepare();
}

var backto_prepare = function(){
    $(".flipbook").turn("previous");
    if($(".flipbook").turn("page") == 8 || $(".flipbook").turn("page")  == 9){
        return;   
    }
    else
        backto_prepare();
}

$('.ch-img-3 a').click(function () {
    if (prepare_access) {
        setTimeout(function () {
            if(locale == 'en'){
                    prepare_book('ltr');
                }
                else{
                    prepare_book('rtl');
                }
        }, 5);
    }
});

//schedule click tab
$('.schedule_tab a').click(function () {
    if($(".flipbook").turn("page") == 10 || $(".flipbook").turn("page") == 11)
        return;
    else if($(".flipbook").turn("page") < 11)
        goto_schedule();
    else
        backto_schedule();
});

var goto_schedule = function(){
    $(".flipbook").turn("next");
    if($(".flipbook").turn("page") == 10 || $(".flipbook").turn("page")  == 11){
        return;   
    }
    else
        goto_schedule();
}

var backto_schedule = function(){
    $(".flipbook").turn("previous");
    if($(".flipbook").turn("page") == 10 || $(".flipbook").turn("page")  == 11){
        return;   
    }
    else
        backto_schedule();
}

$('.ch-img-4 a').click(function () {
    if (schedule_access) {
        setTimeout(function () {
            if(locale == 'en'){
                    schedule_book('ltr');
                }
                else{
                    schedule_book('rtl');
                }
        }, 5);
    }
});

//exam click tab
$('.exam_tab a').click(function () {
    if($(".flipbook").turn("page") == 14 || $(".flipbook").turn("page") == 15)
        return;
    else if($(".flipbook").turn("page") < 15)
        goto_exam();
    else
        backto_exam();
});

var goto_exam = function(){
    $(".flipbook").turn("next");
    if($(".flipbook").turn("page") == 14 || $(".flipbook").turn("page")  == 15){
        return;   
    }
    else
        goto_exam();
}

var backto_exam = function(){
    $(".flipbook").turn("previous");
    if($(".flipbook").turn("page") == 14 || $(".flipbook").turn("page")  == 15){
        return;   
    }
    else
        backto_exam();
}

$('.ch-img-5 a').click(function () {
    if (exam_access) {
        setTimeout(function () {
            if(locale == 'en'){
                    exam_book('ltr');
                }
                else{
                    exam_book('rtl');
                }
        }, 5);
    }
});

//pass click tab
$('.pass_tab a').click(function () {
    if($(".flipbook").turn("page") == 16 || $(".flipbook").turn("page") == 17)
        return;
    else if($(".flipbook").turn("page") < 17)
        goto_pass();
    else
        backto_pass();
});

var goto_pass = function(){
    $(".flipbook").turn("next");
    if($(".flipbook").turn("page") == 16 || $(".flipbook").turn("page")  == 17){
        return;   
    }
    else
        goto_pass();
}

var backto_pass = function(){
    $(".flipbook").turn("previous");
    if($(".flipbook").turn("page") == 16 || $(".flipbook").turn("page")  == 17){
        return;   
    }
    else
        backto_pass();
}

$('.ch-img-6 a').click(function () {
    if (pass_access) {
        setTimeout(function () {
            if(locale == 'en'){
                    pass_book('ltr');
                }
                else{
                    pass_book('rtl');
                }
        }, 5);
    }
});

var flipbookpage = function(page){
    alert(page);
}


$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
  var target = $(e.target).attr("href") // activated tab
  var selected = 'a[href=' + target + ']' + ':eq(1)';
  // console.log($(selected)[1].parentElement);
  $('.nav-tabs-left .active').removeClass('active');
  $(selected).parent().addClass('active');
});