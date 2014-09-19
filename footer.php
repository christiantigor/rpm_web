<div class="content contact bg-grey" id="contact">
	<div class="content-box">
    	<h1 class="title-section">Contact Us</h1>
        <p>
        	Please do not hesitate to contact us if you need any further information about RPM.
        </p>
        
        <div class="divMsg"></div>
        
    	<form class="form-contact clearfix" id="formContact">
        	<div>
                <div class="tableform">
                    <div class="input-column"><input type="text" id="contact-name" value="" placeholder="Full name"></div>
                </div>
                <div class="tableform">
                    <div class="input-column"><input type="text" id="contact-company" value="" placeholder="Company/Organization"></div>
                </div> 	
            </div>
        	<div>
                <div class="tableform">
                    <div class="input-column"><input type="text" id="contact-email" value="" placeholder="Email"></div>
                </div>
                <div class="tableform">
                    <div class="input-column"><textarea name="message" id="contact-message" placeholder="Message"></textarea></div>
                </div>
                <div class="tableform">
                	<div class="label">Insert number</div>
                    <div class="input-column">
                    	<div class="capKontak">
                            <div><img style="border:0; cursor:pointer" id="captcha" src="captcha.php?action=captcha" align="absmiddle"></div>
                            <div><input name="capca" id="capca" type="text"> <img id="RefreshCaptcha" src="img/refresh.png" align="absmiddle"></div>
                        </div>
                    </div>
                </div>
                <div class="tableform">
                    <div class="input-column"><input type="submit" id="btn_contact" value="SEND MESSAGE"></div>
                </div>
            </div>
        </form>
    </div>
</div>



<footer>
	<div class="content-box">
    	<div class="table">
        	<div class="table-cell logo">
            	<span><img src="img/logo.png"></span> DEVELOPED BY <a href="http://www.tritronik.com" target="_blank">PT. TRICADA INTRONIK</a>
            </div>
            <div class="table-cell">
            	<nav> 
                    <ul class="nav-bottom">
                        <li>
                            <strong>PT. TRICADA INTRONIK</strong><br>
                            Jalan Aria Jipang 9
                            Bandung 40115 - Indonesia<br>
                            Tel +62 22 426 3040, 
                            Fax +62 22 426 3041, 
                            Email : info@tritronik.com
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</footer>
<div class="float-menu"><div class="bg"></div><div class="list-menu"></div></div>

<script>

	$(function(){
		$("body").delegate( ".linkscroll", "click", function() {
			target = $(this).data("target");
			$('html, body').animate({
			  scrollTop: $(target).offset().top
			}, 1000);
			
		});
		
		//refresh capca
		var clicks_capca = 0;
		$("#RefreshCaptcha").click(function(){
			clicks_capca++;
			$("#captcha").attr("src", "captcha.php?action=captcha&" + "?act=" + clicks_capca);
		});
		
	});
	
</script>
<script src="js/js.js" language="javascript"></script>
<script src="js/cek_contact.js" language="javascript"></script>
</body>
</html>