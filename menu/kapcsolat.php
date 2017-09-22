

<div class="container">
<div class="content">
     
     
      

		<div class="row">
	        <div class="col-md-8">
		        <div class="row">
		        	<h2 class="pull-left">Kapcsolat</h2>
		        </div>
		        <div class="row">
		        	<div class="col-md-6"><img src="img/IMG_0262.jpg" width="300" class="thumbnail"></div>
		        	<div class="col-md-6"><h3>Kapcsolat <br>(Foglalás/Felvílágosítás)</h3>
			            
			            <ul>
			                <li>Farkas Zoltán</li>
			                <li>
			                    <i class="fa fa-map" aria-hidden="true"></i> 6060 Tiszakécske, Nyúl utca 26 <a href="http://maps.google.com/maps?q=210+Louise+Ave,+Nashville,+TN+37203">térkép</a>
			                </li>
			                <li>
			                    <span class="icon-bar"><i class="fa fa-envelope" aria-hidden="true"></i></span> <a href="mailto:info@tundevendeghaz.hu">info@tundevendeghaz.hu</a>
			                </li>
			                <li>                    
			                    <span class="icon-bar"><i class="fa fa-phone" aria-hidden="true"></i></span><a href="tel:01234567890"> +36 30 524 0025</a>
			                </li>
			            </ul>
		            </div>
	        	</div>
	        	

	        </div>
        </div>
       

           <div class="row">
           		<div class="col-md-3"></div>
	           	<div class="col-md-6">


						<?php
					$alertInputName   = '';
					$alertInputEmail  = '';
					$alertInputText   = '';
					$success = '<p class="alert alert-success">Email elküldve!</p>';
					$bool  = false;
					if(isset($_POST['btnSend'])){
						
						if($_POST['inputName']==null){
							$alertInputName = '<p class="alert alert-danger">Nem adta meg a nevét!</p>';
							$bool = true;

						}
						if($_POST['inputEmail']==null){
							$alertInputEmail = '<p class="alert alert-danger">Nem adta meg az email címét</p>';
							$bool = true;
						}
						if($_POST['inputText']==null){
							$alertInputText .= '<p class="alert alert-danger">A szöveg mező nem lehet üres</p>';
							$bool = true;
						}
						if(!$bool){
							//email elküldése
							echo $success;

						}
						

					}

					?>
		           	<h3>Üzenet küldése: </h3>
		           	<form method="post" action="kapcsolat" name="formEmail">
					  <div class="form-group">
					    <label for="formGroupExampleInput">Feladó:</label>
					    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Feladó neve" name="inputName">
					    <div class="form-group"><?php echo $alertInputName ?></div>
					  </div>
					  <div class="form-group">
					  	<label for="formGroupExampleInput3">Email:</label>
					  	<input type="email" class="form-control" id="formGroupExampleInput3" placeholder="Email" name="inputEmail">
					  	<div class="form-group"><?php echo $alertInputEmail ?></div>
					  </div>
					  <div class="form-group">
					    <label for="formGroupExampleInput2">Üzenet</label>
					    
					    <textarea class="form-control" id="formGroupExampleInput2" placeholder="Email szövege" rows="7" name="inputText"></textarea>
					    <div class="form-group"><?php echo $alertInputText ?></div>
					  </div>
					  <div class="form-group">				    
					    <input type="submit" class="btn btn-primary" id="formGroupExampleInput2" title="Küldés" name="btnSend">
					  </div>
					</form>


					
				</div>



			
				<div class="col-md-3"></div>
           </div>
    </div>

</div>