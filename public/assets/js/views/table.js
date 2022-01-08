$("#table-1").dataTable({
    dom: '<"row"<"col-2 filter"><"col-4 text-center"l><"col-6"f>>tip',
    language: {
        lengthMenu:
            'Tampilkan <select class="form-control">' +
            '<option value="10">10</option>' +
            '<option value="20">20</option>' +
            '<option value="30">30</option>' +
            '<option value="50">50</option>' +
            '<option value="100">100</option>' +
            '<option value="-1">All</option>' +
            "</select>",
    },
    "ordering": false,
    columnDefs: [
        {
            className: "dtr-control",
            orderable: false,
            targets: -1,
        },
        { responsivePriority: 2, targets: -1 },
    ],
});

$(".filter").append(
    '<button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-filter"></i></button>'
);

$(".del").click(function (e) {
    var url = $(this).data("url");
    document.getElementById("del-form").action = url;
    var form = $("#del-form");
    swal({
        title: `Hapus data yang dipilih?`,
        text: "Jika data ini dihapus maka tidak dapat dikembalikan lagi.",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    }).then((willDelete) => {
        if (willDelete) {
            form.submit();
        }
    });
});



$(".edit").click(function (e) {
    e.preventDefault();
    var route = $(this).data("url");
    $.ajax({
        type: "GET",
        url: route,
        dataType: "json",
        success: function (response) {
          // console.log(response.modal);
            $("#modal-json").html(response.modal);
            $("#modal-json").modal("show");
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(
                xhr.status + "\n" + xhr.responseText + "\n" + thrownError
            );
        },
    });
});