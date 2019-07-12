
<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('js/materialize.min.js')}}"></script>

<script>

	$(document).ready(function(){  
    	$('.collapsible').collapsible();
    	$('.sidenav').sidenav();
		$("#logout-anchor").click(function(){
			$('#logout-form').submit();
		});
		$("#logout-anchorino").click(function(){
			$('#logout-formerino').submit();
		});
		$('.dropdown-trigger').dropdown({
			constrainWidth: false,
			closeOnClick: false,
			hover: true
		});
		$('.dropdowner').dropdown({
			constrainWidth: false,
			closeOnClick: false,
			hover: true,
			dropdownEl: $('.dropdowners')
		});
		$('.dropdown-login').dropdown({
			constrainWidth: false,
			closeOnClick: false,
		});
        $(document).ready(function(){
            $('.collapsible').collapsible();
        });

    });

</script>
