$("#table-1").dataTable({
    ordering: false,
});

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