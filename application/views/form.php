<!DOCTYPE html>
<html lang="tr">

<?php  $this->load->view("includes/header.php"); ?>

<body>


<div class="container-contact100">
		<div class="wrap-contact100">
			<form  method="POST" action="<?php echo base_url("formApp/insert") ?> " class="contact100-form validate-form">
				<span class="contact100-form-title">
					Bizimle İletişime Geçin
				</span>

				<div class="wrap-input100 validate-input bg1" data-validate="Please Type Your Name">
					<span class="label-input100">İsim Soyisim *</span>
					<input class="input100" type="text" name="name" placeholder="Enter Your Name">
				</div>

				<div class="wrap-input100 validate-input bg1 rs1-wrap-input100" data-validate = "Enter Your Email (e@a.x)">
					<span class="label-input100">Email *</span>
					<input class="input100" type="text" name="email" placeholder="Enter Your Email ">
				</div>

				<div class="wrap-input100 bg1 rs1-wrap-input100">
					<span class="label-input100">Telefon</span>
					<input class="input100" type="text" name="phone" placeholder="Enter Number Phone">
				</div>

				<div class="wrap-input100 input100-select bg1">
					<span class="label-input100">Servis *</span>
					<div>
						<select class="js-select2" name="service">
							<option>Lütfen Seçin</option>
							<option>E-Ticaret</option>
							<option>Tasarım</option>
							<option>Online Service</option>
						</select>
						<div class="dropDownSelect2"></div>
					</div>
				</div>

			

				<div class="wrap-input100 validate-input bg0 rs1-alert-validate" data-validate = "Please Type Your Message">
					<span class="label-input100">Mesaj</span>
					<textarea class="input100" name="message" placeholder="Mesajınızı Yazınız..."></textarea>
				</div>

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn">
						<span style="color: blue;" >
							Gönder
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
					</button>
				</div>
			</form>
		</div>
	</div>


	<?php  $this->load->view("includes/footer.php"); ?>

</body>

</html>