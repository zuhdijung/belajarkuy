<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( ".datepicker" ).datepicker({
      changeMonth: true,
      changeYear: true,
      dateFormat:'dd M yy'
    });
  } );
  </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <script type="text/javascript">
    	$('.carousel').carousel({
		  interval: 2000
		});
    </script>
    <script type="text/javascript">
	$(document).ready(function(){       
	    var scroll_start = 0;
	    var startchange = $('#startchange');
	    var offset = startchange.offset();
	    if (startchange.length){
	        $(document).scroll(function() { 
	            scroll_start = $(document).scrollTop();
	            if(scroll_start > offset.top) {
	                $(".navbar").css('background-color', '#f37e29');
	                $(".navbar").css('border-bottom', '1px solid #fff');
	            } else {
	                $(".navbar").css('border-bottom', 'none');
	                $(".navbar").css('background-color', 'transparent');
	            }
	        });
	    }
	 });
	$( function() {
	    $( ".datepicker" ).datepicker();
	  } );
    </script>