<div class="modal fade details-1" id="details-1" tableindex="-1" role="dailog" aria-labelledby="details-1" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true"&times;></span>
				</button>
				<h4 class="modal-title text-center">Jeans</h4>
			</div>
			<div class="modal-body">
				<div class="container-fluid">
					<div class="row">
						<div class="col-sm-6">
							<div class="center-block">
								<img src="img/phone.png" alt="Jeans" class="details img-responsive">
							</div>
						</div>
						<div class="col-sm-6">
							<h4>Details</h4>
							<p>These are amazing , buy now!!!!!!!!!</p><br>
							<p>price:$50.00</p>
							<p>Brand:Levis</p>
							<form action="add_cart.php" method="post">
								<div class="form-group">
									<div class="col-xs-3">
										<label for="quantity" id="quantity-label">Quantity:</label>
										<input type="text" class="form-control" id="quantity" name="quantity">
									</div><br>
									<div class="form-group">
										<label for="size">Size:</label>
										<select name="size" id="size" class="form-control">
											<option value=""></option>
											<option value="s">s</option>
											<option value="m">m</option>
											<option value="l">l</option>
											<option value="xl">xl</option>
											<option value="xxl">xxl</option>
										</select>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button class="btn btn-default" data-dismiss="modal">Close</button>
				<button class="btn btn-warning" type="submit"><span class="fa fa-cart-plus" aria-hidden="true"></span>Add To Cart</button>
			</div>
		</div>
	</div>
</div>