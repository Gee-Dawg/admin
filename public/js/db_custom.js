/**
 * Created by GladwellN on 2016/11/15.
 */

$(document).ready(function ()
{
    update_dashboard_layout();
});

/*Menu Functions*/
function update_dashboard_layout()
{
    $('#dashboard-content').css('min-height', $(window).height() - 143);
}

var config = window.config = {};

//validation configuration
config.validations = {
    debug: true,
    errorClass:'has-error',
    validClass:'success',
    errorElement:"span",

    // add error class
    highlight: function(element, errorClass, validClass) {
        $(element).parents("div.form-group")
            .addClass(errorClass)
            .removeClass(validClass);
    },

    // add error class
    unhighlight: function(element, errorClass, validClass) {
        $(element).parents(".has-error")
            .removeClass(errorClass)
            .addClass(validClass);
    },

    // submit handler
    submitHandler: function(form) {
        form.submit();
    }
}

//delay time configuration
config.delayTime = 50;

//LoginForm validation
$(function() {
    if (!$('#login-form').length) {
        return false;
    }

    var loginValidationSettings = {
        rules: {
            email: {
                required: true,
                email: true
            },
            password: "required",
            agree: "required"
        },
        messages: {
            email: {
                required: "Please enter username",
                email: "Please enter a valid email address"
            },
            password:  "Please enter password",
            agree: "Please accept our policy"
        },
        invalidHandler: function() {
            animate({
                name: 'shake',
                selector: '.auth-container > .card'
            });
        }
    }

    $.extend(loginValidationSettings, config.validations);

    $('#login-form').validate(loginValidationSettings)
});

function animate(options) {
    var animationName = "animated " + options.name;
    var animationEnd = "webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend";
    $(options.selector)
        .addClass(animationName)
        .one(animationEnd,
            function(){
                $(this).removeClass(animationName);
            }
        );
}

/*Add edit buttons*/
$(function() {
    var $itemActions = $(".item-actions-dropdown");

    $(document).on('click',function(e) {
        if (!$(e.target).closest('.item-actions-dropdown').length) {
            $itemActions.removeClass('active');
        }
    });

    $('.item-actions-toggle-btn').on('click',function(e){
        e.preventDefault();

        var $thisActionList = $(this).closest('.item-actions-dropdown');

        $itemActions.not($thisActionList).removeClass('active');

        $thisActionList.toggleClass('active');
    });
});

$(function () {
    $('#sidebar-menu, #customize-menu').metisMenu({
        activeClass: 'open'
    });

    $('#sidebar-collapse-btn').on('click', function(event){
        event.preventDefault();

        $("#app").toggleClass("sidebar-open");
    });

    $("#sidebar-overlay").on('click', function() {
        $("#app").removeClass("sidebar-open");
    });
});

$(function() {
    $('.nav-profile > li > a').on('click', function() {
        var $el = $(this).next();

        animate({
            name: 'flipInX',
            selector: $el
        });
    });
});

$(function () {

    // Local storage settings
    var themeSettings = getThemeSettings();

    // Elements

    var $app = $('#app');
    var $styleLink = $('#theme-style');
    var $customizeMenu = $('#customize-menu');

    // Color switcher
    var $customizeMenuColorBtns = $customizeMenu.find('.color-item');

    // Position switchers
    var $customizeMenuRadioBtns = $customizeMenu.find('.radio');

    setThemeSettings();

    // set theme type
    $customizeMenuColorBtns.on('click', function() {
        themeSettings.themeName = $(this).data('theme');

        setThemeSettings();
    });


    $customizeMenuRadioBtns.on('click', function() {

        var optionName = $(this).prop('name');
        var value = $(this).val();

        themeSettings[optionName] = value;

        setThemeSettings();
    });

    function setThemeSettings() {
        setThemeState()
            .delay(config.delayTime)
            .queue(function (next) {

                setThemeControlsState();
                saveThemeSettings();

                $(document).trigger("themechange");

                next();
            });
    }

    function setThemeState() {
        // set theme type
        if (themeSettings.themeName) {
            $styleLink.attr('href', base_url+'/vendor/admin/css/db_themes/app-' + themeSettings.themeName + '.css');
        }
        else {
            $styleLink.attr('href', base_url+'/vendor/admin/css/db_themes/app.css');
        }

        // App classes
        $app.removeClass('header-fixed footer-fixed sidebar-fixed');

        // set header
        $app.addClass(themeSettings.headerPosition);

        // set footer
        $app.addClass(themeSettings.footerPosition);

        // set footer
        $app.addClass(themeSettings.sidebarPosition);

        return $app;
    }

    function setThemeControlsState() {
        // set color switcher
        $customizeMenuColorBtns.each(function() {
            if($(this).data('theme') === themeSettings.themeName) {
                $(this).addClass('active');
            }
            else {
                $(this).removeClass('active');
            }
        });

        // set radio buttons
        $customizeMenuRadioBtns.each(function() {
            var name = $(this).prop('name');
            var value = $(this).val();

            if (themeSettings[name] === value) {
                $(this).prop("checked", true );
            }
            else {
                $(this).prop("checked", false );
            }
        });
    }

    function getThemeSettings() {
        var settings = (localStorage.getItem('themeSettings')) ? JSON.parse(localStorage.getItem('themeSettings')) : {};

        settings.headerPosition = settings.headerPosition || '';
        settings.sidebarPosition = settings.sidebarPosition || '';
        settings.footerPosition = settings.footerPosition || '';

        return settings;
    }

    function saveThemeSettings() {
        localStorage.setItem('themeSettings', JSON.stringify(themeSettings));
    }
});

$(function() {
    $("body").addClass("loaded");
});
