$("#table-1").dataTable({
    dom: '<"row"<"col-9"l><"col-3 filter">>ftip',
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
    responsive: {
        details: {
            type: "column",
            target: -1,
        },
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
    '<a href="#" class="btn btn-primary"><i class="fas fa-filter"></i></a>'
);

$("#table-1").on("click","tbody span.dtr-data .del",function (e) {
      var url = $(this).data("url");
      console.log(url);
      document.getElementById("del-form").action = url;
      // $('#del-form').action = `url`;
      var form = $('#del-form');
      // form.action =url;
      console.log(form);
      e.preventDefault();
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

$(document).on("click","tbody span.dtr-data .edit", function (e) {
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