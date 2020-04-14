$(function () {
    //Tooltip
    $('[data-toggle="tooltip"]').tooltip();

    //Datatable
    $('.datatable').DataTable();

    //Select2 triggered by JQuery
    $('.select2j').select2({
        theme: 'bootstrap4'
    });

    //Time Picker
    $('.timepicker').datetimepicker({
        ignoreReadonly: true,
        format: 'HH:mm',
        icons: {
            time: 'far fa-clock',
            date: 'far fa-calendar'
        }
    });

    //Date Picker
    $('.datepicker').datetimepicker({
        ignoreReadonly: true,
        format: 'DD-MM-YYYY',
        icons: {
            time: 'far fa-clock',
            date: 'far fa-calendar'
        }
    });

    //Datetime Picker
    $('.datetimepicker').datetimepicker({
        ignoreReadonly: true,
        format: 'DD-MM-YYYY HH:mm',
        icons: {
            time: 'far fa-clock',
            date: 'far fa-calendar'
        }
    });
});
