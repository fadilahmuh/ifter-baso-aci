$("#table-1").dataTable({
    ordering: false,
});

// $(".del").click(function (event) {
//     event.preventDefault();
//     console.log("del clicked");
// });

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
