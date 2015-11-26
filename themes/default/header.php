<?php if (!defined('FLUX_ROOT')) exit; ?>
<?php $PlugandPlay = include('main/PlugandPlayConfig.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<?php if (isset($metaRefresh)): ?>
		<meta http-equiv="refresh" content="<?php echo $metaRefresh['seconds'] ?>; URL=<?php echo $metaRefresh['location'] ?>" />
		<?php endif ?>
		<title><?php echo Flux::config('SiteTitle'); if (isset($title)) echo ": $title" ?></title>
		<link rel="stylesheet" href="<?php echo $this->themePath('css/flux.css') ?>" type="text/css" media="screen" title="" charset="utf-8" />
		<link rel="stylesheet" href="<?php echo $this->themePath('css/style.css') ?>" type="text/css" media="screen" title="" charset="utf-8" />
		<link href="<?php echo $this->themePath('css/flux/unitip.css') ?>" rel="stylesheet" type="text/css" media="screen" title="" charset="utf-8" />		<?php if (Flux::config('EnableReCaptcha')): ?>
		<link href="<?php echo $this->themePath('css/flux/recaptcha.css') ?>" rel="stylesheet" type="text/css" media="screen" title="" charset="utf-8" />
		<?php endif ?>
		<!--[if IE]>
		<link rel="stylesheet" href="<?php echo $this->themePath('css/flux/ie.css') ?>" type="text/css" media="screen" title="" charset="utf-8" />
		<![endif]-->	
		<!--[if lt IE 7]>
		<script src="<?php echo $this->themePath('js/ie7.js') ?>" type="text/javascript"></script>
		<script type="text/javascript" src="<?php echo $this->themePath('js/flux.unitpngfix.js') ?>"></script>
		<![endif]-->
		<script type="text/javascript" src="<?php echo $this->themePath('js/jquery-1.7.1.min.js') ?>"></script>
		<script type="text/javascript" src="<?php echo $this->themePath('js/flux.datefields.js') ?>"></script>
		<script type="text/javascript" src="<?php echo $this->themePath('js/flux.unitip.js') ?>"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				$('.money-input').keyup(function() {
					var creditValue = parseInt($(this).val() / <?php echo Flux::config('CreditExchangeRate') ?>, 10);
					if (isNaN(creditValue))
						$('.credit-input').val('?');
					else
						$('.credit-input').val(creditValue);
				}).keyup();
				$('.credit-input').keyup(function() {
					var moneyValue = parseFloat($(this).val() * <?php echo Flux::config('CreditExchangeRate') ?>);
					if (isNaN(moneyValue))
						$('.money-input').val('?');
					else
						$('.money-input').val(moneyValue.toFixed(2));
				}).keyup();
				processDateFields();
			});
			function reload(){
				window.location.href = '<?php echo $this->url ?>';
			}
			$(document).ready(function(){
				$('#tabs div').hide();
				$('#tabs div:first').show();
				$('#tabs ul li:first').addClass('active');
				$('#tabs ul li a').click(function(){ 
				$('#tabs ul li').removeClass('active');
				$(this).parent().addClass('active'); 
				var currentTab = $(this).attr('href'); 
				$('#tabs div').hide();
				$(currentTab).show();
				return false;
				});
			});
			$(document).ready(function(){
				$('#tabs1 div').hide();
				$('#tabs1 div:first').show();
				$('#tabs1 ul li:first').addClass('active');
				$('#tabs1 ul li a').click(function(){ 
				$('#tabs1 ul li').removeClass('active');
				$(this).parent().addClass('active'); 
				var currentTab = $(this).attr('href'); 
				$('#tabs1 div').hide();
				$(currentTab).show();
				return false;
				});
			});
		</script>
		<script type="text/javascript">
			function updatePreferredServer(sel){
				var preferred = sel.options[sel.selectedIndex].value;
				document.preferred_server_form.preferred_server.value = preferred;
				document.preferred_server_form.submit();
			}
			var spinner = new Image();
			spinner.src = '<?php echo $this->themePath('img/spinner.gif') ?>';
			function refreshSecurityCode(imgSelector){
				$(imgSelector).attr('src', spinner.src);
				var clean = <?php echo Flux::config('UseCleanUrls') ? 'true' : 'false' ?>;
				var image = new Image();
				image.src = "<?php echo $this->url('captcha') ?>"+(clean ? '?nocache=' : '&nocache=')+Math.random();
				
				$(imgSelector).attr('src', image.src);
			}
			function toggleSearchForm()
			{
				$('.search-form').slideToggle('fast');
			}
		</script>
		
		<?php if (Flux::config('EnableReCaptcha') && Flux::config('ReCaptchaTheme')): ?>
		<script type="text/javascript">
			 var RecaptchaOptions = {
			    theme : '<?php echo Flux::config('ReCaptchaTheme') ?>'
			 };
		</script>
		<?php endif ?>
		
	</head>
	<body>
		<div id="wrapper">
			<div id="main">
				<div class="spacer">
				<div class="logo">
				<table width="100%" height="100%" border="0">
  <tr>
    <td align="center"><img src="<?php echo $this->themePath('img/logo.png') ?>"  /></td>
  </tr>
</table>


				</div>
				<div class="controlpanel">
				<?php include('main/loginpanel.php'); ?>
				</div>
					<div class="menu-top">
					<table width="100%" border="0" cellpadding="10">
  <tr>
    <td align="center"><a href="<?php echo $this->url('main')?>">Home</a></td>
    <td align="center"><a href="<?php echo $this->url('main','download')?>">Download</a></td>
    <td align="center"><a href="<?php echo $this->url('account','create'); ?>">Register</a></td>
    <td align="center"><a href="<?php echo $this->url('main','staff')?>">Staffs</a></td>
    <td align="center"><a href="<?php echo $this->url('vote')?>">Vote</a></td>
    <td align="center"><a href="<?php echo $this->url('main','donate')?>">Donate</a></td>
  </tr>
</table>

					</div>
				</div>				
			<div id="menu">
				</div>
				<div class="main-cont">
						<div class="sidebarleft">
							<div class="sidebar-menu" style="border:none; width:120px; height:230px; float:left; margin-left:70px; margin-top:60px">
							<table width="100%" border="0" height="100%" cellspacing="3">
  <tr>
    <td align="left" height="34"><a href="<?php echo $this->url('main','download')?>">Download</a></td>
  </tr>
  <tr>
    <td align="left" height="34"><a href="<?php echo $this->url('account','create'); ?>">Register</a></td>
  </tr>
  <tr>
    <td align="left" height="34"><a href="<?php echo $this->url('main','donate'); ?>">Donation</a></td>
  </tr>
  <tr>
    <td align="left" height="34"><a href="<?php echo $this->url('main','info'); ?>">Server Info</a></td>
  </tr>
  <tr>
    <td align="left" height="34"><a href="<?php echo $this->url('main','rules'); ?>">Server Rules</a></td>
  </tr>
  <tr>
    <td align="left" height="34"><a href="<?php echo $PlugandPlay['forum']; ?>" target="_blank">Community</a></td>
  </tr>
</table>
							</div>
							<div class="fb-page">
							<?php include('main/fbpage.php'); ?>
							</div>
						</div>
					<div class="containerbgtop"></div>
					<div class="containerbginner">
					<div class="centercontent">
							<div class="centercont">
								<?php if ($message=$session->getMessage()): ?>
									<p class="message"><?php echo htmlspecialchars($message) ?></p>
								<?php endif ?>
								<?php include 'main/submenu.php' ?>
								<?php include 'main/pagemenu.php' ?>
								<?php if (in_array($params->get('module'), array('donate', 'purchase'))) include 'main/balance.php' ?>