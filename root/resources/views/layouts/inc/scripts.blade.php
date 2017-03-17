<!-- Core  -->
<script src="{{asset('dist/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('dist/vendor/bootstrap/bootstrap.min.js')}}"></script>
<script src="{{asset('dist/vendor/animsition/animsition.min.js')}}"></script>
<script src="{{asset('dist/vendor/asscroll/jquery-asScroll.min.js')}}"></script>
<script src="{{asset('dist/vendor/mousewheel/jquery.mousewheel.min.js')}}"></script>
<script src="{{asset('dist/vendor/asscrollable/jquery.asScrollable.all.min.js')}}"></script>
<script src="{{asset('dist/vendor/ashoverscroll/jquery-asHoverScroll.min.js')}}"></script>
<script src="{{asset('dist/vendor/waves/waves.min.js')}}"></script>

<!-- Plugins -->
<script src="{{asset('dist/vendor/switchery/switchery.min.js')}}"></script>
<script src="{{asset('dist/vendor/intro-js/intro.min.js')}}"></script>
<script src="{{asset('dist/vendor/screenfull/screenfull.min.js')}}"></script>
<script src="{{asset('dist/vendor/slidepanel/jquery-slidePanel.min.js')}}"></script>
<script src="{{asset('dist/vendor/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
<script src="{{asset('dist/vendor/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('dist/vendor/datatables-bootstrap/dataTables.bootstrap.min.js')}}"></script>
<script src="{{asset('dist/vendor/dropify/dropify.min.js')}}"></script>
<script src="{{asset('dist/vendor/bootstrap-select/bootstrap-select.min.js')}}"></script>
<script src="{{asset('dist/vendor/bootstrap-sweetalert/sweet-alert.min.js')}}"></script>
<script src="{{asset('dist/vendor/chart-js/Chart.min.js')}}"></script>
<script src="{{asset('dist/vendor/JSZip-2.5.0/jszip.min.js')}}"></script>
<script src="{{asset('dist/vendor/pdfmake-0.1.18/build/pdfmake.min.js')}}"></script>
<script src="{{asset('dist/vendor/pdfmake-0.1.18/build/vfs_fonts.js')}}"></script>
<script src="{{asset('dist/vendor/Buttons-1.2.4/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('dist/vendor/Buttons-1.2.4/js/buttons.bootstrap.min.js')}}"></script>
<script src="{{asset('dist/vendor/Buttons-1.2.4/js/buttons.colVis.min.js')}}"></script>
<script src="{{asset('dist/vendor/Buttons-1.2.4/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('dist/vendor/Buttons-1.2.4/js/buttons.print.js')}}"></script>

<!-- Scripts -->
<script src="{{asset('dist/js/core.min.js')}}"></script>
<script src="{{asset('dist/js/site.min.js')}}"></script>

<script src="{{asset('dist/js/sections/menu.min.js')}}"></script>
<script src="{{asset('dist/js/sections/menubar.min.js')}}"></script>
<script src="{{asset('dist/js/sections/sidebar.min.js')}}"></script>

<script src="{{asset('dist/js/components/asscrollable.min.js')}}"></script>
<script src="{{asset('dist/js/components/animsition.min.js')}}"></script>
<script src="{{asset('dist/js/components/slidepanel.min.js')}}"></script>
<script src="{{asset('dist/js/components/switchery.min.js')}}"></script>
<script src="{{asset('dist/js/components/tabs.min.js')}}"></script>
<script src="{{asset('dist/js/components/panel.min.js')}}"></script>
<script src="{{asset('dist/js/components/bootstrap-select.min.js')}}"></script>
<script src="{{asset('dist/js/components/datatables.js')}}"></script>
<script src="{{asset('dist/js/app.js')}}"></script>
<script>
$('button#delete').on('click', function(){
  swal({   
    title: "Hapus Data",
    text: "Anda yakin akan menghapus data tersebut?",
    type: "warning",   
    showCancelButton: true,
    confirmButtonClass: "btn-danger",
    confirmButtonText: "Hapus",
    cancelButtonClass: "btn-success",
    cancelButtonText: "Batal",
    closeOnConfirm: false,
    closeOnCancel: false
  }, function(isConfirm) {
    if (isConfirm) {
      swal("Berhasil", "Data berhasil dihapus.", "success");
      $("#deleteform").submit();
    } else {
      swal("Batal", "Data batal dihapus :)", "error");
    }
  });
});
</script>
<script>
  (function(document, window, $) {
    'use strict';

    var Site = window.Site;
    $(document).ready(function() {
      Site.run();
    });
  })(document, window, jQuery);
</script>