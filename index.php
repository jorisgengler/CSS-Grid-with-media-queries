<!DOCTYPE html>
<!created 22-12-2017>
<!Joris Gengler>

<html>

<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CSS-Grid</title>

  <!-- CSS -->
  <link rel="STYLESHEET" href="main.css" type="text/css">

  <!-- javascript-->
  	<script src="https://use.fontawesome.com/b46fce0e6e.js"></script>

		<script src="javascript/scrollreveal.js"></script>
		<script src="javascript/scrollreveal.min.js"></script>


</head>

<body>



  <nav>
    <ul>
			<img src="web_images/logo.png" height="auto" width="50" style="padding: 5px 50px 0px 10px;">
      <li><a href="#section1" title="Home" > Button 1</a></li>
      <li><a href="#section3" title="About" > Button 2 </a></li>
      <li><a href="#section5" title="Skills"> Button 3 </a></li>
      <li><a href="#section3" title="My work"> Button 4 </a></li>
      <li><a href="#section7" title="Contact"> Button 5 </a></li>
    </ul>
  </nav>

<div class="grid">

  <div id="home" class="home"></div>

  <div id="section1" class="section1">
    <div class="section1text">
			<center><h1>Head 1</h1></center></br>
			<div class="textvlak">
				<p>
					Deze site is opgebouwd in CSS-Grid en heeft de volgende functies,<br><br>
					<li>Scrollreveal</li><br>
					<li>Smooth page scroll</li><br>
					<li>Media queries (onder de 768px zullen de secties onderelkaar staan)</li><br>

				</p>
			</div>
    </div>
  </div>

  <div id="section2" class="section2">
 		<div id="object1" class="object1"><img class ="fotoright" src="web_images/section1.jpg" alt="Plank met stokbrood"></div>
  </div>

  <div id="section3" class="section3">
 		<img class ="fotoleft" src="web_images/section3.jpg" alt="Plank met stokbrood">
  </div>

  <div id="section4" class="section4">
		<div class="section1text">
			<center><h1>Head 1</h1></center></br>
			<div class="textvlak">
				<p>
			Nullam vel suscipit lectus. Phasellus felis sem, semper a rutrum quis, consequat at leo. Nulla imperdiet neque eu ante ultricies sollicitudin non at sem. Praesent vehicula luctus libero non convallis. Donec eu mauris nisl. Nullam efficitur libero nec lorem vestibulum, ut sagittis odio commodo. Praesent accumsan nisl dolor, eget finibus augue fringilla eget. Nam egestas bibendum ornare. Quisque quam turpis, gravida vel risus at, aliquet viverra purus. Pellentesque pulvinar tortor a quam bibendum, quis mattis metus lobortis. Curabitur lacus ligula, semper vitae finibus eu, dictum a arcu. Pellentesque placerat, orci nec rutrum condimentum, arcu nisl pellentesque tortor, id auctor eros ex eget lorem. Morbi ut nulla id nisl elementum consectetur eget at felis.
				</p>
			</div>
    </div>
  </div>

  <div id="section5" class="section5">
		<div class="section1text">
			<center><h1>Head 1</h1></center></br>
			<div class="textvlak">
				<p>
			Nullam vel suscipit lectus. Phasellus felis sem, semper a rutrum quis, consequat at leo. Nulla imperdiet neque eu ante ultricies sollicitudin non at sem. Praesent vehicula luctus libero non convallis. Donec eu mauris nisl. Nullam efficitur libero nec lorem vestibulum, ut sagittis odio commodo. Praesent accumsan nisl dolor, eget finibus augue fringilla eget. Nam egestas bibendum ornare. Quisque quam turpis, gravida vel risus at, aliquet viverra purus. Pellentesque pulvinar tortor a quam bibendum, quis mattis metus lobortis. Curabitur lacus ligula, semper vitae finibus eu, dictum a arcu. Pellentesque placerat, orci nec rutrum condimentum, arcu nisl pellentesque tortor, id auctor eros ex eget lorem. Morbi ut nulla id nisl elementum consectetur eget at felis.
				</p>
			</div>
    </div>
  </div>

  <div id="section6" class="section6">
		<img class ="fotoright" src="web_images/section6.jpg" alt="Plank met stokbrood">
  </div>

  <div id="section7" class="section7">
		<img class ="fotoleft" src="web_images/section7.jpg" alt="Plank met stokbrood">
	</div>

  <div id="section8" class="section8">
		<center><h1>Head 1</h1></center></br>
		<div class="textvlak">
			<p>
		Nullam vel suscipit lectus. Phasellus felis sem, semper a rutrum quis, consequat at leo. Nulla imperdiet neque eu ante ultricies sollicitudin non at sem. Praesent vehicula luctus libero non convallis. Donec eu mauris nisl. Nullam efficitur libero nec lorem vestibulum, ut sagittis odio commodo. Praesent accumsan nisl dolor, eget finibus augue fringilla eget. Nam egestas bibendum ornare. Quisque quam turpis, gravida vel risus at, aliquet viverra purus. Pellentesque pulvinar tortor a quam bibendum, quis mattis metus lobortis. Curabitur lacus ligula, semper vitae finibus eu, dictum a arcu. Pellentesque placerat, orci nec rutrum condimentum, arcu nisl pellentesque tortor, id auctor eros ex eget lorem. Morbi ut nulla id nisl elementum consectetur eget at felis.
			</p>
		</div>
	</div>

</div> <!--end grid-->

  <!-- javascript-->
	<script src="javascript/jquery.js"></script>
	<script src="javascript/jquery.easing.1.3.min.js"></script>
	<script src="javascript/jquery.smoothPageScroll.js" type="text/javascript"></script>
	<script src="javascript/jquery.scroll.js" type="text/javascript"></script>

	<script src="javascript/scrollphoto.js" type="text/javascript"></script>

</body>

</html>
