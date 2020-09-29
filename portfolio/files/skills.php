<style type="text/css">
  .heading
    {
        font-family: 'Raleway', sans-serif;
        color: black;
        font-size: 40px;
        outline-color: yellow:  
        outline-weight: 10px;
        text-decoration: underline;
        text-transform: uppercase;
    }
    .skills
    {
        font-family: 'Raleway', sans-serif;
        font-size: 20px;
        font-weight: bold
    }
    .progress{
    width: 150px;
    height: 150px;
    line-height: 150px;
    background: none;
    margin: 0 auto;
    box-shadow: none;
    position: relative;
}
.progress:after{
    content: "";
    width: 100%;
    height: 100%;
    border-radius: 50%;
    border: 12px solid #fff;
    position: absolute;
    top: 0;
    left: 0;
}
.progress > span{
    width: 50%;
    height: 100%;
    overflow: hidden;
    position: absolute;
    top: 0;
    z-index: 1;
}
.progress .progress-left{
    left: 0;
}
.progress .progress-bar{
    width: 100%;
    height: 100%;
    background: none;
    border-width: 12px;
    border-style: solid;
    position: absolute;
    top: 0;
}
.progress .progress-left .progress-bar{
    left: 100%;
    border-top-right-radius: 80px;
    border-bottom-right-radius: 80px;
    border-left: 0;
    -webkit-transform-origin: center left;
    transform-origin: center left;
}
.progress .progress-right{
    right: 0;
}
.progress .progress-right .progress-bar{
    left: -100%;
    border-top-left-radius: 80px;
    border-bottom-left-radius: 80px;
    border-right: 0;
    -webkit-transform-origin: center right;
    transform-origin: center right;
    animation: loading-1 1.8s linear forwards;
}
.progress .progress-value{
    width: 90%;
    height: 90%;
    border-radius: 50%;
    background: #44484b;
    font-size: 35px;
    color: #fff;
    line-height: 135px;
    text-align: center;
    position: absolute;
    top: 5%;
    left: 5%;
}

.progress.blue .progress-bar{
    border-color: #049dff;
}
.progress.blue .progress-left .progress-bar{
    animation: loading-2 1.5s linear forwards 1.8s;
}
.progress.yellow .progress-bar{
    border-color: #fdba04;
}
.progress.yellow .progress-left .progress-bar{
    animation: loading-3 1s linear forwards 1.8s;
}
.progress.pink .progress-bar{
    border-color: #ed687c;
}
.progress.pink .progress-left .progress-bar{
    animation: loading-4 0.4s linear forwards 1.8s;
}
.progress.green .progress-bar{
    border-color: #1abc9c;
}
.progress.green .progress-left .progress-bar{
    animation: loading-5 1.2s linear forwards 1.8s;
}
@keyframes loading-1{
    0%{
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
    }
    100%{
        -webkit-transform: rotate(180deg);
        transform: rotate(180deg);
    }
}
@keyframes loading-2{
    0%{
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
    }
    100%{
        -webkit-transform: rotate(144deg);
        transform: rotate(144deg);
    }
}
@keyframes loading-3{
    0%{
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
    }
    100%{
        -webkit-transform: rotate(90deg);
        transform: rotate(90deg);
    }
}
@keyframes loading-4{
    0%{
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
    }
    100%{
        -webkit-transform: rotate(36deg);
        transform: rotate(36deg);
    }
}
@keyframes loading-5{
    0%{
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
    }
    100%{
        -webkit-transform: rotate(126deg);
        transform: rotate(126deg);
    }
}
@media only screen and (max-width: 990px){
    .progress{ margin-bottom: 20px; }
}

</style>
<div style="width: 100%;height: 100%;z-index: -1" id="birdsbackground">
<div class="container">
    <div class="row" style="height: 15%;padding: 5px">
        <div class="col-md-10 text-center heading" style="margin: 40px auto">
            Education & WORK
        </div>
    </div>
    <div class="row" style="">
        <div class="col-md-3 col-sm-6">
            <div class="progress blue">
                <span class="progress-left">
                    <span class="progress-bar"></span>
                </span>
                <span class="progress-right">
                    <span class="progress-bar"></span>
                </span>
                <div class="progress-value">90%</div>
            </div>
            <div class="text-center skills">HTML</div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="progress yellow">
                <span class="progress-left">
                    <span class="progress-bar"></span>
                </span>
                <span class="progress-right">
                    <span class="progress-bar"></span>
                </span>
                <div class="progress-value">75%</div>
            </div>
             <div class="text-center skills">HTML</div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="progress green">
                <span class="progress-left">
                    <span class="progress-bar"></span>
                </span>
                <span class="progress-right">
                    <span class="progress-bar"></span>
                </span>
                <div class="progress-value">90%</div>
            </div>
             <div class="text-center skills">HTML</div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="progress pink">
                <span class="progress-left">
                    <span class="progress-bar"></span>
                </span>
                <span class="progress-right">
                    <span class="progress-bar"></span>
                </span>
                <div class="progress-value">75%</div>
            </div>
             <div class="text-center skills">HTML</div>
        </div>
    </div>
    <div class="row" style="margin-top:20px">
        <div class="col-md-3 col-sm-6">
            <div class="progress green">
                <span class="progress-left">
                    <span class="progress-bar"></span>
                </span>
                <span class="progress-right">
                    <span class="progress-bar"></span>
                </span>
                <div class="progress-value">90%</div>
            </div>
             <div class="text-center skills">HTML</div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="progress pink">
                <span class="progress-left">
                    <span class="progress-bar"></span>
                </span>
                <span class="progress-right">
                    <span class="progress-bar"></span>
                </span>
                <div class="progress-value">75%</div>
            </div>
             <div class="text-center skills">HTML</div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="progress blue">
                <span class="progress-left">
                    <span class="progress-bar"></span>
                </span>
                <span class="progress-right">
                    <span class="progress-bar"></span>
                </span>
                <div class="progress-value">90%</div>
            </div>
             <div class="text-center skills">HTML</div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="progress yellow">
                <span class="progress-left">
                    <span class="progress-bar"></span>
                </span>
                <span class="progress-right">
                    <span class="progress-bar"></span>
                </span>
                <div class="progress-value">75%</div>
            </div>
             <div class="text-center skills">HTML</div>
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


<!-- Button trigger modal -->


<!-- Modal -->
