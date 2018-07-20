@yield('customjs')
<script src="{{ asset('js/popper.min.js') }}"></script>
<script>
$(function () {
  $('[data-toggle="popover"]').popover()
})
</script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>
