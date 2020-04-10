$(function () {
    //Tooltip
    $('[data-toggle="tooltip"]').tooltip();

    //Datatable
    $('.datatable').DataTable();

    //Select2 triggered by JQuery
    $('.select2j').select2();

    //Time Picker
    $('.timepicker').datetimepicker({
        format: 'HH:mm'
    });

    //Date Picker
    $('.datepicker').datetimepicker({
        format: 'DD-MM-YYYY',
    });

    //Datetime Picker
    $('.datetimepicker').datetimepicker({
        format: 'DD-MM-YYYY HH:mm',
        icons: {
            time: "fa fa-clock"
        }
    });
});
