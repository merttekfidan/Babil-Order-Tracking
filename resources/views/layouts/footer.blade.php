<!-- Footer -->
<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                © 2018 Upcube - Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesdesign.
            </div>
        </div>
    </div>
</footer>
<!-- End Footer -->




<!-- jQuery  -->
<script src="{{ asset('assets/js/jquery.min.js')}}"></script>
<script src="{{ asset('assets/js/popper.min.js')}}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('assets/js/modernizr.min.js')}}"></script>
<script src="{{ asset('assets/js/waves.js')}}"></script>
<script src="{{ asset('assets/js/jquery.slimscroll.js')}}"></script>
<script src="{{ asset('assets/js/jquery.nicescroll.js')}}"></script>
<script src="{{ asset('assets/js/jquery.scrollTo.min.js')}}"></script>


<!--Morris Chart-->
<script src="{{ asset('assets/plugins/morris/morris.min.js')}}"></script>
<script src="{{ asset('assets/plugins/raphael/raphael-min.js')}}"></script>



<script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('assets/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
<!-- Buttons examples -->
<script src="{{ asset('assets/plugins/datatables/dataTables.buttons.min.js')}}"></script>
<script src="{{ asset('assets/plugins/datatables/buttons.bootstrap4.min.js')}}"></script>
<script src="{{ asset('assets/plugins/datatables/jszip.min.js')}}"></script>
<script src="{{ asset('assets/plugins/datatables/pdfmake.min.js')}}"></script>
<script src="{{ asset('assets/plugins/datatables/vfs_fonts.js')}}"></script>
<script src="{{ asset('assets/plugins/datatables/buttons.html5.min.js')}}"></script>
<script src="{{ asset('assets/plugins/datatables/buttons.print.min.js')}}"></script>
<script src="{{ asset('assets/plugins/datatables/buttons.colVis.min.js')}}"></script>
<script src="{{ asset('assets/plugins/datatables/dataTables.responsive.min.js')}}"></script>
<script src="{{ asset('assets/pages/datatables.init.js')}}"></script>

<script src="{{ asset('assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js')}}"></script>
<script src="{{ asset('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
<script src="{{ asset('assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('assets/plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('assets/pages/form-advanced.js')}}"></script>

<!-- Alertify js -->
<script src="{{ asset('assets/plugins/alertify/js/alertify.js')}}"></script>
<script src="{{ asset('assets/pages/alertify-init.js')}}"></script>





<!-- App js -->
<script src="{{ asset('assets/js/app.js')}}"></script>
<script src="{{ asset('assets/pages/dashborad.js')}}"></script>
<script>
  var topSiparis = document.getElementById("topSiparis").children[0].innerHTML;
  var tamamlananSiparis = document.getElementById("tamamlananSiparis").children[0].innerHTML;
  var iadeSiparis = document.getElementById("iadeSiparis").children[0].innerHTML;
  var iptalSiparis = document.getElementById("iptalSiparis").children[0].innerHTML;
Morris.Donut({
  element: 'donut-example',
  data: [
    {label: "Toplam Sipariş", value: topSiparis},
    {label: "Tamamlanan Sipariş", value: tamamlananSiparis},
    {label: "İade Sipariş", value: iadeSiparis},
    {label: "İptal Sipariş", value: iptalSiparis}
  ],
  backgroundColor: '#ccc',
  colors: [
    '#6FD088',
    '#ED4F84',
    '#4C83FB',
    '#000'
  ]
});
</script>
</body>
</html>
