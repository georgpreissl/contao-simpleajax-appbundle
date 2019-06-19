# contao-simpleajax-appbundle


# Frontend:

```
<a href="#" class="test_link">testme</a>
<script>




(function($){
	$(document).ready(function(){

		$.ajaxSetup({cache:false});

		$(".test_link").click(function(e){
			e.preventDefault();
			
			$.ajax({
				type: "POST",
				dataType: "json",
				url: "ajax_tags",
				success: function(ret){
					console.log("Success! " + ret);
				},
				error: function(request, status, error){
					console.log(error);
				},
			});			
			return false;
		});


	});
})(jQuery);


</script>

```