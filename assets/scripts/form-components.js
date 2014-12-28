var FormComponents = function () {

    

    var handleDatePickers = function () {

        if (jQuery().datepicker) {
            $('.date-picker').datepicker({
                rtl: App.isRTL(),
                autoclose: true
            });
            $('body').removeClass("modal-open"); // fix bug when inline picker is used in modal
        }
    }

    var handleTimePickers = function () {

        if (jQuery().timepicker) {
            $('.timepicker-default').timepicker({
                autoclose: true
            });
            $('.timepicker-24').timepicker({
                autoclose: true,
                minuteStep: 1,
                showSeconds: true,
                showMeridian: false
            });
        }
    }

    var handleDateRangePickers = function () {
        if (!jQuery().daterangepicker) {
            return;
        }

        $('#defaultrange').daterangepicker({
                opens: (App.isRTL() ? 'left' : 'right'),
                format: 'MM/DD/YYYY',
                separator: ' to ',
                startDate: moment().subtract('days', 29),
                endDate: moment(),
                minDate: '01/01/2012',
                maxDate: '12/31/2014',
            },
            function (start, end) {
                console.log("Callback has been called!");
                $('#defaultrange input').val(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
            }
        );        

        $('#reportrange').daterangepicker({
                opens: (App.isRTL() ? 'left' : 'right'),
                startDate: moment().subtract('days', 29),
                endDate: moment(),
                minDate: '01/01/2012',
                maxDate: '12/31/2014',
                dateLimit: {
                    days: 60
                },
                showDropdowns: true,
                showWeekNumbers: true,
                timePicker: false,
                timePickerIncrement: 1,
                timePicker12Hour: true,
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract('days', 1), moment().subtract('days', 1)],
                    'Last 7 Days': [moment().subtract('days', 6), moment()],
                    'Last 30 Days': [moment().subtract('days', 29), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract('month', 1).startOf('month'), moment().subtract('month', 1).endOf('month')]
                },
                buttonClasses: ['btn'],
                applyClass: 'green',
                cancelClass: 'default',
                format: 'MM/DD/YYYY',
                separator: ' to ',
                locale: {
                    applyLabel: 'Apply',
                    fromLabel: 'From',
                    toLabel: 'To',
                    customRangeLabel: 'Custom Range',
                    daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
                    monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                    firstDay: 1
                }
            },
            function (start, end) {
                console.log("Callback has been called!");
                $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
            }
        );
        //Set the initial state of the picker label
        $('#reportrange span').html(moment().subtract('days', 29).format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));
    }

    var handleDatetimePicker = function () {

        $(".form_datetime").datetimepicker({
            autoclose: true,
            isRTL: App.isRTL(),
            format: "dd MM yyyy - hh:ii",
            pickerPosition: (App.isRTL() ? "bottom-right" : "bottom-left")
        });

        $(".form_advance_datetime").datetimepicker({
            isRTL: App.isRTL(),
            format: "dd MM yyyy - hh:ii",
            autoclose: true,
            todayBtn: true,
            startDate: "2013-02-14 10:00",
            pickerPosition: (App.isRTL() ? "bottom-right" : "bottom-left"),
            minuteStep: 10
        });

        $(".form_meridian_datetime").datetimepicker({
            isRTL: App.isRTL(),
            format: "dd MM yyyy - HH:ii P",
            showMeridian: true,
            autoclose: true,
            pickerPosition: (App.isRTL() ? "bottom-right" : "bottom-left"),
            todayBtn: true
        });

        $('body').removeClass("modal-open"); // fix bug when inline picker is used in modal
    }

    var handleClockfaceTimePickers = function () {

        if (!jQuery().clockface) {
            return;
        }

        $('.clockface_1').clockface();

        $('#clockface_2').clockface({
            format: 'HH:mm',
            trigger: 'manual'
        });

        $('#clockface_2_toggle').click(function (e) {
            e.stopPropagation();
            $('#clockface_2').clockface('toggle');
        });

        $('#clockface_2_modal').clockface({
            format: 'HH:mm',
            trigger: 'manual'
        });

        $('#clockface_2_modal_toggle').click(function (e) {
            e.stopPropagation();
            $('#clockface_2_modal').clockface('toggle');
        });

        $('.clockface_3').clockface({
            format: 'H:mm'
        }).clockface('show', '14:30');
    }

    var handleColorPicker = function () {
        if (!jQuery().colorpicker) {
            return;
        }
        $('.colorpicker-default').colorpicker({
            format: 'hex'
        });
        $('.colorpicker-rgba').colorpicker();
    }

    var handleSelect2 = function () {

        $('#select2_sample1').select2({
            placeholder: "Select an option",
            allowClear: true
        });

        $('#select2_sample2').select2({
            placeholder: "Select a State",
            allowClear: true
        });

        $("#select2_sample3").select2({
            placeholder: "Select...",
            allowClear: true,
            minimumInputLength: 1,
            query: function (query) {
                var data = {
                    results: []
                }, i, j, s;
                for (i = 1; i < 5; i++) {
                    s = "";
                    for (j = 0; j < i; j++) {
                        s = s + query.term;
                    }
                    data.results.push({
                        id: query.term + i,
                        text: s
                    });
                }
                query.callback(data);
            }
        });


    return {
        //main function to initiate the module
        init: function () {

            handleTagsInput();
            handleDatePickers();
            handleTimePickers();
            handleDatetimePicker();
            handleDateRangePickers();
            handleClockfaceTimePickers();
            handleColorPicker();

        }
    };

}();