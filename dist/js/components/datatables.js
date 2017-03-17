$(document).ready(function() {
  $('#mydata').DataTable(
  {
    "scrollX": true,
    "processing": true,
    "language": {
      "processing": "<span class='sr-only'>Loading...</span>",
      "lengthMenu":   "_MENU_",
      "info":         "Menampilkan _START_ - _END_ dari _TOTAL_ entri",
      "infoPostFix":  "",
      "search":       "_INPUT_",
      "sSearchPlaceholder":"Cari...",
      "url":          "",
      "paginate": {
        "sFirst":    "Awal",
        "sPrevious": "<i class='icon md-chevron-left'></i>",
        "sNext":     "<i class='icon md-chevron-right'></i>",
        "sLast":     "Akhir"
      },
    },
    "pagingType": "full_numbers",
    dom: "<'row'<'col-md-6'l><'col-md-6'f>>" + "<'row'<'col-md-12'tr>>" + "<'row'<'col-md-5'i><'col-md-7'p>>",
  });
});