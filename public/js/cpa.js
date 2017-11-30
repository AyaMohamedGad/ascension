var enroll_access = true,
    prepare_access = true,
    schedule_access = true,
    exam_access = true,
    pass_access = true;

$('.flipbook').turn({
    // Height
    height: 500,
    // Elevation
    elevation: 50,
    page: 2,
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

//enroll click tab
$('.enroll_tab a').click(function () {
    if (enroll_access) {
        setTimeout(function () {
            enroll_book();
        }, 5);
    }
});

$('.ch-img-2 a').click(function () {
    if (enroll_access) {
        setTimeout(function () {
            enroll_book();
        }, 5);
    }
});

//prepare click tab
$('.prepare_tab a').click(function () {
    if (prepare_access) {
        setTimeout(function () {
            prepare_book();
        }, 5);
    }
});

$('.ch-img-3 a').click(function () {
    if (prepare_access) {
        setTimeout(function () {
            prepare_book();
        }, 5);
    }
});

//schedule click tab
$('.schedule_tab a').click(function () {
    if (schedule_access) {
        setTimeout(function () {
            schedule_book();
        }, 5);
    }
});

$('.ch-img-4 a').click(function () {
    if (schedule_access) {
        setTimeout(function () {
            schedule_book();
        }, 5);
    }
});

//exam click tab
$('.exam_tab a').click(function () {
    if (exam_access) {
        setTimeout(function () {
            exam_book();
        }, 5);
    }
});

$('.ch-img-5 a').click(function () {
    if (exam_access) {
        setTimeout(function () {
            exam_book();
        }, 5);
    }
});

//pass click tab
$('.pass_tab a').click(function () {
    if (pass_access) {
        setTimeout(function () {
            pass_book();
        }, 5);
    }
});

$('.ch-img-6 a').click(function () {
    if (pass_access) {
        setTimeout(function () {
            pass_book();
        }, 5);
    }
});

function enroll_book() {
    $('.flipbook2').turn({
        // Height
        height: 500,
        // Elevation
        elevation: 50,
        // Enable gradients
        page: 2,
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

function prepare_book() {
    $('.flipbook3').turn({
        // Height
        height: 500,
        // Elevation
        elevation: 50,
        // Enable gradients
        page: 2,
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

function schedule_book() {
    $('.flipbook4').turn({
        // Height
        height: 500,
        // Elevation
        elevation: 50,
        // Enable gradients
        page: 2,
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


function exam_book() {
    $('.flipbook5').turn({
        // Height
        height: 500,
        // Elevation
        elevation: 50,
        // Enable gradients
        page: 2,
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

function pass_book() {
    $('.flipbook6').turn({
        // Height
        height: 500,
        // Elevation
        elevation: 50,
        // Enable gradients
        page: 2,
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

$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
  var target = $(e.target).attr("href") // activated tab
  var selected = 'a[href=' + target + ']' + ':eq(1)';
  // console.log($(selected)[1].parentElement);
  $('.nav-tabs-left .active').removeClass('active');
  $(selected).parent().addClass('active');
});