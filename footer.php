      <hr>

      <footer>
        <p id="copyright">Invictus Woods Extended Care | 29240 N Co Hwy 28, Glasford, IL. 61533 | Phone 309-696-3333</p>
      </footer>
    </div> <!-- /container -->


    <!-- Bootstrap, jQeury and our JavaScript
    ================================================== -->
    <!-- CDN -->
  <script src ="https://code.jquery.com/jquery-2.2.0.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script src="scripts/jquery.fancybox.js"></script>
	<script type="text/javascript">
	$(document).ready(function() {

	$('.fancybox').fancybox();

	});
	</script>
	<script>
	if (!window.jQuery) {
	    alert('jQuery is not loaded');
	}
	if (makeActive != 'nope'){
		$(makeActive).addClass('active');
	}
	var width = $(window).width();


	function shortenMenu(howWide){
		if (howWide < 992 && howWide > 771) {
			$('#services > a').html('About');
			$('#about > a').html('About');
			$('#facility > a').html('Facility');
			$('#contact > a').html('Contact');
		}
	}

	var height = window.innerHeight ? window.innerHeight : $(window).height()

	function fullJumboPhone(howTall){
		if (howTall < 741) {
			$('.jumbotron').height(howTall - 45);
		}
	}

	shortenMenu(width);
	fullJumboPhone(height);
	</script>
  </body>
</html>
