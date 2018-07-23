@yield('customjs')
<script src="{{ asset('themes/default/js/popper.min.js') }}"></script>
<script>
$(function () {
  $('[data-toggle="popover"]').popover()
})
</script>
<script src="{{ asset('themes/default/js/bootstrap.min.js') }}"></script>
</body>
</html>
