<?php 

    $title = 'Contact'; 
    require_once('head.php');
    require_once('nav.php');
?>

<section id="concept">
	<div class="container">
		<div class="row">
			<div class="col-md-6 d-none d-sm-block align-self-center" style="margin-top: 50px;">
				<img src= assets/img/agent_rondier.png alt="Ordinateur" class="img-fluid rounded ">
			</div>
			<div class="col-12 col-md-6 col-sm-6 mt-5">
				<h3 class="h3_contact">Contactez-nous</h3>
                <div class="form-area pt-5">  
                    <form role="form" name="contact" method="POST" action="#">
                    <br style="clear:both">
                        <div class="form-group d-flex">
                            <span style="padding: .375rem .75rem;margin-bottom: 0;font-size: 1rem;font-weight: 400;line-height: 1.5;text-align: center;background-color: #e9ecef;border: 1px solid #ced4da;">
                                <i class="fa fa-user"></i>
                            </span>
                            <input style="border-radius: 0px!important;" type="text" class="form-control" id="name" name="nom_contact" placeholder="Nom" required>
                        </div>
                        <div class="form-group d-flex">
                            <span style="padding: .375rem .75rem;margin-bottom: 0;font-size: 1rem;font-weight: 400;line-height: 1.5;text-align: center;background-color: #e9ecef;border: 1px solid #ced4da;">
                                @
                            </span>
                            <input style="border-radius: 0px!important;" type="text" class="form-control" id="email" name="email_contact" placeholder="Email" required>
                        </div>
                        <div class="form-group d-flex">
                            <span style="padding: .375rem .75rem;margin-bottom: 0;font-size: 1rem;font-weight: 400;line-height: 1.5;text-align: center;background-color: #e9ecef;border: 1px solid #ced4da;">
                                <i class="fa fa-phone"></i>
                            </span>
                            <input style="border-radius: 0px!important;" type="text" class="form-control" id="mobile" name="tel_contact" placeholder="Téléphone" required>
                        </div>
                        <div class="form-group">
                        <textarea style="border-radius: 0px!important;" class="form-control" type="textarea" id="message" name="message_contact" placeholder="Message" maxlength="140" rows="7"></textarea>                   
                        </div>
            
                    <button type="submit" id="submit" name="submit" value="envoyer" class=" btnn btn btn-primary pull-right mt-2" style="text-transform: none;">Envoyer</button>

                    <div class="checkbox">
                        <label style="margin-top: 20px;">
                            <input type="checkbox" name="souvenir" required> J'ai lue et j'accepte les <a href="politique">Condition Génerale d'utilisation</a>
                        </label>
                    </div>

                    </form>
                </div>
            </div>
        </div>

        <?php include ('../traitement/traitement_contact.php'); ?>
        
	</div>
</section>

<?php require_once('footer.php'); ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
<script type="text/javascript" src="assets/js/carousel.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/bs-init.js"></script>
<script src="assets/js/creative.js"></script>


</body>
</html>