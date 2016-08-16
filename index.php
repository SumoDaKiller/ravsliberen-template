<?php defined( '_JEXEC' ) or die( 'Restricted access' );?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
<head>
	<jdoc:include type="head" />
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/general.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/template.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/font-awesome.min.css" type="text/css" />
</head>
<body>
	<!------------------------------------------------Header----------------------------------------------------------->
	<section id="header">
		<div id="logo">
			<img src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/images/Ravsliberen_logo.gif" alt="logo" />
		</div>
		<nav class="clearfix">
			<jdoc:include type="modules" name="top" />
		</nav>
    </section>
	<!-----------------------------------------------Content--------------------------------------------------------->
	<div class="wrapper">
		<section id="content">
			<jdoc:include type="component" />
		</section>
    </div>
	<!-----------------------------------------------Footer---------------------------------------------------------->
	<section class="footer">
		<div class="wrapper">
			<div class="row">
				<article class="col-md-4">
					<h2> KONTAKTOPLYSNINGER</h2>
					<p>Ravsliberen</p>
					<p>Algade 12A</p> 
					<p>9300 Sæby</p>
				</article>
				<article class="col-md-4 footerkolonne">
					<p>TLF: +45 98445527</p>
					<p>Fax: +45 98444480</p>
					<p><a href="mailto:ravsliberen@ravsliberen.dk">ravsliberen@ravsliberen.dk</a></p>
				</article>
				<article class="col-md-4 footerkolonne">
					<p>&copy; Ravsliberen 2015 </p>
					<!-----Facebook-knap----->
					<div class="pull-right">
						<a href="https://www.facebook.com/Ravsliberen?fref=ts" target="_blank"><i class="fa fa-facebook-square fa-4x fa-inverse"></i></a>
					</div>
				</article>
			</div>
    	</div> 
    </section>
</body>
</html>