<!-- Inicio de Sesion -->
<?php
    session_start();
    include('funciones/acceso_db.php');
?> 
<!-- Fin Inicio de Sesion -->
<!DOCTYPE html> <html> 
<meta http-equiv="content-type" content="text/html;charset=UTF-8">
<head> 
<title>SKGCL.com | SDC</title> 
<meta content='text/html;charset=utf-8' http-equiv='Content-Type'> 
<meta name='robots' content='ALL' /> <meta name='revisit-after' content='10 days' /> 
<meta name='robots' content='index,follow' /> <meta name='googlebot' content='index,follow' /> 
<meta name='description' content='Providing the e-sports community with a place to call home.' /> 
<link href='favicon.ico' rel='shortcut icon' /> 
<meta name='keywords' content='video game, online ladders, ladders, game ladders, online tournaments, tournaments, online leagues, leagues, clan competition, xbox 360, xbox 360 clans, ps3, playstation 3, ps3 clans, pc, personal computer, pc clans, call of duty, call of duty black ops, call of duty black ops ii, black ops, black ops ii, call of duty ghost, halo, halo 3, halo3, halo reach, halo 4, halo4, competitive gaming, esports, standings, compete, gamers, gamrs, gamrs.net, xbox live' /> 

<!-- Css -->

<link type='text/css' rel='stylesheet' href='css/style.css' /> 
<link type='text/css' rel='stylesheet' href='css/reset.css' /> 
<link href='../fonts.googleapis.com/css3821.css?family=Cabin:400,400italic,500,500italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'> 

<!-- Fin CSS -->

</head> 
<body> 

<div class='navcontainer'> <div class='navbar'> 

<!-- Inicio menu --->

<div id='nav'><a href='index.html' class='gamrs'> <div class='site'>SKGCL<span style='color:#093;'>.net</span></div> 
<div class='beta'>BETA V1</div> </a> <ul> 
<li><a href='index.html' style='width:44px;border-left: 1px solid #e6e6e6;'>INICIO</a></li> 
<li><a href='news.html' style='width:44px;'>NEWS!</a></li>
<li><a href='JavaScript:void(0);' style='width:72px;border-left:0px;'>USUARIOS</a> 
   <ul><li><a href='member-search.html'>Members Search</a></li></ul> 
   </li>
<li><a href='JavaScript:void(0);' style='width:114px;border-left:0px;'>COMPETENCIAS</a> 
       <ul> <li><a href='tournaments/xbox-360/call-of-duty-ghosts.html'> <img class='console' src='images/consoles/icons/xbox32.png' alt='console-name' /> Call of Duty: Ghosts</a> <ul>
<li><a href='tournament/104.html'>$100 4v4 Variant
</a></li> </ul> </li> </ul> </li> 
<li><a href='account/login.html' style='border-left:0px;width:44px;'>TIENDA</a></li> 
</ul> 
<div id='loggedinuser'> <ul> 
<?php
if(isset($_SESSION['usuario_nombre'])) {
?>
	 <div class='login'>       Bienvenido: <a href="perfil.php?id=<?=$_SESSION['usuario_id']?>"><strong><?=$_SESSION['usuario_nombre']?></strong></a><br /> </div>
	        
<a href="cuenta/logout.php" class='register'>Cerrar Sesión</a>

<?php
}else {
?>

<a href='cuenta/acceso.php' class='login'>Sign In</a> 

<a href='cuenta/registro.php' class='register'>Register</a> </ul> 
</div> 

<?php
 }
?> 

<!-- Fin menu -->

</div> 
                                    
<!-- Fin menu -->
                                   
                                    
<div class='undernav'></div> </div> </div><img class='homeslidercontain' src='images/home.png' alt='' /> <div id='wrap'> <div class='homesliderspacing'> <div class='title'>Competir para ganar Comienza Hoy!</div> <div class='tag'>SKGCL ofrece algunos de los mejores deportes electrónicos en línea torneos alrededor.</div> <div class='three'> <img src='images/icons/reg.png' alt='' /> <div class='titlesmall'>Registrate</div> <div class='descrip'>
  <p>Crea un usuario y emergete</p>
  <p>en la acción.</p>
</div> 
  <a class='button' href='account/register.html'>Registrar</a> </div> <div class='three'> <img src='images/icons/com.png' alt='' /> <div class='titlesmall'>Compite</div> <div class='descrip'>
    <p>Participa en los torneos</p>
    <p>que tendremos.</p>
  </div> 
  <a class='button' href='tournaments/xbox-360/call-of-duty-ghosts.html'>Competencias</a> </div> <div class='three'> <img src='images/icons/win.png' alt='' /> <div class='titlesmall'>Gana</div> <div class='descrip'>
    <p>Gana premios, dinero y</p>
    <p>equipo para ti o tu clan</p>
  </div> 
  <a class='button' href='news/Future-Tournaments.html'>Proximamente</a> </div> </div> 
                                    
<!-- Inicio container -->      
                              
<div class='main'> <div class='inner_main'> 

<!-- Fin container --> 
 
<!-- ||||||||||||||||||||||||||||||||||||||||| -->
                                    
<!-- Inicio sector noticias -->

<div class='leftcolumn'> 
<div class='announcementscontain'> 
<div class='headerbg'> 
<div class='pageheaders'>NEWS</div><img class='pagetitlefxright' src='images/divtitlefxright.png' alt='' /> <a href='news.html' class='viewallink'>View All Articles</a> </div> 
<div class='announcecontain'> 
<div class='left'> <img class='image' src='images/news/thumb/15.png' /> </div> 
<div class='right'> <a href='news/Future-Events.html' class='title'>Future Events</a> 
<div class='descrip'> <p>We have quite a bit in store for the new year but we would like your opinion to decide what we provide.</p> </div> 
</div> 
<a href='news/Future-Events.html' class='read'>Read</a> </div> 

<div class='announcecontain'> 
<div><form>
<select onChange="showRSS(this.value)">
<option value="General">Select an RSS-feed:</option>
<option value="General">Google News</option>
<option value="LOL">MSNBC News</option>
</select>
</form>
<br>
<div id="rssOutput">RSS-feed will be listed here...</div></div>
</div>
</div>
</div>

<!-- Fin sector noticias -->

<!-- ||||||||||||||||||||||||||||||||||||||||| -->

<!-- MEnu derecha -->

<!-- 1 --><div class='rightcolumn'>

<!-- 2 --><div class='tournamentcontainer'> 

<!-- 3 --><div class='headerbg'>

<!-- 4 --><div class='pageheaders'>COMPETENCIAS
<!-- 4 --></div>
 <img class='pagetitlefxright' src='images/divtitlefxright.png' alt='' /> 
<!-- 3 --></div> 

<!-- 5 --><div class='tournamentcontain'>
 <img class='tournamentimage1' src='images/consoles/icons/xbox32.png' alt='console' /> <img class='tournamentimage2' src='images/games/icons/ghost32.png' alt='game-name' /><a href='tournament/104.html' class='tournamentitle'>$100 4v4 Variant</a> 
 
<!-- 6 --> <div class='tournamentleft'> 
 
<!-- 7 -->
<div class='tournamentstart'> 
 <span class='left'>Fechas:</span> <span class='right'>04:00 pm EST 01/18/14</span> 
<!-- 7 --></div> 
 
<!-- 8 -->
<div class='tournamentprizes'> 
 <span class='left'>Cupos:</span> 
 <span class='right'>128 Teams</span>
<!-- 8 --></div> 
 
<!-- 9 -->
<div class='tournamentprizes'> 
 <span class='left'>Premios:</span> <span class='right'>$100 + Trophies </span>
<!-- 9 --></div> 
 
<!-- 6 --></div> 
 
<!-- 10 --><div class='tournamentright'> 
<!-- 10 --></div> 
 
<!-- 2 --></div>
<!-- 5 --></div> 

<!-- |||||||||||||||||||| -->

<div class='tournamentcontainer'> 
<div class='headerbg'>
<div class='pageheaders'>Partners</div>
 <img class='pagetitlefxright' src='images/divtitlefxright.png' alt='' /> 
</div> 
<div class='tournamentcontain'>
<center><img src='http://www.skgcl.com/img/images/ozone.png' alt='' /></center>
</div>
</div> 
  </div>

  
<!-- |||||||||||||||||||||||||||||-->

<!-- 1 --></div>

<!-- |||||||||||||||||||||||||||||-->



<!-- Fin menu derecha -->

<!-- ||||||||||||||||||||||||||||||||||||||||| -->

<!-- Fin div container -->
</div> 
<!-- Fin div container -->


<div id='footer-contain'> <div id='footer-div'> <div class='contain'> 

</div> </div> </div> </div> 

<div class='fullbotfooter'> <div class='botfooter'> <div class='botlogo'> <a href='index.html' class='logo'></a> <a href='index.html' class='home'>SKGCL.com<span style='color:#e9160a;'></span></a> 
      <div class='copyright'>© 2013 SKGCL.com, LLC. Todos los derechos reservados. </div> </div> <div class='linkcontain' style='width:300px;'> <a href='contact.html' class='contact'>Contacto</a> 
        <div class='cline'></div> 
        <a href='apply.html' class='apply'>Entrar al equipo</a> 
        <div class='appline'></div> 
        <a href='advertise.html' class='advert'>Terminos y condiciones</a> </div> <div class='text'> <span class='legal'>Trademarks, logos, and service marks displayed on this Site, including the names of all games are registered and unregistered Trademarks of their owners. The names of games are used only for the purpose of identifying a particular owner’s game that may be played by participanes .</span> 
          <div class='center'> <a href='#' class='social' style='opacity: 0.25;'><img class='iconsocial' src='images/fb.png' alt='facebook-link' /></a> <a href='../twitter.com/Gamrs_net.html' class='social'><img class='iconsocial' src='images/tw.png' alt='twitter-link' /></a> <a href='#' class='social' style='opacity: 0.25;'><img class='iconsocial' src='images/yt.png' alt='youtube-link' /></a> <a href='#' class='social' style='opacity: 0.25;'><img class='iconsocial' src='images/twi.png' alt='twitch-link' /></a> </div> <div class='tp'> <a href='page/terms-of-use.html' class='terms'>Terms of Use</a> <div class='tline'></div> <a href='page/privacy-policy.html' class='privacy'>Privacy Policy</a> </div> </div> </div> </div>
</div>			
<!-- Scropt -->            
            		
<script type="text/javascript">
var _qevents = _qevents || [];
(function() {
			var elem = document.createElement('script');
			elem.src = (document.location.protocol == "https:" ? "https://secure" : "http://edge") + ".quantserve.com/quant.js";
			elem.async = true;
			elem.type = "text/javascript";
			var scpt = document.getElementsByTagName('script')[0];
			scpt.parentNode.insertBefore(elem, scpt);
			})();
			
			_qevents.push({
			qacct:"p-VZBwVwWB-PV75"
		});
		</script> <noscript> <div style="display:none;"> <img src="../pixel.quantserve.com/pixel/p-VZBwVwWB-PV75.gif" height="1" width="1" alt="Quantcast"/> </div> </noscript> <script src="includes/js/jquery-1.9.1.js"></script> <script src="includes/js/jquery.ui.core.js"></script> <script src="includes/js/jquery.ui.widget.js"></script> <script src="includes/js/jquery.ui.tabs.js"></script> <script>
			$(function() {
				$( "#tabsv" ).tabs().addClass( "ui-tabs-vertical ui-helper-clearfix" );
				$( "#tabsv li" ).removeClass( "ui-corner-top" ).addClass( "ui-corner-left" );
				$( "#tabsbracket" ).tabs().addClass( "ui-tabsbracket" );
				$( "#tabsdebracket" ).tabs().addClass( "ui-tabsdebracket" );
				$( "#tabsinbox" ).tabs().addClass( "ui-tabsinbox" );
			});
		</script> <script src="includes/ckeditor/ckeditor.js" type="text/javascript"></script> <script src="includes/js/jquery-fallr-2.0.js"></script> <script>
			
			          $(".purchase").click(function(){
					   var the_class = $(this).attr("class").split(' ')[3];
						$( "#"+the_class ).click();
						return false;
			    });
			
			var theamount;
					$(document).ready(function(){
					        $('a[href^="#fallr-"]').click(function(){
			                		var id = $(this).attr('href').substring(7);
			                		methods[id].apply(this,[this]);
								   var the_class = $(this).attr("class").split(' ')[2];
								   theamount = the_class.split('_')[1];
			        $('.amount_change_value').text(theamount);
			                		return false;
			            		});
				        	var methods = {	    
			   
				      
							fpw : function(){
				                		$.fallr.show({
				                    			content :	'<div class="fpwcontain"><div id="fwp_inner_content">'
									+			'<div class="title"><div class="pageheaders">Password Recovery</div><img class="pagetitlefxright" /'+'></div>'
									
									+			'<div class="row">'
									+				'<span class="fieldname">Email Address</span>'
									+					'<form id="email_form"><input id="field" class="email_fwp_send" type="text" size="20" name="email_fwp_send"></form>'
									+			'</div></div>'
									
									+			'<div style="display:none;" id="fwp_no_email"><div class="nfound">Email Not Found</div></div>'
									
									+			'<div style="display:none;" id="fwp_success"><div class="title" style="padding: 10px 0px;">Success!</div>'
									+			'<div class="descrip">You should be receiving an email shortly with details on resetting your password</div></div>'
									
									+		'</div>',
				                    			position: 'center',
				                    			closeKey        : true,
				                    			closeOverlay    : true,
				                    			buttons         : {
								        button1 : {
								                text    : 'Send Email',                 // default button text
								                danger  : false,                // button color
								                onclick : function () {         // default button function 
											email = $('.email_fwp_send').val();;
												$.post( "functions/lostpassword.html", { email: email })
												  .done(function( data ) {
													if (data==1) 
													{// No email
														$("#fwp_no_email" ).show();
													}
													else if (data == 2)
													{// Email sent
														$("#fwp_success" ).show();
														$("#fwp_no_email" ).hide();
														$("#fwp_inner_content" ).hide();
														$(".fallr-button" ).hide();
													}
												  });
			
								                }
								            }
								        },
				                		});
				            		},
				            		credits : function(){
				                		$.fallr.show({
				                    			content :	'<div class="applycontain" style="margin: 0px;padding:0px 1px 10px 0px;">'
			
									+			'<div class="fallrtitle"><span class="amount_change_value">0</span> Credits</div>'
									
									+			'<div class="row2" style="margin: 25px 0px 0px;width: 580px;">'
									+				'<span class="creditdescrip">descrip</span>'
									+			'</div>'
									
									+		'</div>',
				                    			position: 'center',
				                    			closeKey        : true,
				                    			closeOverlay    : true,
				                    			buttons         : {
								        button1 : {
								                text    : 'Purchase',                 // default button text
								                danger  : false,                // button color
								                onclick : function () {         // default button function 
								                    //$.fallr.hide(); 
												  $( "#credits_"+theamount ).click();
												  
								                }
								            }
								        },
				                		});
				            		},
				            		memberships : function(){
				                		$.fallr.show({
				                    			content :	'<div class="applycontain" style="margin: 0px;padding:0px 1px 10px 0px;">'
			
									+			'<div class="fallrtitle"><span class="amount_change_value">0</span> Month Membership</div>' 
									
									+			'<div class="row2" style="margin: 25px 0px 0px;width: 580px;">'
									+				'<span class="creditdescrip">descrip</span>'
									+			'</div>'
									
									+		'</div>',
				                    			position: 'center',
				                    			closeKey        : true,
				                    			closeOverlay    : true,
				                    			buttons         : {
								        button1 : {
								                text    : 'Purchase',                 // default button text
								                danger  : false,                // button color
								                onclick : function () {         // default button function 
								                    //$.fallr.hide(); 
												  $( "#memberships_"+theamount ).click();
								                }
								            }
								        },
				                		});
				            		},
				        	};
				    	});
					</script> <script type='text/javascript'>
		window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
		d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
		_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute('charset','utf-8');
		$.src='../v2.zopim.com/index4625.html?1nFiQupUoej4n0G3rNk3bacjWmMXhXoW';z.t=+new Date;$.
		type='text/javascript';e.parentNode.insertBefore($,e)})(document,'script');
		</script> <script type='text/javascript'>
			var wasSubmitted = false;    
			function checkBeforeSubmit(){
				if(!wasSubmitted) {
					wasSubmitted = true;
					return wasSubmitted;
				}
				return false;
			}    
		</script> <script type="text/javascript">
		    var disqus_shortname = 'gamrs'; // required: replace example with your forum shortname
		
		    (function () {
		        var s = document.createElement('script'); s.async = true;
		        s.type = 'text/javascript';
		        s.src = '//' + disqus_shortname + '.disqus.com/count.js';
		        (document.getElementsByTagName('HEAD')[0] || document.getElementsByTagName('BODY')[0]).appendChild(s);
		    }());
		 </script> 

<!-- Sistema RSS -->

<script>
function showRSS(str)
{
if (str.length==0)
  { 
  document.getElementById("rssOutput").innerHTML="";
  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("rssOutput").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","getrss.php?q="+str,true);
xmlhttp.send();
}
</script>

<!--  Fin Sistema RSS -->


</body> 
</html>
