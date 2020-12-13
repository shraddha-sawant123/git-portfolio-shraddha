var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}

function accordion1()
{
	var val=document.getElementById('btn1').value;
	if(val==1)
	{
		document.getElementById('plus1').src="images/minus-01.svg";
		document.getElementById('btn1').value=0;
	}
	else if(val==0)
	{
		document.getElementById('plus1').src="images/plus-01.svg";
		document.getElementById('btn1').value=1;
	}
}
function accordion2()
{
	var val=document.getElementById('btn2').value;
	if(val==1)
	{
		document.getElementById('plus2').src="images/minus-01.svg";
		document.getElementById('btn2').value=0;
	}
	else if(val==0)
	{
		document.getElementById('plus2').src="images/plus-01.svg";
		document.getElementById('btn2').value=1;
	}
}
function accordion3()
{
	var val=document.getElementById('btn3').value;
	if(val==1)
	{
		document.getElementById('plus3').src="images/minus-01.svg";
		document.getElementById('btn3').value=0;
	}
	else if(val==0)
	{
		document.getElementById('plus3').src="images/plus-01.svg";
		document.getElementById('btn3').value=1;
	}
}