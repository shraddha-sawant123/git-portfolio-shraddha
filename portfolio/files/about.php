<style type="text/css">
	input
	{
		padding: 10px;
	}
	.ConFont
	{
		font-family: 'Raleway', sans-serif;
        color: black;
        font-size: 40px;
        outline-color: yellow:  
        outline-weight: 10px;
        text-decoration: underline;
        text-transform: uppercase;
	}
	.input
	{
		border: 3px solid black;
		background: white;
		font-family: 'Raleway', sans-serif;
	}
	.label
	{
		font-family: 'Raleway', sans-serif;
		font-size: 20px;
		font-weight: bold
	}
	h3,h4,p
	{
		font-family: 'Raleway', sans-serif;
	}
	h3
	{
		font-weight: bold;
		font-size: 35px
	}
	h4
	{
		color: gray;
	}
	p
	{
		font-size: 20px
	}
</style>
<div style="width: 100%;height: 100%;z-index: -1" id="birdsbackground">
<div class="container"  style="height: 80%;margin-top: 40px">
	<div class="row" style="height: 15%;">
		<div class="col-md-12 text-center ConFont">
			ABOUT ME
		</div>
	</div>
	<div class="row" style="height: 85%;padding: 20px">
		<div class="col-md-6 " style="padding: 30px;background:url('https://images.pexels.com/photos/220453/pexels-photo-220453.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500');">
			
		</div>
		<div class="col-md-6 "  style="padding: 30px">
			<h3>Shraddha Sawant</h3>
			<h4>Full Stack Developer</h4>
			<hr>
			<p>I am creative UI/UX Designer.I build interactive websites that are responsive and are very user friendly.My websites are primarily hand-coded using HTML5, CSS3,JavaScript, Jquery and Bootstrap along with a touch of my creativity</p>
			<button type="submit" class="btn btn-primary">RESUME</button>
		</div>
	</div>
</div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r120/three.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vanta/0.5.19/vanta.waves.min.js"></script>
<script>
VANTA.WAVES({
  el: "#birdsbackground",
 mouseControls: true,
  touchControls: true,
  gyroControls: false,
  minHeight: 200.00,
  minWidth: 200.00,
  scale: 1.00,
  scaleMobile: 1.00,
  color: 0xb9b9b9,
  shininess: 5.00,
  waveHeight: 3.50,
  waveSpeed: 0.30,
  zoom: 1.43
})
</script>