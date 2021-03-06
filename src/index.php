<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="utf-8">
	<title>Home - TargET</title>
	<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body onLoad="SlideShow()">
	<section>
		<div id="content" class="wrap">
			<div id="tagline">
				<div>
					<div>
						<img id="taglinelogo"src="img/logo.png">
						<img id="taglinenamalogo" src="img/namalogo.png">
					</div>
					<div id="texttag">
						<div id="text1">Welcome to TargET.</div>
						<div id="text2">Manage and sharing your task easier.</div>
					</div>
					<div>
						<img id="slide" name='SlideShow' src="img/ilustrate1.JPG" alt="gambar" />
					</div>
				</div>
			</div>
			<div id="login">
				<form id="form" class="form" action= "javascript:cekLogin();">
					<p>
						<label for="login">Username</label>
						<input id="idlogin" type="text" name="login" placeholder="Username">
					</p>
					<p>
						<label for="password">Password</label>
						<input id="passlogin" type="password" name="password" placeholder="Password">
					</p>
					<p>
						<input type="checkbox" name="remember">
						<label for="remember">Remember me</label>
					</p>
					<p>
						<input id="submitlogin" type="submit" name="submit" value="Sign in">
					</p>
					<div id = "loginresponse"><b>here!</b></div>
				</form>
			</div>
			<div id="register">
			<form id="daftar" class="daftar" action="javascript:cekRegister();">
				<p>
					<label for="daftar">Create an account</label>
				</p>
				<div>
					<input id="username" type="text" name="username" placeholder="Username" pattern="^.{5,}$" required>
					<img id="valid1" src="">
				</div>
				<div>
					<input id="password" type="password" name="password" placeholder="Password" pattern="^.{8,}$" required>
					<img id="valid2" src="">
				</div>
				<div>
					<input id="copassword" type="password" name="copassword" placeholder="Confirm Password" pattern="^.{8,}$" required>
					<img id="valid3" src="">
				</div>
				<div>
					<input id="namalengkap" type="text" name="namalengkap" placeholder="Nama Lengkap" pattern="^.+ .+$" required>
					<img id="valid4" src="">
				</div>
				<p>
					<label for="tanggal">Tanggal Lahir</label>
				</p>
				<div>
					<label id="date" for="date">Tahun - Bulan - Hari </label>
					<select id="tahun" onchange="cekulta();">
						<option></option>
						<option>1955</option>
						<option>1956</option>
						<option>1957</option>
						<option>1958</option>
						<option>1959</option>
						<option>1960</option>
						<option>1961</option>
						<option>1962</option>
						<option>1963</option>
						<option>1964</option>
						<option>1965</option>
						<option>1966</option>
						<option>1967</option>
						<option>1968</option>
						<option>1969</option>
						<option>1970</option>
						<option>1971</option>
						<option>1972</option>
						<option>1973</option>
						<option>1974</option>
						<option>1975</option>
						<option>1976</option>
						<option>1977</option>
						<option>1978</option>
						<option>1979</option>
						<option>1980</option>
						<option>1981</option>
						<option>1982</option>
						<option>1983</option>
						<option>1984</option>
						<option>1985</option>
						<option>1986</option>
						<option>1987</option>
						<option>1988</option>
						<option>1989</option>
						<option>1990</option>
						<option>1991</option>
						<option>1992</option>
						<option>1993</option>
						<option>1994</option>
						<option>1995</option>
						<option>1996</option>
						<option>1997</option>
						<option>1998</option>
						<option>1999</option>
						<option>2000</option>
						<option>2001</option>
						<option>2002</option>
						<option>2003</option>
						<option>2004</option>
						<option>2005</option>
						<option>2006</option>
						<option>2007</option>
						<option>2008</option>
						<option>2009</option>
						<option>2010</option>
						<option>2011</option>
						<option>2012</option>
						<option>2013</option>
					</select>
					<select id="bulan" onchange="cekulta();">
						<option></option>
						<option value = "1">1</option>
						<option value = "2">2</option>
						<option value = "3">3</option>
						<option value = "4">4</option>
						<option value = "5">5</option>
						<option value = "6">6</option>
						<option value = "7">7</option>
						<option value = "8">8</option>
						<option value = "9">9</option>
						<option value = "10">10</option>
						<option value = "11">11</option>
						<option value = "12">12</option>
					</select>
					<select id="tanggal" onchange="cekulta();">
						<option></option>
						<option value = "1">1</option>
						<option value = "2">2</option>
						<option value = "3">3</option>
						<option value = "4">4</option>
						<option value = "5">5</option>
						<option value = "6">6</option>
						<option value = "7">7</option>
						<option value = "8">8</option>
						<option value = "9">9</option>
						<option value = "10">10</option>
						<option value = "11">11</option>
						<option value = "12">12</option>
						<option value = "13">13</option>
						<option value = "14">14</option>
						<option value = "15">15</option>
						<option value = "16">16</option>
						<option value = "17">17</option>
						<option value = "18">18</option>
						<option value = "19">19</option>
						<option value = "20">20</option>
						<option value = "21">21</option>
						<option value = "22">22</option>
						<option value = "23">23</option>
						<option value = "24">24</option>
						<option value = "25">25</option>
						<option value = "26">26</option>
						<option value = "27">27</option>
						<option value = "28">28</option>
						<option value = "29">29</option>
						<option value = "30">30</option>
						<option value = "31">31</option>
					</select>
					<img id="valid7" src="">
				</div>
				<div>
					<input id="email" type="text" name="email" placeholder="Email" pattern="^.+@.+\...+$" required>
					<img id="valid5" src="">
				</div>
				<p>
					<label for="avatar">Foto Profil</label>
				</p>
				<p>
					<input type="file" name="upload" id="inputfile" onchange="check_image_jpg();">
					<img id="valid6" src="">
				</p>
				<p>
					<input id="submit" type="submit" name="submit" value="Daftar" disabled="disabled">
				</p>
				<div id = "regresponse"><b>here!</b></div>
			</form>
			</div>
		</div>
	</section>
	<footer id="footer_wrap">
		<hr>TargET &#169 2013
	</footer>
	<script type="text/javascript" src="fungsi.js">
	
	</script>
	
</body>
</html>