$(function () {
    $('.datatable').DataTable();

    $('.select2j').select2();

    $('.timepicker').datetimepicker({
        format: 'HH:mm'
    });

    $('.datepicker').datetimepicker({
        format: 'DD-MM-YYYY',
    });

    $('.datetimepicker').datetimepicker({
        format: 'DD-MM-YYYY HH:mm',
        icons: {
            time: "fa fa-clock"
        }
    });
});
