<script src="https://code.jquery.com/jquery-3.5.1.js" ></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
  <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js" ></script>
  
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @if(session('status'))
    <script>
        swal("{{ session('status') }}");
    </script>
    @endif

  <script type="text/javascript">
    $(function(){
      var navbar = $('.header-inner');
      $(window).scroll(function(){
        if($(window).scrollTop() <=40){
          navbar.removeClass('navbar-scroll');
        }else{
          navbar.addClass('navbar-scroll');
        }
      });
    });
  </script>
 
 <script>
   $(document).ready( function () {
    $('#myTable').DataTable();
  } );
 </script> 

<script>
   $(document).ready( function () {
    $('#myTable2').DataTable();
  } );
 </script> 
  
<script>
$(function()
{
  $('#temphold').click(function()
    {
        if ($('#temphold').is(":checked")) {
            $('#myModal').modal('show');
        }else {
            $('#myModal').modal('hide');
        }
    });
});

</script>

<script>
$(function()
{
  $('#hold').click(function()
    {
        if ($('#hold').is(":checked")) {
            $('#activemodal').modal('show');
        }else {
            $('#activemodal').modal('hide');
        }
    });
});

</script>


  </body>
</html>