<div class="site-footer">
		<div class="inner first">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-lg-4">
						<div class="widget">
							<h3 class="heading">Про Dreamtour</h3>
							<p>Dreamtour — ваш надійний партнер у створенні незабутніх подорожей і вражень.</p>
						</div>
						<div class="widget">
							<ul class="list-unstyled social">
								<li><a href="https://x.com/"><span class="icon-twitter"></span></a></li>
								<li><a href="https://www.instagram.com/"><span class="icon-instagram"></span></a></li>
								<li><a href="https://www.facebook.com/"><span class="icon-facebook"></span></a></li>
								<li><a href="https://www.linkedin.com/"><span class="icon-linkedin"></span></a></li>
								<li><a href="https://dribbble.com/"><span class="icon-dribbble"></span></a></li>
								<li><a href="https://www.pinterest.com/"><span class="icon-pinterest"></span></a></li>
								<li><a href="https://www.apple.com/"><span class="icon-apple"></span></a></li>
								<li><a href="https://www.google.com/"><span class="icon-google"></span></a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-6 col-lg-2 pl-lg-5">

					</div>
					<div class="col-md-6 col-lg-2">

					</div>
					<div class="col-md-6 col-lg-4">
						<div class="widget">
							<h3 class="heading">Контакти</h3>
							<ul class="list-unstyled quick-info links">
								<li class="email"><a href="#">mail@megamail.com</a></li>
								<li class="phone"><a href="#">+38 (012) 345 6789</a></li>
								<li class="address"><a href="#">43 Raymouth Rd. Baltemoer, London 3910</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="inner dark">
			<div class="container">
				<div class="row text-center">
					<div class="col-md-8 mb-3 mb-md-0 mx-auto">
						<p>Copyright &copy;<script>document.write(new Date().getFullYear());</script>. All Rights Reserved. &mdash; Developed by <strong>Ivan Momot</strong><br/>Designed by <a href="https://untree.co" class="link-highlight">Untree.co</a> Distributed By <a href="https://themewagon.com" target="_blank" >ThemeWagon</a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="overlayer"></div>
	<div class="loader">
		<div class="spinner-border" role="status">
			<span class="sr-only">Loading...</span>
		</div>
	</div>
    <script src="./assets/js/jquery-3.4.1.min.js"></script>
	<script src="./assets/js/popper.min.js"></script>
	<script src="./assets/js/bootstrap.min.js"></script>
	<script src="./assets/js/owl.carousel.min.js"></script>
	<script src="./assets/js/jquery.animateNumber.min.js"></script>
	<script src="./assets/js/jquery.waypoints.min.js"></script>
	<script src="./assets/js/jquery.fancybox.min.js"></script>
	<script src="./assets/js/aos.js"></script>
	<script src="./assets/js/moment.min.js"></script>
	<script src="./assets/js/daterangepicker.js"></script>
	<script src="./assets/js/typed.js"></script>
	<script>
		$(function() {
			var slides = $('.slides'),
			images = slides.find('img');

			images.each(function(i) {
				$(this).attr('data-id', i + 1);
			})

			var typed = new Typed('.typed-words', {
				strings: [" Парижа."," Рима."," Барселони.", " Цюриха.", " Лондона.", " Токіо."," Торонто.", " Афін."],
				typeSpeed: 80,
				backSpeed: 80,
				backDelay: 4000,
				startDelay: 1000,
				loop: true,
				showCursor: true,
				preStringTyped: (arrayPos, self) => {
					arrayPos++;
					console.log(arrayPos);
					$('.slides img').removeClass('active');
					$('.slides img[data-id="'+arrayPos+'"]').addClass('active');
				}

			});
		})
	</script>
	<script>
		$(function() {
   	 	start = moment();
    	var end = moment().add(7, 'days');

    	$('input[name="daterange"]').daterangepicker({
        startDate: start,
        endDate: end,
        opens: 'left',
        locale: {
            format: 'MM/DD/YYYY'
        }
    });

    $('input[name="daterange"]').val(start.format('MM/DD/YYYY') + ' - ' + end.format('MM/DD/YYYY'));
});
	</script>
	<script src="./assets/js/custom.js"></script>
</body>
</html>
