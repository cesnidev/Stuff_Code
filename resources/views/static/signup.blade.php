
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <title>VIM - Project</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- CSS -->
        <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=PT+Sans:400,700'>
		<link rel="stylesheet" href="css/foundation.css">
		<link rel="stylesheet" href="css/proyecto.form.css">
        <link rel="stylesheet" href="css/test/coming-soon-style.css">
		<link rel="stylesheet" href="css/foundation-icons.css" />
		<script src="js/modernizr.custom.34978.js"></script>

		<!--<script src="js/vendor/modernizr.js"></script>-->

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <link rel="shortcut icon" href="img/favicon.ico">
    </head>

    <body style="border-top: 3px solid #fff;">
	
        <!-- Header -->
        <div class="container">
            <div class="header row" style="border-bottom: 3px solid #dc222b;" >
                <div class="large-4 columns">
                    <!--<a href="index.php"><img src="img/logo2.png" style="width:30%;margin-top:10px;"></a>-->
                    {!! Html::decode(Html::link('/',Html::image('img/logo2.png',null,array('style'=>'width:30%;margin-top:10px;')))) !!}
                </div>
                <div class="tel-skype large-8 columns">
                    <p><i class="step fi-telephone size-72"></i> Phone: 0039 123 45 679 </p>
                </div>
            </div>
        </div>
<section>
        	
<div id="eventicaforms">

			<ul id="progressbar">

				<li class="active">Basic Info</li>
				<li class="">Profile</li>
				<li class="">Experience</li>
				<li class="">Availability</li>
				<li class="">Legal</li>

			</ul>

			<!-- fieldsets -->

			<fieldset>
			<form id="basicuser" data-abide="ajax">
				<h2 class="fs-title">Basic User</h2>

				<div class="row" style="height:200px; border:1px solid #404040;border-radius:8px;">
				</div><br>

				<div class="row">
					<div class="large-2 columns">
											   <label class="inline"><font size="-1">Full Name:</font></label>
					</div>
					<div class="large-6 columns">
						<div class="row">
											 
											 <div class="large-6 columns">
											   <input type="text" id="tca_border_text" placeholder="First Name" name="first_name" required pattern="[a-zA-Z]+"/>
											   <small class="error">first name is required and must be a real name.</small>
											 </div>
											 <div class="large-6 columns">
											   <input type="text" id="tca_border_text" placeholder="Last Name" name="last_name" required pattern="[a-zA-Z]+"/>
											   <small class="error">last name is required.</small>
											</div>
						</div>
										
					</div> <div class="large-4 columns"></div>
				</div>

				<div class="row">
								<div class="large-2 columns">
									<label class="inline"><font size="-1">Nickname:</font></label>
								</div>
								<div class="large-6 columns">
									<input type="text" id="tca_border_text" name="last_name" required pattern="[a-zA-Z]+"/>
									<small class="error">Nickname is required.</small>
								</div>
								<div class="large-4 columns"></div>
				</div>
				<input type="submit"  class="nextbasic action-button" value="Next" />
			</form>
			</fieldset>
			<fieldset>
			<form id="profile" data-abide="ajax">
				<h2 class="fs-title">Profile</h2>

				<div class="row" style="height:200px; border:1px solid #404040;border-radius:8px;">
				</div><br>

				<div class="row">
					<div class="large-2 columns">
											   <label class="inline"><font size="-1">Full Name:</font></label>
					</div>
					<div class="large-6 columns">
						<div class="row">
											 
											 <div class="large-6 columns">
											   <input type="text" id="tca_border_text" placeholder="First Name" name="first_name2" required pattern="[a-zA-Z]+"/>
											   <small class="error">first name is required and must be a real name.</small>
											 </div>
											 <div class="large-6 columns">
											   <input type="text" id="tca_border_text" placeholder="Last Name" name="last_name2" required pattern="[a-zA-Z]+"/>
											   <small class="error">last name is required.</small>
											</div>
						</div>
										
					</div> <div class="large-4 columns"></div>
				</div>

				<div class="row">
								<div class="large-2 columns">
									<label class="inline"><font size="-1">Nickname:</font></label>
								</div>
								<div class="large-6 columns">
									<input type="text" id="tca_border_text" name="last_name2" required pattern="[a-zA-Z]+"/>
									<small class="error">Nickname is required.</small>
								</div>
								<div class="large-4 columns"></div>
								
				</div>
				<input type="submit"  class="nextbasic action-button" value="Next" />
			</form>
			</fieldset>
			<fieldset>
			<form id="experience" data-abide="ajax">
				<h2 class="fs-title">Experience</h2>

				<div class="row" style="height:200px; border:1px solid #404040;border-radius:8px;">
				</div><br>

				<div class="row">
					<div class="large-2 columns">
											   <label class="inline"><font size="-1">Full Name:</font></label>
					</div>
					<div class="large-6 columns">
						<div class="row">
											 
											 <div class="large-6 columns">
											   <input type="text" id="tca_border_text" placeholder="First Name3" name="first_name" required pattern="[a-zA-Z]+"/>
											   <small class="error">first name is required and must be a real name.</small>
											 </div>
											 <div class="large-6 columns">
											   <input type="text" id="tca_border_text" placeholder="Last Name3" name="last_name" required pattern="[a-zA-Z]+"/>
											   <small class="error">last name is required.</small>
											</div>
						</div>
										
					</div> <div class="large-4 columns"></div>
				</div>

				<div class="row">
								<div class="large-2 columns">
									<label class="inline"><font size="-1">Nickname:</font></label>
								</div>
								<div class="large-6 columns">
									<input type="text" id="tca_border_text" name="last_name3" required pattern="[a-zA-Z]+"/>
									<small class="error">Nickname is required.</small>
								</div>
								<div class="large-4 columns"></div>
				</div>
				<input type="submit"  class="nextbasic action-button" value="Next" />
			</form>
			</fieldset>
			<fieldset>
			<form id="availability" data-abide="ajax">
				<h2 class="fs-title">Availability</h2>

				<div class="row" style="height:200px; border:1px solid #404040;border-radius:8px;">
				</div><br>

				<div class="row">
					<div class="large-2 columns">
											   <label class="inline"><font size="-1">Full Name:</font></label>
					</div>
					<div class="large-6 columns">
						<div class="row">
											 
											 <div class="large-6 columns">
											   <input type="text" id="tca_border_text" placeholder="First Name3" name="first_name" required pattern="[a-zA-Z]+"/>
											   <small class="error">first name is required and must be a real name.</small>
											 </div>
											 <div class="large-6 columns">
											   <input type="text" id="tca_border_text" placeholder="Last Name3" name="last_name" required pattern="[a-zA-Z]+"/>
											   <small class="error">last name is required.</small>
											</div>
						</div>
										
					</div> <div class="large-4 columns"></div>
				</div>

				<div class="row">
								<div class="large-2 columns">
									<label class="inline"><font size="-1">Nickname:</font></label>
								</div>
								<div class="large-6 columns">
									<input type="text" id="tca_border_text" name="last_name3" required pattern="[a-zA-Z]+"/>
									<small class="error">Nickname is required.</small>
								</div>
								<div class="large-4 columns"></div>
				</div>
				<input type="submit"  class="nextbasic action-button" value="Next" />
			</form>
			</fieldset>
			<fieldset>
			<form id="legal" data-abide="ajax">
				<h2 class="fs-title">Legal</h2>

				<div class="row" style="height:200px; border:1px solid #404040;border-radius:8px;">
				</div><br>

				<div class="row">
					<div class="large-2 columns">
											   <label class="inline"><font size="-1">Full Name:</font></label>
					</div>
					<div class="large-6 columns">
						<div class="row">
											 
											 <div class="large-6 columns">
											   <input type="text" id="tca_border_text" placeholder="First Name3" name="first_name" required pattern="[a-zA-Z]+"/>
											   <small class="error">first name is required and must be a real name.</small>
											 </div>
											 <div class="large-6 columns">
											   <input type="text" id="tca_border_text" placeholder="Last Name3" name="last_name" required pattern="[a-zA-Z]+"/>
											   <small class="error">last name is required.</small>
											</div>
						</div>
										
					</div> <div class="large-4 columns"></div>
				</div>

				<div class="row">
								<div class="large-2 columns">
									<label class="inline"><font size="-1">Nickname:</font></label>
								</div>
								<div class="large-6 columns">
									<input type="text" id="tca_border_text" name="last_name3" required pattern="[a-zA-Z]+"/>
									<small class="error">Nickname is required.</small>
								</div>
								<div class="large-4 columns"></div>
				</div>
				<input type="submit"  class="nextbasic action-button" value="Next" />
			</form>
			</fieldset>
		</div>
 </section>


        <!-- Javascript -->
		<script src="js/proyecto.js"></script>
		<script src="js/proyecto.form.js"></script>
        <!--<script src="js/jquery.js"></script>-->
        <script src="js/jquery.backstretch.min.js"></script>
        <script src="js/vim.scripts.js"></script>
		
		<script type='text/javascript' src='js/jquery.easing.1.3.js'></script> 


	    <script src="js/foundation.min.js"></script>
	    <script>
	      $(document).foundation();
	    </script>
	    

    </body>

</html>

