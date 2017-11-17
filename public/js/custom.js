"use strict";

// Ajax content holder relative width script 
function ajax_width() {
    var el = $('#ajax-content.visible .ajax-slider #project-slider');
    var winW = $(window).width();
    var finalW = winW - 380;
    el.css('width', finalW);
    if (winW < 769) {
        el.css('width', '100%');
    }
}

function center_img() {
    $('.ajax-slider').find('.images, .ajax-prev, .ajax-next').hide();
    setTimeout(function() {
        // Vertically center project images
        var boxH = $('.ajax-slider').height();
        var imgH = $('.ajax-slider').find('figure').height();
        var marginH = (boxH - imgH) / 2;
        $('.ajax-slider').find('.images').css('margin-top', marginH);
        $('.ajax-slider').find('.images, .ajax-prev, .ajax-next').show();
    }, 0);
}

var scrollPos = 0;

$(document).ready(function() {

    // Project overlay
    $('.mix.portfolio a').on('click', function(e) {
        scrollPos = $(document).scrollTop();
        // Visible overlay
        e.preventDefault();
        $('.wrapper').addClass('hide2');
        $('#ajax-content').addClass('visible');


        $('.ajax-close').removeClass('test').delay(500).queue(function(nxt) {
            $(this).addClass('test');
            nxt();
        });

        // Project load
        var projectLink = $(this).attr('href');
        $('.ajax-sidebar').load(projectLink + ' #project-title');
        $('.ajax-slider').load(projectLink + ' #project-slider', function() {
            $('#project-slider').hide();
            $(this).find('img').load(function() {
                center_img();
                $('#project-slider').fadeIn(300);
            });
        });
        setTimeout(function() {
            ajax_width();
        }, 600);
    });




    // Close project overlay
    $('.ajax-close').on('click', function() {
        $('.ajax-close').removeClass('test');
        $('#ajax-content').removeClass('visible');
        setTimeout(function() {
            $('.wrapper').removeClass('hide2');
            $('.ajax-sidebar').html('');
            $('.ajax-slider').html('');
        }, 300);

        setTimeout(function() {
            $(document).scrollTop(scrollPos);
        }, 300);
    });

    $(document).ajaxComplete(function() {
        $('.ajax-slider').trigger('contentchanged');
        $(this).find('img').load(function() {
            center_img();
            $('#project-slider').fadeIn(300);
        });
        ajax_width();
    });


    // Prev and Next programming
    $('.ajax-slider').bind('contentchanged', function() {
        $('.ajax-next').on('click', function(e) {
            e.preventDefault();
            $('#project-slider, #project-title').fadeOut(200);
            setTimeout(function() {
                $('.ajax-sidebar').html('');
                $('.ajax-slider').html('');
            }, 200);
            // Project load
            var projectLink = $(this).attr('href');
            setTimeout(function() {
                $('.ajax-sidebar').load(projectLink + ' #project-title');
                $('.ajax-slider').load(projectLink + ' #project-slider', function() {
                    $('#project-slider').hide();
                    $(this).find('img').load(function() {
                        center_img();
                        $('#project-slider').fadeIn(300);
                    });
                });
            }, 200);
            setTimeout(function() {

                $('#project-title').fadeIn(300);
            }, 400);
        });

        $('.ajax-prev').on('click', function(e) {
            e.preventDefault();
            $('#project-slider, #project-title').fadeOut(200);
            setTimeout(function() {
                $('.ajax-sidebar').html('');
                $('.ajax-slider').html('');
            }, 200);
            // Project load
            var projectLink = $(this).attr('href');
            setTimeout(function() {
                $('.ajax-sidebar').load(projectLink + ' #project-title');
                $('.ajax-slider').load(projectLink + ' #project-slider', function() {
                    $('#project-slider').hide();
                    $(this).find('img').load(function() {
                        center_img();
                        $('#project-slider').fadeIn(300);
                    });
                });
            }, 200);
            setTimeout(function() {

                $('#project-title').fadeIn(300);
            }, 400);
        });
    });

    $('.ajax-more').on('click', function() {
        if ($('.ajax-sidebar').hasClass('collapsed')) {
            $(this).html('Show Info');
            $('.ajax-sidebar').removeClass('collapsed');
        } else {
            $(this).html('Hide Info');
            $('.ajax-sidebar').addClass('collapsed');
        }
    });

});

$(window).bind("resize", function() {
    ajax_width();
    center_img();
});

/*
 *
 *
 * Library for char by char write 
 *
 *
 */

String.prototype.rightChars = function(n) {
    if (n <= 0) {
        return "";
    } else if (n > this.length) {
        return this;
    } else {
        return this.substring(this.length, this.length - n);
    }
};

(function($) {
    var opts, highlight, clearText, backspace, type, spanWithColor, clearDelay, typeDelay, clearData, isNumber, typeWithAttribute, getHighlightInterval, getTypeInterval, intervalHandle, typerInterval;

    spanWithColor = function(color, backgroundColor) {
        if ( color === 'rgba(0, 0, 0, 0)' ) {
            color = 'rgb(255, 255, 255)';
        }

        return $('<span></span>')
            .css('color', color)
            .css('background-color', backgroundColor);
    };

    isNumber = function(n) {
        return !isNaN( parseFloat(n) ) && isFinite(n);
    };

    clearData = function($e) {
        $e.removeData([
            'typePosition',
            'highlightPosition',
            'leftStop',
            'rightStop',
            'primaryColor',
            'backgroundColor',
            'text',
            'typing'
        ]);
    };

    type = function($e) {
        var text = $e.data('text');
        var oldLeft = $e.data('oldLeft');
        var oldRight = $e.data('oldRight');

        if ( !text || text.length === 0 ) {
            clearData($e);
            return;
        }

        $e.text(
            oldLeft +
            text.charAt(0) +
            oldRight
        ).data({
            oldLeft: oldLeft + text.charAt(0),
            text: text.substring(1)
        });

        setTimeout(function () {
            type($e);
        }, getTypeInterval());
    };

    clearText = function($e) {
        $e.find('span').remove();

        setTimeout(function() {
            type($e);
        }, typeDelay());
    };

    highlight = function($e) {
        var position = $e.data('highlightPosition');
        var leftText, highlightedText, rightText;

        if ( !isNumber(position) ) {
            position = $e.data('rightStop') + 1;
        }

        if ( position <= $e.data('leftStop') ) {
            setTimeout(function() {
                clearText($e);
            }, clearDelay());

            return;
        }

        leftText = $e.text().substring(0, position - 1);
        highlightedText = $e.text().substring(position - 1, $e.data('rightStop') + 1);
        rightText = $e.text().substring($e.data('rightStop') + 1);

        $e.html(leftText)
            .append(
            spanWithColor(
                opts.textColor === 'auto' ? $e.data('backgroundColor') : opts.textColor,
                opts.tapeColor === 'auto' ? $e.data('primaryColor') : opts.tapeColor
                )
                .append(highlightedText)
            )
            .append(rightText);

        $e.data('highlightPosition', position - 1);

        setTimeout(function() {
            return highlight($e);
        }, getHighlightInterval());
    };

    typeWithAttribute = (function() {
        var last = 0;

        return function($e) {
            var targets;

            if ( $e.data('typing') ) {
                return;
            }

            try {
                targets = JSON.parse($e.attr(opts.typerDataAttr)).targets;
            } catch (e) {

            }

            if ( typeof targets === "undefined" ) {
                targets = $.map( $e.attr(opts.typerDataAttr).split(','), function(e) {
                    return $.trim(e);
                });
            }

            if ( opts.typerOrder == 'random' ) {
                $e.typeTo( targets[Math.floor(Math.random()*targets.length)] );
            } else if (opts.typerOrder == 'sequential') {
                $e.typeTo(targets[last]);
                last = (last < targets.length - 1) ? last + 1 : 0;
            } else {
                console.error("Type order of '" + opts.typerOrder + "' not supported");
                clearInterval(intervalHandle);
            }
        };
    })();

    //-- Methods to attach to jQuery sets

    $.fn.typer = function(options) {
        var $elements = $(this);

        opts = jQuery.extend({}, $.fn.typer.defaults, options);

        return $elements.each(function() {
            var $e = $(this);

            if ( typeof $e.attr(opts.typerDataAttr) === "undefined" ) {
                return;
            }

            typeWithAttribute($e);

            intervalHandle = setInterval(function() {
                typeWithAttribute($e);
            }, typerInterval());
        });
    };

    $.fn.typeTo = function (newString) {
        var $e = $(this);
        var currentText = $e.text();
        var i = 0;
        var j = 0;

        if ( currentText === newString ) {
            if ( opts.debug === true ) {
                console.log("Our strings our equal, nothing to type");
            }

            return $e;
        }

        if ( currentText !== $e.html() ) {
            if (opts.debug === true) {
                console.error("Typer does not work on elements with child elements.");
            }

            return $e;
        }

        $e.data('typing', true);

        if ( opts.highlightEverything !== true ) {
            while (currentText.charAt(i) === newString.charAt(i)) {
                i++;
            }

            while (currentText.rightChars(j) === newString.rightChars(j)) {
                j++;
            }
        }

        newString = newString.substring(i, newString.length - j + 1);

        $e.data({
            oldLeft: currentText.substring(0, i),
            oldRight: currentText.rightChars(j - 1),
            leftStop: i,
            rightStop: currentText.length - j,
            primaryColor: opts.tapeColor === 'auto' ? $e.data('primaryColor') : opts.tapeColor,
            backgroundColor: opts.textColor === 'auto' ? $e.css('background-color') : opts.textColor,
            text: newString
        });

        highlight($e);

        return $e;
    };

    //-- Helper methods. These can one day be customized further to include things like ranges of delays.

    getHighlightInterval = function() {
        return opts.highlightSpeed;
    };

    getTypeInterval = function() {
        return opts.typeSpeed;
    };

    clearDelay = function() {
        return opts.clearDelay;
    };

    typeDelay = function() {
        return opts.typeDelay;
    };

    typerInterval = function() {
        return opts.typerInterval;
    };

    $.fn.typer.defaults = {
        highlightSpeed: 20,
        typeSpeed: 100,
        clearDelay: 500,
        typeDelay: 200,
        clearOnHighlight: true,
        highlightEverything: true,
        typerDataAttr: 'data-typer-targets',
        typerInterval: 2000,
        debug: false,
        tapeColor: 'auto',
        textColor: 'auto',
        typerOrder: 'random',
    };

})(jQuery);






(function () {
    'use strict';

    var module = {
        ratio: 1.38,
        init: function (id) {
            var me = this;

            // if older browser then don't run javascript
            if (document.addEventListener) {
                this.el = document.getElementById(id);
                this.resize();
                this.plugins();

                // on window resize, update the plugin size
                window.addEventListener('resize', function (e) {
                    var size = me.resize();
                    $(me.el).turn('size', size.width, size.height);
                });
            }
        },
        resize: function () {
            // reset the width and height to the css defaults
            this.el.style.width = '';
            this.el.style.height = '';

            var width = this.el.clientWidth,
                height = Math.round(width / this.ratio),
                padded = Math.round(document.body.clientHeight * 0.9);

            // if the height is too big for the window, constrain it
            if (height > padded) {
                height = padded;
                width = Math.round(height * this.ratio);
            }

            // set the width and height matching the aspect ratio
            this.el.style.width = width + 'px';
            this.el.style.height = height + 'px';

            return {
                width: width,
                height: height
            };
        },
        plugins: function () {
            // run the plugin
            $(this.el).turn({
                gradients: true,
                acceleration: true
            });
            // hide the body overflow
            document.body.className = 'hide-overflow';
        }
    };

    module.init('book');
}());