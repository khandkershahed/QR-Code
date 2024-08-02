// $(document).ready(function () {
//     $('.js-example-basic-multiple, .js-example-basic-single').select2();
// });

// Sweetalert toastr
// custom.js

// Function to display success message
function showSuccessMessage(message) {
    Swal.fire({
        title: "Success!",
        text: message,
        icon: "success",
        buttonsStyling: true,
        customClass: {
            confirmButton: "btn btn-primary",
        },
    })
}

// Function to display error message
function showErrorMessage(message) {
    Swal.fire({
        title: "Error!",
        text: message,
        icon: "error",
        buttonsStyling: true,
        customClass: {
            confirmButton: "btn btn-primary",
        },
    }).then(function () {
        // After user acknowledges the success message, flush the session
        $.ajax({
            url: "/flush-session", // Update the URL with your route for flushing the session
            method: "GET",
            success: function (response) {
                // Session flushed successfully
            },
            error: function (xhr, status, error) {
                console.error("Error flushing session:", error);
            },
        });
    });
}

//Select All Checkbox
$(".metronic_select_all").on("change", function () {
    // Apply check state to all checkboxes
    $('[type="checkbox"]').prop("checked", $(this).prop("checked"));
});

// Password Show and Hide
$(document).ready(function () {
    $(".toggle-password").click(function () {
        const passwordInput = $(this)
            .closest(".position-relative")
            .find("input");
        const isVisible = passwordInput.attr("type") === "text";
        passwordInput.attr("type", isVisible ? "password" : "text");
        $(this).find(".bi-eye").toggleClass("d-none");
        $(this).find(".bi-eye-slash").toggleClass("d-none");
    });
});
function passwordMeter(inputElement, highlightElement, options) {
    var checkSteps, score;

    var check = function () {
        var e = 0,
            t = m();
        !0 === l() && (e += t),
            !0 === options.checkUppercase && !0 === s() && (e += t),
            !0 === options.checkLowercase && !0 === u() && (e += t),
            !0 === options.checkDigit && !0 === d() && (e += t),
            !0 === options.checkChar && !0 === c() && (e += t),
            (score = e),
            f();
    };

    var l = function () {
        return inputElement.value.length >= options.minLength;
    };

    var s = function () {
        return /[a-z]/.test(inputElement.value);
    };

    var u = function () {
        return /[A-Z]/.test(inputElement.value);
    };

    var d = function () {
        return /[0-9]/.test(inputElement.value);
    };

    var c = function () {
        return /[~`!#@$%\^&*+=\-\[\]\\';,/{}|\\":<>\?]/g.test(
            inputElement.value
        );
    };

    var m = function () {
        var e = 1;
        return (
            !0 === options.checkUppercase && e++,
            !0 === options.checkLowercase && e++,
            !0 === options.checkDigit && e++,
            !0 === options.checkChar && e++,
            (checkSteps = e),
            100 / checkSteps
        );
    };

    var f = function () {
        var e = [].slice.call(highlightElement.querySelectorAll("div")),
            t = e.length,
            i = 0,
            r = m(),
            o = g();
        e.map(function (e) {
            i++,
                r * i * (checkSteps / t) <= o
                    ? e.classList.add("active")
                    : e.classList.remove("active");
        });
    };

    var g = function () {
        return score;
    };

    // Check the password strength on initialization
    check();

    // Expose public methods
    return {
        check: check,
        getScore: g,
    };
}

$(document).ready(function () {
    var inputElement = document.querySelector(".password_input");
    var highlightElement = document.querySelector(
        '.d-flex[data-kt-password-meter-control="highlight"]'
    );

    var options = {
        minLength: 8, // Minimum password length
        checkUppercase: true, // Check for uppercase letters
        checkLowercase: true, // Check for lowercase letters
        checkDigit: true, // Check for digits
        checkChar: true, // Check for special characters
    };

    // Initialize password meter
    var meter = passwordMeter(inputElement, highlightElement, options);

    // Toggle password visibility

    // Example usage: Whenever the password input changes, update the password meter
    inputElement.addEventListener("input", function () {
        meter.check();
    });

    document.querySelectorAll('.password_confirmation').forEach(function (element) {
        element.addEventListener('keyup', function () {
            var password = document.querySelector('.password_input').value;
            var passwordConfirmation = this.value;
            var messageElement = document.querySelector('.password-confirmation-message');

            if (password === passwordConfirmation) {
                messageElement.textContent = 'Password confirmed';
                messageElement.classList.remove('text-danger');
                messageElement.classList.add('text-success');
            } else {
                messageElement.textContent = 'Passwords do not match';
                messageElement.classList.remove('text-success');
                messageElement.classList.add('text-danger');
            }
        });
    });

});

// Delete action with reload page
$(document).on("click", ".delete", function (e) {
    e.preventDefault();

    var deleteUrl = $(this).attr("href");

    Swal.fire({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonText: "Yes, delete it!",
        cancelButtonText: "No, cancel!",
        buttonsStyling: false,
        customClass: {
            confirmButton: "btn btn-danger",
            cancelButton: "btn btn-success",
        },
    }).then(function (result) {
        if (result.isConfirmed) {
            $.ajax({
                url: deleteUrl,
                type: "DELETE",
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                        "content"
                    ),
                },
                success: function (data) {
                    Swal.fire(
                        "Deleted!",
                        "Your file has been deleted.",
                        "success"
                    ).then(function () {
                        location.reload();
                    });
                },
                error: function (xhr, status, error) {
                    Swal.fire("Error Occurred!", error, "error");
                },
            });
        } else if (result.dismiss === swal.DismissReason.cancel) {
            Swal.fire("Cancelled", "Your imaginary file is safe :)", "error");
        }
    });
});

// --------------------------------
// Delete Account with reload page
$(document).on("click", ".delete-account", async function (e) {
    e.preventDefault();

    var deleteAccountUrl = $(this).attr("href");
    var checkPasswordUrl = $(this).data("check-password-url");
    const { value: password } = await Swal.fire({
        title: "Confirm Password",
        input: "password",
        // inputLabel: "Password",
        inputPlaceholder: "Enter your password",
        inputAttributes: {
            maxlength: "30",
            autocapitalize: "off",
            autocorrect: "off",
        },
        showCancelButton: true,
        confirmButtonText: "Yes, delete it!",
        cancelButtonText: "No, cancel!",
        buttonsStyling: false,
        customClass: {
            confirmButton: "btn btn-danger",
            cancelButton: "btn btn-success",
        },
    });

    if (password) {
        // Check if the entered password matches the user's password in the database
        $.ajax({
            url: checkPasswordUrl,
            type: "POST",
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
            data: {
                password: password,
            },
            success: function (response) {
                if (response.success) {
                    // Password matches, proceed with deletion
                    $.ajax({
                        url: deleteAccountUrl,
                        type: "DELETE",
                        headers: {
                            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                                "content"
                            ),
                        },
                        success: function (data) {
                            Swal.fire(
                                "Deleted!",
                                "Your Account has been deleted.",
                                "success"
                            ).then(function () {
                                // location.reload();
                                window.location.href = "/";
                            });
                        },
                        error: function (xhr, status, error) {
                            Swal.fire("Error Occurred!", error, "error");
                        },
                    });
                } else {
                    // Password does not match, show error message
                    Swal.fire("Error Occurred!", response.message, "error");
                }
            },
            error: function (xhr, status, error) {
                Swal.fire(
                    "Error Occurred!",
                    "An error occurred while checking the password. Please try again.",
                    "error"
                );
            },
        });
    } else {
        Swal.fire("Cancelled", "Your Account is safe :)", "error");
    }
});
// --------------------------------

// --------------------------------
// Modal Close Code

("use strict");

// Class definition
var metronicModal = (function () {
    // Shared variables
    const element = document.querySelector(".metronic_modal");
    // const form = element.querySelector('#kt_modal_add_permission_form');
    const modal = new bootstrap.Modal(element);

    // Init add schedule modal
    var initModal = () => {
        // Close button handler
        const closeButton = element.querySelector(
            '[data-kt-modal-action="close"]'
        );
        closeButton.addEventListener("click", (e) => {
            e.preventDefault();

            Swal.fire({
                text: "Are you sure you would like to close?",
                icon: "warning",
                showCancelButton: true,
                buttonsStyling: false,
                confirmButtonText: "Yes, close it!",
                cancelButtonText: "No, return",
                customClass: {
                    confirmButton: "btn btn-primary",
                    cancelButton: "btn btn-active-light",
                },
            }).then(function (result) {
                if (result.value) {
                    modal.hide(); // Hide modal
                }
            });
        });

        // Cancel button handler
        const cancelButton = element.querySelector(
            '[data-kt-modal-action="cancel"]'
        );
        cancelButton.addEventListener("click", (e) => {
            e.preventDefault();

            Swal.fire({
                text: "Are you sure you would like to cancel?",
                icon: "warning",
                showCancelButton: true,
                buttonsStyling: false,
                confirmButtonText: "Yes, cancel it!",
                cancelButtonText: "No, return",
                customClass: {
                    confirmButton: "btn btn-primary",
                    cancelButton: "btn btn-active-light",
                },
            }).then(function (result) {
                if (result.value) {
                    modal.hide(); // Hide modal
                } else if (result.dismiss === "cancel") {
                    Swal.fire({
                        text: "Your form has not been cancelled!.",
                        icon: "error",
                        buttonsStyling: false,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn btn-primary",
                        },
                    });
                }
            });
        });
    };

    return {
        // Public functions
        init: function () {
            initModal();
        },
    };
})();

// On document ready
KTUtil.onDOMContentLoaded(function () {
    metronicModal.init();
});

// Qr code form

$('input[type="radio"]').change(function () {
    // Hide all forms
    $(".form-container").hide();

    // Show the selected form based on the value of the checked radio input
    const selectedValue = $('input[type="radio"]:checked').val();
    $("#" + selectedValue + "-form").show();
});

// Initially hide all forms except the one corresponding to the initially selected radio input
const selectedValue = $('input[type="radio"]:checked').val();
$("#" + selectedValue + "-form").show();


//Step Form
// NFC-card Template
var nfcForm = $('#generateNfcCardForm');
nfcForm.find('input, textarea').on('keyup change', function () {
    var profile_image = $("input[name = 'profile_image']", this).val();
    var first_name = $("input[name = 'first_name']", this).val();
    var last_name = $("input[name = 'last_name']", this).val();
    var prefix = $("input[name = 'prefix']", this).val();
    var suffix = $("input[name = 'suffix']", this).val();
    var designation = $("input[name = 'designation']", this).val();
    var department = $("input[name = 'department']", this).val();
    var pronouns = $("input[name = 'pronouns']", this).val();
    var company = $("input[name = 'company']", this).val();
    var location_latitude = $("input[name = 'location_latitude']", this).val();
    var location_longitude = $("input[name = 'location_longitude']", this).val();
    var company_logo = $("input[name = 'company_logo']", this).val();
    var logo_Size = $("input[name = 'logo_Size']", this).val();
    var summary = $("input[name = 'summary']", this).val();
    var address = $("input[name = 'address']", this).val();
    alert(first_name);

    $('.profile_image').attr('src', profile_image);
    $('.first_name').html(first_name);
    $('.last_name').html(last_name);
    $('.prefix').html(prefix);
    $('.suffix').html(suffix);
    $('.designation').html(designation);
    $('.department').html(department);
    $('.pronouns').html(pronouns);
    $('.company').html(company);
    $('.location_latitude').html(location_latitude);
    $('.location_longitude').html(location_longitude);
    $('.company_logo').attr('src', logo_Size);
    $('.logo_Size').html(logo_Size);
    $('.summary').html(summary);
    $('.address').html(address);
})



// Tiny MCE Start
document.addEventListener('DOMContentLoaded', function () {
    tinymce.init({
        selector: '.kt_docs_tinymce_plugins'
    });
});
document.addEventListener('DOMContentLoaded', function () {
    tinymce.init({
        selector: '.overview'
    });
});
// Tiny MCE End

// Datatable Start
"use strict";

// Class definition
var KTDatatablesExample = function () {
    // Shared variables
    var table;
    var datatable;

    // Private functions
    var initDatatable = function () {
        // Set date data order
        const tableRows = table.querySelectorAll('tbody tr');

        tableRows.forEach(row => {
            const dateRow = row.querySelectorAll('td');
            const realDate = moment(dateRow[3].innerHTML, "DD MMM YYYY, LT").format(); // select date from 4th column in table
            dateRow[3].setAttribute('data-order', realDate);
        });

        // Init datatable --- more info on datatables: https://datatables.net/manual/
        datatable = $(table).DataTable({
            "info": false,
            'order': [],
            'pageLength': 10,
        });
    }

    // Hook export buttons
    var exportButtons = () => {
        const documentTitle = $('.document_title').html();
        var buttons = new $.fn.dataTable.Buttons(table, {
            buttons: [
                {
                    extend: 'copyHtml5',
                    title: documentTitle
                },
                {
                    extend: 'excelHtml5',
                    title: documentTitle
                },
                {
                    extend: 'csvHtml5',
                    title: documentTitle
                },
                {
                    extend: 'pdfHtml5',
                    title: documentTitle
                }
            ]
        }).container().appendTo($('#kt_datatable_example_buttons'));

        // Hook dropdown menu click event to datatable export buttons
        const exportButtons = document.querySelectorAll('#kt_datatable_example_export_menu [data-kt-export]');
        exportButtons.forEach(exportButton => {
            exportButton.addEventListener('click', e => {
                e.preventDefault();

                // Get clicked export value
                const exportValue = e.target.getAttribute('data-kt-export');
                const target = document.querySelector('.dt-buttons .buttons-' + exportValue);

                // Trigger click event on hidden datatable export buttons
                target.click();
            });
        });
    }

    // Search Datatable --- official docs reference: https://datatables.net/reference/api/search()
    var handleSearchDatatable = () => {
        const filterSearch = document.querySelector('[data-kt-filter="search"]');
        filterSearch.addEventListener('keyup', function (e) {
            datatable.search(e.target.value).draw();
        });
    }

    // Public methods
    return {
        init: function () {
            table = document.querySelector('#kt_datatable_example, .datatable');

            if (!table) {
                return;
            }

            initDatatable();
            exportButtons();
            handleSearchDatatable();
        }
    };
}();

// On document ready
KTUtil.onDOMContentLoaded(function () {
    KTDatatablesExample.init();
});
// Datatable End




// Create Countdown
var Countdown = {
  
  // Backbone-like structure
  $el: $('.countdown'),
  
  // Params
  countdown_interval: null,
  total_seconds     : 0,
  
  // Initialize the countdown  
  init: function() {
    
    // DOM
		this.$ = {
    	hours  : this.$el.find('.bloc-time.hours .figure'),
    	minutes: this.$el.find('.bloc-time.min .figure'),
    	seconds: this.$el.find('.bloc-time.sec .figure')
   	};

    // Init countdown values
    this.values = {
	      hours  : this.$.hours.parent().attr('data-init-value'),
        minutes: this.$.minutes.parent().attr('data-init-value'),
        seconds: this.$.seconds.parent().attr('data-init-value'),
    };
    
    // Initialize total seconds
    this.total_seconds = this.values.hours * 60 * 60 + (this.values.minutes * 60) + this.values.seconds;

    // Animate countdown to the end 
    this.count();    
  },
  
  count: function() {
    
    var that    = this,
        $hour_1 = this.$.hours.eq(0),
        $hour_2 = this.$.hours.eq(1),
        $min_1  = this.$.minutes.eq(0),
        $min_2  = this.$.minutes.eq(1),
        $sec_1  = this.$.seconds.eq(0),
        $sec_2  = this.$.seconds.eq(1);
    
        this.countdown_interval = setInterval(function() {

        if(that.total_seconds > 0) {

            --that.values.seconds;              

            if(that.values.minutes >= 0 && that.values.seconds < 0) {

                that.values.seconds = 59;
                --that.values.minutes;
            }

            if(that.values.hours >= 0 && that.values.minutes < 0) {

                that.values.minutes = 59;
                --that.values.hours;
            }

            // Update DOM values
            // Hours
            that.checkHour(that.values.hours, $hour_1, $hour_2);

            // Minutes
            that.checkHour(that.values.minutes, $min_1, $min_2);

            // Seconds
            that.checkHour(that.values.seconds, $sec_1, $sec_2);

            --that.total_seconds;
        }
        else {
            clearInterval(that.countdown_interval);
        }
    }, 1000);    
  },
  
  animateFigure: function($el, value) {
    
     var that         = this,
		     $top         = $el.find('.top'),
         $bottom      = $el.find('.bottom'),
         $back_top    = $el.find('.top-back'),
         $back_bottom = $el.find('.bottom-back');

    // Before we begin, change the back value
    $back_top.find('span').html(value);

    // Also change the back bottom value
    $back_bottom.find('span').html(value);

    // Then animate
    TweenMax.to($top, 0.8, {
        rotationX           : '-180deg',
        transformPerspective: 300,
	      ease                : Quart.easeOut,
        onComplete          : function() {

            $top.html(value);

            $bottom.html(value);

            TweenMax.set($top, { rotationX: 0 });
        }
    });

    TweenMax.to($back_top, 0.8, { 
        rotationX           : 0,
        transformPerspective: 300,
	      ease                : Quart.easeOut, 
        clearProps          : 'all' 
    });    
  },
  
  checkHour: function(value, $el_1, $el_2) {
    
    var val_1       = value.toString().charAt(0),
        val_2       = value.toString().charAt(1),
        fig_1_value = $el_1.find('.top').html(),
        fig_2_value = $el_2.find('.top').html();

    if(value >= 10) {

        // Animate only if the figure has changed
        if(fig_1_value !== val_1) this.animateFigure($el_1, val_1);
        if(fig_2_value !== val_2) this.animateFigure($el_2, val_2);
    }
    else {

        // If we are under 10, replace first figure with 0
        if(fig_1_value !== '0') this.animateFigure($el_1, 0);
        if(fig_2_value !== val_1) this.animateFigure($el_2, val_1);
    }    
  }
};

// Let's go !
Countdown.init();