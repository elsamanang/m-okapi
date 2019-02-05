<div id="contact" class="content-section-a">
		<div class="container">
			<div class="row">
			
			<div class="col-md-6 col-md-offset-3 text-center wrap_title">
				<h2>Creer un nouvel exercice budgetaire</h2>
				<p class="lead" style="margin-top:0">Veillez remplir correctement les champs svp !</p>
			</div>
			
			<form action="" method="post" >
				<div class="col-md-6 col-md-offset-3">
				    <input type="hidden" name="id" value="<?php echo $this->session->Id;?>">
					<div class="form-group">
						<label for="InputName">Budget Initial</label>
						<div class="input-group">
							<input type="number" class="form-control" name="BudgetInitial" id="InputName" placeholder="Budget Initial" required>
							<span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span>
						</div>
					</div>
					<div class="form-group">
						<label for="InputEmail">Date Debut</label>
						<div class="input-group">
                            <select name="debutJour" class="form-control">
                            	<option>2</option>
                            	<option>3</option>
                            	<option>4</option>
                            </select><span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span>
                            <select name="debutMois" class="form-control">
                            	<option>2</option>
                            	<option>3</option>
                            	<option>4</option>
                            </select><span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span>
                            <select name="debutAn" class="form-control">
                            	<option>2</option>
                            	<option>3</option>
                            	<option>4</option>
                            </select><span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span>
						</div>
					</div>
					<div class="form-group">
						<label for="InputEmail">Date Fin</label>
						<div class="input-group">
                            <select name="finJour" class="form-control">
                            	<option>2</option>
                            	<option>3</option>
                            	<option>4</option>
                            </select><span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span>
                            <select name="finMois" class="form-control">
                            	<option>2</option>
                            	<option>3</option>
                            	<option>4</option>
                            </select><span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span>
                            <select name="finAn" class="form-control">
                            	<option>2</option>
                            	<option>3</option>
                            	<option>4</option>
                            </select><span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span>
						</div>
					</div>
					<input type="submit" name="submit" id="submit" value="Submit" class="btn wow tada btn-embossed btn-primary pull-right">
				</div>
			</form>
		</div>
	</div>