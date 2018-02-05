<div class="col-sm-12" style="background-color: #21242c;color: #fff;" >
			<center><h6>Privacy Policy  |  Terms & Conditions  |  Disclaimer</h6></center>	
			<center><h5>Copyright 2017 bvimsr.com, All rights reserved.</h5></center>	
			<center><script type="text/javascript">
						function getCookieVal(offset)
						{
						var endstr = document.cookie.indexOf (";", offset);
						if (endstr == -1)
						endstr = document.cookie.length;
						return unescape(document.cookie.substring(offset, endstr)); }
						function GetCookie(name)
						{
						var arg = name + "=";
						var alen = arg.length;
						var clen = document.cookie.length;
						var i = 0;
						while (i < clen)
						{
						var j = i + alen;
						if (document.cookie.substring(i, j) == arg)
						return getCookieVal (j);
						i = document.cookie.indexOf(" ", i) + 1;
						if (i == 0)
						break;
						}
						return null; } function SetCookie (name, value)
						{
						var argv = SetCookie.arguments;
						var argc = SetCookie.arguments.length;
						var expires = (2 < argc) ? argv[2] : null;
						var path = (3 < argc) ? argv[3] : null;
						var domain = (4 < argc) ? argv[4] : null;
						var secure = (5 < argc) ? argv[5] : false;
						document.cookie = name + "=" + escape (value) +((expires == null) ? "" : ("; expires=" +expires.toGMTString())) +((path == null) ? "" : ("; path=" + path)) +((domain == null) ? "" : ("; domain=" + domain)) +((secure == true) ? "; secure" : ""); }
						var expDays = 30; var expDate = new Date(); expDate.setTime(expDate.getTime() + (expDays*24*60*60*1000));
						function DisplayInfo()
						{ var cnt = GetCookie('cnt'); if(cnt == null) { SetCookie('cnt','1'); return 1; } else { var cnt1 = parseInt(cnt) + 1; SetCookie('cnt',cnt1,expDate); return cnt;
						}
						}
						document.write("visits : " + DisplayInfo() + " times.");
					</script> </center>