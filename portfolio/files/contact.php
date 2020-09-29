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
</style>
<div style="width: 100%;height: 100%;z-index: -1" id="birdsbackground">
<div class="container"  style="height: 80%;margin-top: 40px">
	<div class="row" style="height: 15%;">
		<div class="col-md-12 text-center ConFont">
			CONTACT ME
		</div>
	</div>
	<div class="row" style="height: 85%;padding: 20px">
		<div class="col-md-6 " style="padding: 30px">
			<form>
			  <div class="form-group">
			    <label for="exampleInputEmail1" class="label">Email address</label>
			    <input type="email" class="form-control input" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1" class="label">Password</label>
			    <input type="password" class="form-control input" id="exampleInputPassword1" placeholder="Password">
			  </div>
	            <div class="form-group">
			    <label for="exampleInputEmail1" class="label">Email address</label>
			    <input type="email" class="form-control input" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
			  </div>
			  <button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
		<div class="col-md-6 "  style="padding: 30px">
			<div class="form-group">
			    <label for="exampleInputPassword1" class="label">Password</label>
			    <input type="password" class="form-control input" id="exampleInputPassword1" placeholder="Password">
			  </div>
			  <form class="form-inline">
				  <div class="form-group mb-2">
				    <label for="staticEmail2" class="sr-only">Email</label>
				    <input type="text" readonly class="form-control-plaintext label" id="staticEmail2" value="email@example.com">
				  </div>
				  <div class="form-group mb-2">
				    <label for="staticEmail2" class="sr-only">Email</label>
				    <input type="text" readonly class="form-control-plaintext label" id="staticEmail2" value="email@example.com">
				  </div>
				</form>
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