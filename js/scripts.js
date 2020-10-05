
// ******* Persian Calendar *******
$("#input-arrival-time").click(
    function () {
        $("#input-arrival-time").persianDatepicker({
            autoClose: true,
            "inline": false,
            "format": "LL",
            "viewMode": "day",
            "initialValue": true,
            "minDate": 1601264959074,
            "maxDate": 1651964959074,
            "position": "auto",
            "altFormat": " dddd  DD / MMM /YYYY",
            "altField": "#arrival-time",
            "onlyTimePicker": false,
            "onlySelectOnDate": true,
            "calendarType": "persian",
            "inputDelay": 800,
            "observer": false,
            "calendar": {
                "persian": {
                    "locale": "fa",
                    "showHint": true,
                    "leapYearMode": "algorithmic"
                },
                "gregorian": {
                    "locale": "en",
                    "showHint": true
                }
            },
            "navigator": {
                "enabled": true,
                "scroll": {
                    "enabled": true
                },
                "text": {
                    "btnNextText": "<",
                    "btnPrevText": ">"
                }
            },
            "toolbox": {
                "enabled": true,
                "calendarSwitch": {
                    "enabled": true,
                    "format": "MMMM"
                },
                "todayButton": {
                    "enabled": true,
                    "text": {
                        "fa": "امروز",
                        "en": "Today"
                    }
                },
                "submitButton": {
                    "enabled": true,
                    "text": {
                        "fa": "تایید",
                        "en": "Submit"
                    }
                },
                "text": {
                    "btnToday": "امروز"
                }
            },
            "timePicker": {
                "enabled": true,
                "step": 1,
                "hour": {
                    "enabled": false,
                    "step": null
                },
                "minute": {
                    "enabled": false,
                    "step": null
                },
                "second": {
                    "enabled": false,
                    "step": null
                },
                "meridian": {
                    "enabled": false
                }
            },
            "dayPicker": {
                "enabled": true,
                "titleFormat": "YYYY MMMM"
            },
            "monthPicker": {
                "enabled": true,
                "titleFormat": "YYYY"
            },
            "yearPicker": {
                "enabled": true,
                "titleFormat": "YYYY"
            },
            "responsive": true

        });
    })
$("#input-departure-time").click(
    function (){
        $("#input-departure-time").persianDatepicker({
            autoClose: true,
            "inline": false,
            "format": "LL",
            "viewMode": "day",
            "initialValue": true,
            "minDate": 1601264959074,
            "maxDate": 1651964959074,
            "position": "auto",
            "altFormat": " dddd  DD / MMM /YYYY",
            "altField": "#departure-time",
            "onlyTimePicker": false,
            "onlySelectOnDate": true,
            "calendarType": "persian",
            "inputDelay": 800,
            "observer": false,
            "calendar": {
                "persian": {
                    "locale": "fa",
                    "showHint": true,
                    "leapYearMode": "algorithmic"
                },
                "gregorian": {
                    "locale": "en",
                    "showHint": true
                }
            },
            "navigator": {
                "enabled": true,
                "scroll": {
                    "enabled": true
                },
                "text": {
                    "btnNextText": "<",
                    "btnPrevText": ">"
                }
            },
            "toolbox": {
                "enabled": true,
                "calendarSwitch": {
                    "enabled": true,
                    "format": "MMMM"
                },
                "todayButton": {
                    "enabled": true,
                    "text": {
                        "fa": "امروز",
                        "en": "Today"
                    }
                },
                "submitButton": {
                    "enabled": true,
                    "text": {
                        "fa": "تایید",
                        "en": "Submit"
                    }
                },
                "text": {
                    "btnToday": "امروز"
                }
            },
            "timePicker": {
                "enabled": true,
                "step": 1,
                "hour": {
                    "enabled": false,
                    "step": null
                },
                "minute": {
                    "enabled": false,
                    "step": null
                },
                "second": {
                    "enabled": false,
                    "step": null
                },
                "meridian": {
                    "enabled": false
                }
            },
            "dayPicker": {
                "enabled": true,
                "titleFormat": "YYYY MMMM"
            },
            "monthPicker": {
                "enabled": true,
                "titleFormat": "YYYY"
            },
            "yearPicker": {
                "enabled": true,
                "titleFormat": "YYYY"
            },
            "responsive": true

        })
    })



// ******* Counter *******
$('.counter').counterUp({
    delay: 10,
    time: 1500
});


// ******* Step-1 Card Animation *******
function step1HoverIn(item){
    item.previousElementSibling.style.display = "none"
}
function step1HoverOut(item){
    item.previousElementSibling.style.display = "initial"
}

// ******* Step-2 Card Animation *******
function step2HoverIn(item){
    $(item).css({"background": 'rgba(141,125,255, 0.5)', 'transition': '1s'});
    $(item).prev().css({"transform": 'scale(1.2) rotate(8deg)', 'transition': '1s'});
}
function step2HoverOut(item){
    $(item).css({"background": 'rgba(141,125,255, 0)', 'transition': '1s'});
    $(item).prev().css({"transform": 'scale(1) rotate(0deg)', 'transition': '1s'});
}

// ******* Step-3 Card Animation *******
let a;
function step3HoverIn(item){
    a= item;
    // item.previousElementSibling.style.display = "initial";
    // item.firstElementChild.setAttribute("data-animation-in", "animate__fadeIn")
    // $(item).children("p").attr("data-animation-in", "animate__fadeIn")
    $(item).children("p").attr("class", "text-danger")
}
function step3HoverOut(item){
    // item.previousElementSibling.style.display = "initial"
}


// ******* Top Scroll Button *******
new SmoothScroll ('a[href*="#"]', {
    easing: 'linear',
    speed: 1000,
});


// ******* Scroll Option *******
$(Window).on('scroll load' , function () {
    // if ($(Window).scrollTop() > 120) {
    //     $('#navbar').css('background-color', 'rgba(20 , 40 , 60 , 0.7)').css('padding', '14px 40px');
    // }
    // else {
    //     $('#navbar').css('background-color', 'rgba(0 , 0 , 0 , 0)').css('padding', '20px 40px');
    // }

    if ($(window).scrollTop() > 250) {
        $('#go-to-top').css('opacity' , '1').css('visibility' , 'visible');
    } else {
        $('#go-to-top').css('opacity' , '0').css('visibility' , 'hidden');
    }
});