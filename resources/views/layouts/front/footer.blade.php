<!-- Footer -->
<div id="footer-wrapper">
	<div id="footer" class="container">
		<header>
			<h2 style="color:#e8efff;">Questions or comments? <strong style="color:#e8efff;">Get in touch:</strong></h2>
		</header>
		<div class="row">
			<div class="12u 12u(mobile)">
				<section>
					<form method="post" action="#">
						<div class="row 50%">
							<div class="6u 12u(mobile)">
								<input name="name" style="color:#000000;" placeholder="Name" type="text" value="{{Auth::user()->fullName}}" disabled />
							</div>
							<div class="6u 12u(mobile)">
								<input name="email" style="color:#000000;" placeholder="Email" type="text" value="{{Auth::user()->email}}" " disabled/>
							</div>
						</div>
						<div class="row 50%">
							<div class="12u">
								<textarea name="message" style="color:#000000;" placeholder="Message" style="resize:none;"></textarea>
							</div>
						</div>
						<div class="row 50%">
							<div class="12u">
								<a href="#" style="color:#e8efff;" class="form-button-submit button icon fa-envelope">Send Message</a>
							</div>
						</div>
					</form>
				</section>
			</div>
		</div>
	</div>
	<div id="copyright" class="container-fluid footerfinal">
		<ul class="links">
			<li style="color:#e8efff;">&copy; Korean Restaurant Locator. All rights reserved.</li>
	</div>
</div>