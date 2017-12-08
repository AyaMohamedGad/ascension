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

function enroll_book(locale) {
        $('.flipbook2').turn({
            // Height
            height: 500,
            // Elevation
            elevation: 50,
            // Enable gradients
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
        enroll_access = false;
    }

    function prepare_book(locale) {
        $('.flipbook3').turn({
            // Height
            height: 500,
            // Elevation
            elevation: 50,
            // Enable gradients
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
        prepare_access = false;
    }

    function schedule_book(locale) {
        $('.flipbook4').turn({
            // Height
            height: 500,
            // Elevation
            elevation: 50,
            // Enable gradients
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
        schedule_access = false;
    }


    function exam_book(locale) {
        $('.flipbook5').turn({
            // Height
            height: 500,
            // Elevation
            elevation: 50,
            // Enable gradients
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
        exam_access = false;
    }

    function pass_book(locale) {
        $('.flipbook6').turn({
            // Height
            height: 500,
            // Elevation
            elevation: 50,
            // Enable gradients
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
        pass_access = false;
    }


if(locale == 'en'){
    initiate('ltr');
}
else{
    initiate('rtl');
}


//enroll click tab
$('.enroll_tab a').click(function () {
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


$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
  var target = $(e.target).attr("href") // activated tab
  var selected = 'a[href=' + target + ']' + ':eq(1)';
  // console.log($(selected)[1].parentElement);
  $('.nav-tabs-left .active').removeClass('active');
  $(selected).parent().addClass('active');
});