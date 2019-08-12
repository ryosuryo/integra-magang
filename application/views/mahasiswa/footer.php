</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="<?php echo base_url("assets/bootstrap/js/bootstrap.min.js"); ?>"></script>
<!-- membuat javascript untuk membuat menu collapse di mobile -->
<script src="<?php echo base_url("assets/bootstrap/js/collapse.js"); ?>"> </script>
<script>
	$(document).ready(function(){
		$("#sidebarCollapse").on('click',function(){
			$("#sidebar").toggleClass('active');
		})
	})
</script>
<script src="https://cdn.ckeditor.com/4.11.2/standard/ckeditor.js"></script>
<script>
	CKEDITOR.replace('editor1');
</script>
</body>
</html>