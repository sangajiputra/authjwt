<!-- END MAIN -->
<div class="clearfix"></div>
<footer>
  <div class="container-fluid">
    <p class="copyright">&copy; 2017 <a href="https://www.themeineed.com" target="_blank">Theme I Need</a>. All Rights Reserved.</p>
  </div>
</footer>
</div>
<!-- END WRAPPER -->
<!-- Javascript -->
<script>
$(document).ready(function() {
$('pre code').each(function(i, block) {
hljs.highlightBlock(block);
});
});
</script>
<script src="<?= config('App')->assets ?>/vendor/jquery/jquery.min.js"></script>
<script src="<?= config('App')->assets ?>/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="<?= config('App')->assets ?>/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="<?= config('App')->assets ?>/scripts/klorofil-common.js"></script>
</body>

</html>
