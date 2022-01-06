$("#table-1").dataTable({
    "dom": '<"row"<"col-9"l><"col-3 filter">>ftip',
    "language": {
        "lengthMenu": 'Tampilkan <select class="form-control">'+
          '<option value="10">10</option>'+
          '<option value="20">20</option>'+
          '<option value="30">30</option>'+
          '<option value="50">50</option>'+
          '<option value="100">100</option>'+
          '<option value="-1">All</option>'+
          '</select>'
      },
    responsive: {
      details: {
          type: 'column',
          target: -1
      }
    },
    columnDefs: [ 
      {
        className: 'dtr-control',
        orderable: false,
        targets:   -1,
      },
      { responsivePriority: 2, targets: -1 }
    ]
});

$('.filter').append('<a href="#" class="btn btn-primary"><i class="fas fa-filter"></i></a>');