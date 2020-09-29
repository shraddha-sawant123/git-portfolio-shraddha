<style type="text/css">
	.parent {
    width: 100%;
    height: 100%;
    overflow: hidden;
    position: relative;
    float: left;
    display: inline-block;
	cursor: pointer;
}
.child {
    height: 100%;
    width: 100%;
    background-size: cover;
    background-repeat: no-repeat;
    transition: all .5s;
}

/* different images */
.bg-one {background-image: url(files/la.jpg);}
.bg-two {background-image: url(london.jpg);}
.bg-three {background-image: url(ny.jpg);}
.bg-four {background-image: url(hollywood.jpg);}
.bg-five {background-image: url(dubai.jpg);}
.bg-six {background-image: url(san.jpg);}

span {
    display: none;
    font-size: 35px;
    color: #ffffff !important;
    font-family: sans-serif;
    text-align: center;
    margin: auto;
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    height: 50px;
    cursor: pointer;
}
.parent:hover .child, .parent:focus .child {
    transform: scale(1.3);
}
.parent:hover .child:before, .parent:focus .child:before {
    display: block;
}
.parent:hover span, .parent:focus span {
    display: block;
}
.child:before {
    content: "";
    display: none;
    height: 100%;
    width: 100%;
    position: absolute;
    top: 0;
    left: 0;
    background-color: rgba(52,73,94,0.75);
}
</style>
<div class="container-fluid" style="background: red;">
	<div class="row" style="height: 300px">
		<div class="col-md-4 p-0">
			<div class="parent" onclick="">
				<div class="child bg-one">
					<span>Los Angeles</span>
				</div>
			</div>
		</div>
		<div class="col-md-4 p-0">
			<div class="parent" onclick="">
				<div class="child bg-one">
					<span>Los Angeles</span>
				</div>
			</div>
		</div>
		<div class="col-md-4 p-0">
			<div class="parent" onclick="">
				<div class="child bg-one">
					<span>Los Angeles</span>
				</div>
			</div>
		</div>
	</div>
	<div class="row" style="height: 300px">
		<div class="col-md-4 p-0">
			<div class="parent" onclick="">
				<div class="child bg-one">
					<span>Los Angeles</span>
				</div>
			</div>
		</div>
		<div class="col-md-4 p-0">
			<div class="parent" onclick="">
				<div class="child bg-one">
					<span>Los Angeles</span>
				</div>
			</div>
		</div>
		<div class="col-md-4 p-0">
			<div class="parent" onclick="">
				<div class="child bg-one">
					<span>Los Angeles</span>
				</div>
			</div>
		</div>
	</div>
	<div class="row" style="height: 300px">
			<div class="col-md-4 p-0">
			<div class="parent" onclick="">
				<div class="child bg-one">
					<span>Los Angeles</span>
				</div>
			</div>
		</div>
		<div class="col-md-4 p-0">
			<div class="parent" onclick="">
				<div class="child bg-one">
					<span>Los Angeles</span>
				</div>
			</div>
		</div>
		<div class="col-md-4 p-0">
			<div class="parent" onclick="">
				<div class="child bg-one">
					<span>Los Angeles</span>
				</div>
			</div>
		</div>
	</div>
</div>