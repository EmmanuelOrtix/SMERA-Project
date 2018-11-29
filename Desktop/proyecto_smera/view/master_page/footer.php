
 </div>
  </div>
<!-- jQuery 3 -->
<script src="style/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="style/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="style/dist/js/adminlte.min.js"></script>
<script src="style/bower_components/PACE/pace.min.js"></script>
<script src="style/bower_components/fastclick/lib/fastclick.js"></script>
<script src="style/bower_components/raphael/raphael.min.js"></script>
<script src="style/bower_components/morris.js/morris.min.js"></script>

<!-- myScripts-->

<script src="style/jquery/myScripts.js"></script>
<script src="style/jquery/validarut.js"></script> 
  <script type="text/javascript">
  // To make Pace works on Ajax calls
  $(document).ajaxStart(function () {
    Pace.restart()
  })
  $('.ajax').click(function () {
    $.ajax({
      url: '#', success: function (result) {
        $('.ajax-content').html(',')
      }
    })
  })
</script>
 <script>
  	$(function () {
    "use strict";
  	var donut = new Morris.Donut({
      element: 'sales-chart',
      resize: true,
      colors: ["#5cb85c", "#d9534f", "#f39c12", "#00c0ef"],
      data: [
        {label: "Espacio Disponibles", value: <?php echo $estacionamientosLibres;?>},
        {label: "Espacio Ocupados", value: <?php echo $Ocupados; ?>},
        {label: "Discapacitado Ocupados", value: <?php echo $contadorDis; ?>},
        {label: "Discapacitado Disponibles ", value: <?php echo $ocupadoDis; ?>}
      ],
      hideHover: 'auto'
    });
    });
</script>   
  

</body>
</html>