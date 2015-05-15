<script>
		window.csrfToken = '<?php echo csrf_token(); ?>';
	</script>
	<!-- SCRIPTS -->
	<script src="{{ asset('js/jquery-2.1.3.min.js') }}"></script>
	<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>

	<!-- ES UN POP UP DE NOTIFICACIONES -->
	<script src="{{ asset('js/jquery-confirm.js') }}"></script>
	<script src="{{ asset('js/data_link.js') }}"></script>

	<script type="text/javascript">
		$("[data-toggle='tooltip']").tooltip();
	</script>