<main>
		<div id="position">
			<div class="container">
				<ul>
					<li><a href="#">Home</a>
					</li>
					<li><a href="#">Category</a>
					</li>
					<li>Page active</li>
				</ul>
			</div>
		</div>
		<!-- End position -->


		<div class="container margin_60">
			<div class="row">
				<div class="col-lg-8 add_bottom_15">
					<div class="form_title">
						<h3><strong>1</strong>Your Details</h3>
						<p>
							Mussum ipsum cacilds, vidis litro abertis.
						</p>
					</div>
					<div class="step">
						<div class="row">
							<div class="col-sm-6">
								<div class="form-group">
									<label>First name</label>
									<input type="text" class="form-control" id="firstname_booking" name="firstname_booking">
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<label>Last name</label>
									<input type="text" class="form-control" id="lastname_booking" name="lastname_booking">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6">
								<div class="form-group">
									<label>Email</label>
									<input type="email" id="email_booking" name="email_booking" class="form-control">
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<label>Confirm email</label>
									<input type="email" id="email_booking_2" name="email_booking_2" class="form-control">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6">
								<div class="form-group">
									<label>Telephone</label>
									<input type="text" id="telephone_booking" name="telephone_booking" class="form-control">
								</div>
							</div>
						</div>
					</div>
					<!--End step -->

					<div class="form_title">
						<h3><strong>2</strong>Payment Information</h3>
						<p>
							Mussum ipsum cacilds, vidis litro abertis.
						</p>
					</div>
					<div class="step">
						<div class="form-group">
							<label>Name on card</label>
							<input type="text" class="form-control" id="name_card_bookign" name="name_card_bookign">
						</div>
						<div class="row">
							<div class="col-md-6 col-sm-12">
								<div class="form-group">
									<label>Card number</label>
									<input type="text" id="card_number" name="card_number" class="form-control">
								</div>
							</div>
							<div class="col-md-6 col-sm-12">
								<img src="<?php echo base_url(); ?>assets/default/img/cards.png" width="207" height="43" alt="Cards" class="cards">
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<label>Expiration date</label>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<input type="text" id="expire_month" name="expire_month" class="form-control" placeholder="MM">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<input type="text" id="expire_year" name="expire_year" class="form-control" placeholder="Year">
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Security code</label>
									<div class="row">
										<div class="col-4">
											<div class="form-group">
												<input type="text" id="ccv" name="ccv" class="form-control" placeholder="CCV">
											</div>
										</div>
										<div class="col-8">
											<img src="<?php echo base_url(); ?>assets/default/img/icon_ccv.gif" width="50" height="29" alt="ccv"><small>Last 3 digits</small>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--End row -->

						<hr>

						<h4>Or checkout with Paypal</h4>
						<p>
							Lorem ipsum dolor sit amet, vim id accusata sensibus, id ridens quaeque qui. Ne qui vocent ornatus molestie, reque fierent dissentiunt mel ea.
						</p>
						<p>
							<img src="<?php echo base_url(); ?>assets/default/img/paypal_bt.png" alt="Image">
						</p>
					</div>
					<!--End step -->

					<div class="form_title">
						<h3><strong>3</strong>Billing Address</h3>
						<p>
							Mussum ipsum cacilds, vidis litro abertis.
						</p>
					</div>
					<div class="step">
						<div class="row">
							<div class="col-sm-6">
								<div class="form-group">
									<label>Country</label>
									<select class="form-control" name="country" id="country">
										<option value="" selected>Select your country</option>
										<option value="Europe">Europe</option>
										<option value="United states">United states</option>
										<option value="Asia">Asia</option>
									</select>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6">
								<div class="form-group">
									<label>Street line 1</label>
									<input type="text" id="street_1" name="street_1" class="form-control">
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<label>Street line 2</label>
									<input type="text" id="street_2" name="street_2" class="form-control">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 col-sm-12">
								<div class="form-group">
									<label>City</label>
									<input type="text" id="city_booking" name="city_booking" class="form-control">
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="form-group">
									<label>State</label>
									<input type="text" id="state_booking" name="state_booking" class="form-control">
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="form-group">
									<label>Postal code</label>
									<input type="text" id="postal_code" name="postal_code" class="form-control">
								</div>
							</div>
						</div>
						<!--End row -->
					</div>
					<!--End step -->

					<div id="policy">
						<h4>Cancellation policy</h4>
						<div class="form-group">
							<label>
								<input type="checkbox" name="policy_terms" id="policy_terms">I accept terms and conditions and general policy.</label>
						</div>
						<a href="<?php echo base_url(); ?>tour/confirmation" class="btn_1 green medium">Book now</a>
					</div>
				</div>

				<aside class="col-lg-4" id="sidebar">
					<div class="theiaStickySidebar">
						<div class="box_style_1" id="booking_box">
							<h3 class="inner">- Summary -</h3>
							<table class="table table_summary">
								<tbody>
									<tr>
										<td>
											Adults
										</td>
										<td class="text-right">
											2
										</td>
									</tr>
									<tr>
										<td>
											Children
										</td>
										<td class="text-right">
											0
										</td>
									</tr>
									<tr>
										<td>
											Dedicated tour guide
										</td>
										<td class="text-right">
											$34
										</td>
									</tr>
									<tr>
										<td>
											Insurance
										</td>
										<td class="text-right">
											$34
										</td>
									</tr>
									<tr class="total">
										<td>
											Total cost
										</td>
										<td class="text-right">
											$154
										</td>
									</tr>
								</tbody>
							</table>
							<a class="btn_full" href="<?php echo base_url(); ?>tour/confirmation">Book now</a>
							<a class="btn_full_outline" href="#"><i class="icon-right"></i> Continue shopping</a>
						</div>
					</div>
					<!--End sticky -->
				</aside>

			</div>
			<!--End row -->
		</div>
		<!--End container -->
	</main>
	<!-- End main -->