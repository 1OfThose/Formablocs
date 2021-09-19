<?php
$page ='contact';
require_once (__DIR__ . '/includes/header.php');

?>
<?php
    $array = array("firstname" => "", "name" => "", "email" => "", "phone" => "", "subject" => "", "message" => "", "firstnameError" => "", "nameError" => "", "emailError" => "", "phoneError" => "", "subjectError" => "", "messageError" => "", "isSuccess" => false);
    $emailTo = "christo26.g@gmail.com";

    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    { 
        $array["firstname"] = test_input($_POST["firstname"]);
        $array["name"] = test_input($_POST["name"]);
        $array["email"] = test_input($_POST["email"]);
        $array["phone"] = test_input($_POST["phone"]);
        $array["subject"] = test_input($_POST["subject"]);
        $array["message"] = test_input($_POST["message"]);
        $array["isSuccess"] = true; 
        $emailText = "";
        
        if (empty($array["firstname"]))
        {
            $array["firstnameError"] = "Veuillez saisir votre prénom :";
            $array["isSuccess"] = false; 
        } 
        else
        {
            $emailText .= "Firstname: {$array['firstname']}\n";
        }

        if (empty($array["name"]))
        {
            $array["nameError"] = "Veuillez saisir votre nom :";
            $array["isSuccess"] = false; 
        } 
        else
        {
            $emailText .= "Name: {$array['name']}\n";
        }
        if(empty($array["email"]))
        {
            $array["emailError"] = "Veuillez saisir une email :";
            $array["isSuccess"] = false;
        }
        else{
            if(!isEmail($array["email"])) 
            {
                $array["emailError"] = "Veuillez saisir un email valide :";
                $array["isSuccess"] = false; 
            } 
            else
            {
                $emailText .= "Email: {$array['email']}\n";
            }
        }
        if (!isPhone($array["phone"]))
        {
            $array["phoneError"] = "Veuillez saisir un numéro de téléphone valide :";
            $array["isSuccess"] = false; 
        }
        else
        {
            $emailText .= "Phone: {$array['phone']}\n";
        }
        if (empty($array["subject"]))
        {
            $array["subjectError"] = "Veuillez saisir le sujet de votre message :";
            $array["isSuccess"] = false; 
        }
        else
        {
            $emailText .= "Sujet: {$array['subject']}\n";
        }
        if (empty($array["message"]))
        {
            $array["messageError"] = "Veuillez saisir un message :";
            $array["isSuccess"] = false; 
        }
        else
        {
            $emailText .= "Message: {$array['message']}\n";
        }
        if($array["isSuccess"]) 
        {
            $headers = "From: {$array['firstname']} {$array['name']} <{$array['email']}>\r\nReply-To: {$array['email']}";
            if (mail($emailTo, "Un message de votre site : {$array['subject']}", $emailText, $headers)) {
              echo "<p class='comments'>Votre message a bien été envoyé!</p>";
            } else {
              echo "<p class='comments'>Erreur ! Votre message n'a pas été envoyé</p>";
            }
        }
        
        //echo json_encode($array);
        
    }

    function isEmail($email) 
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }
    function isPhone($phone) 
    {
        return preg_match("/^[0-9 ]*$/",$phone);
    }
    function test_input($data) 
    {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
 
?>
<section id="contact">

	<div class="container">
		<div class="contact-container">

			<div class="contact-text">
				<h1>Vous avez une question ?</h1>
				<p>Vous souhaitez plus d’information, sur une prestation, une formation ou l’accompagnement proposé par Formablocs, n’hésitez pas à nous contacter via le formulaire ci-dessous. Nous nous engageons à vous répondre sous 2 jours ouvrés. A très bientôt !</p>
			</div>

			<form id="contact-form" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" class="red-hover">

				<div class="contact-row">
					<div class="contact-group">
						<label for="name">Nom <span class="color">*</span></label>
						<input id="name" type="text" name="name" class="form-control" placeholder="Entrez votre nom">
						<p class="comments"></p>
					</div>
					<div class="contact-group">
						<label for="firstname">Prénom <span class="color">*</span></label>
						<input id="firstname" type="text" name="firstname" class="form-control" placeholder="Entrez votre prénom">
						<p class="comments"></p>
					</div>
				</div>

				<div class="contact-row">
					<div class="contact-group">
						<label for="email">Adresse e-mail <span class="color">*</span></label>
						<input id="email" type="text" name="email" class="form-control" placeholder="Entrez votre adresse e-mail">
						<p class="comments"></p>
					</div>

					<div class="contact-group">
						<label for="phone">Téléphone</label>
						<input id="phone" type="tel" name="phone" class="form-control" placeholder="Entrez votre numéro de téléphone">
						<p class="comments"></p>
					</div>
				</div>

				<div class="contact-group">
					<label for="subject">Sujet du message <span class="color">*</span></label>
					<input id="subject" type="text" name="subject" placeholder="Entrez votre sujet du message">
					<p class="comments"></p>
				</div>

				<div class="textarea">
					<img src="<?=$domain?>/icons/ROND ORANGE.svg" alt="">
					<img src="<?=$domain?>/icons/ROND ORANGE.svg" alt="">
					<textarea id="message" name="message" placeholder="Ecrivez votre message" rows="8"></textarea>
					<p class="comments"></p>
				</div>

				<p class="legal-notice">En nous contactant, vous consentez au traitement de vos données personnelles par Formablocs pour répondre et suivre votre demande. <br> <a href="#">Plus d’information dans notre Politique de confidentialité</a></p>

				<button type="submit" class="button">Envoyer</button>
			
       		</form>

			<div class="contact-banner">
				<div class="blur-div">
					<h1>Formablocs</h1>
					<h4>Adresse postale</h4>
					<p>02 00 99 11 88</p>
				</div>
			</div>

			<img src="<?=$domain?>/illustrations/CONTACT.svg" alt="Page de contact">

		</div>
	</div>

</section>
<?php

require_once (__DIR__ . '/includes/footer.php');

?>