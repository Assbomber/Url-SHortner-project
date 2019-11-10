<html>
    <head><title> AmAnu's Url Shortner</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="home.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="home.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Raleway:200,100,400" rel="stylesheet" type="text/css" />
       
        <script type="text/javascript">


                   var TxtRotate = function(el, toRotate, period) {
                   this.toRotate = toRotate;
                   this.el = el;
                   this.loopNum = 0;
                   this.period = parseInt(period, 10) || 2000;
                   this.txt = '';
                   this.tick();
                   this.isDeleting = false;
                   };


                   TxtRotate.prototype.tick = function() {

                    var i = this.loopNum % this.toRotate.length;
                    var fullTxt = this.toRotate[i];
                    if (this.isDeleting) {
                      this.txt = fullTxt.substring(0, this.txt.length - 1);
                    } else {
                      this.txt = fullTxt.substring(0, this.txt.length + 1);
                    }
                    this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';
                    var that = this;
                    var delta = 300 - Math.random() * 100;
                    if (this.isDeleting) { delta /= 2; }
                    if (!this.isDeleting && this.txt === fullTxt) {
                      delta = this.period;
                      this.isDeleting = true;
                    } else if (this.isDeleting && this.txt === '') {
                      this.isDeleting = false;
                      this.loopNum++;
                      delta = 500;
                    }

                    setTimeout(function() {
                      that.tick();
                    }, delta);
                  };

                  window.onload = function() {
                    var elements = document.getElementsByClassName('txt-rotate');
                    for (var i=0; i<elements.length; i++) {
                      var toRotate = elements[i].getAttribute('data-rotate');
                      var period = elements[i].getAttribute('data-period');
                      if (toRotate) {
                        new TxtRotate(elements[i], JSON.parse(toRotate), period);
                      }
                    }
                    // INJECT CSS
                    var css = document.createElement("style");
                    css.type = "text/css";
                    css.innerHTML = ".txt-rotate > .wrap { border-right: 0.08em solid #666 }";
                    document.body.appendChild(css);
                  };

           function validate(){
               var name=document.getElementById("subdir");
               if(name.value.length<6){
                error = "<p style=\"color:red;\"> Length must be greater than 6 letters</p>";
                document.getElementById( "error_para" ).innerHTML = error;
                   return false;
               }
               else{
                   return true;
               }
           }
        </script>
        
        
        
        <style>
body{
    width: 100%;
    height: 700px;
    background-image: url('backgroundwall.gif');
    background-size: 100% 100%;
    background-size: cover;
  background-position: center;
  font-family: 'Raleway', sans-serif;
  
  font-size: 18px;
  color: #FFFFFF
}

h1,h2 {
  font-weight: 200;
  margin: 0.4em 0;
}
h1 { font-size: 3.5em; }
h2 {
  color: #888;
  font-size: 2em;
}
 .ab{
    text-align: center;
}
.ab1{

padding-top: 100px;
}

@media only screen and (max-width : 768px) {

  .input1{
    
    
    width: 80%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 50px;
    box-sizing: border-box;
  
}

.input2{


width: 80%;
padding: 12px 20px;
margin: 8px 0;
display: inline-block;
border: 1px solid #ccc;
border-radius: 50px 10px 10px 50px;
box-sizing: border-box;

}
.input3{


width: 80%;
padding: 12px 20px;
margin: 8px 0;
display: inline-block;
border: 1px solid #ccc;
border-radius: 10px 10px 10px 10px;
box-sizing: border-box;

}
.input4{


width: 80%;
padding: 12px 20px;
margin: 8px 0;
display: inline-block;
border: 1px solid #ccc;
border-radius: 10px 50px 50px 10px;
box-sizing: border-box;
background-color: #3291a8;

}

}

@media only screen and (min-width : 768px) {
  

  .input1{
    
    
    width: 60%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 50px;
    box-sizing: border-box;
  
}

.input2{


width: 20%;
padding: 12px 20px;
margin: 8px 0;
display: inline-block;
border: 1px solid #ccc;
border-radius: 50px 10px 10px 50px;
box-sizing: border-box;

}
.input3{


width: 20%;
padding: 12px 20px;
margin: 8px 0;
display: inline-block;
border: 1px solid #ccc;
border-radius: 10px 10px 10px 10px;
box-sizing: border-box;

}
.input4{


width: 20%;
padding: 12px 20px;
margin: 8px 0;
display: inline-block;
border: 1px solid #ccc;
border-radius: 10px 50px 50px 10px;
box-sizing: border-box;
background-color: #3291a8;

}
::-ms-input-value { /* Microsoft Edge */
  color: white;
}

}

</style>
     

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light sticky-top" >
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
          <a class="navbar-brand" href="#"><img src="Logo.png" style="width: 60%; height: 10%"></a>
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a  style="color: white;" class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a style="color: white;" class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
              <a style="color: white;"  class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
          </ul>
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Login</button>
          
        </div>
      </nav>
      <div class="ab">
      <br><br><br><br>
      <h1 style="color:#FFFFFF;font-size:60px;"> We keep it 
  <span
     class="txt-rotate"
     data-period="2000"
     data-rotate='[ "\"Short\"", "\"Concise\"", "\"Simple\"", "\"Faster\"", "\"Safe\"" ]'></span>
</h1><br>
      <form action="processor.php" method="post" onsubmit="return validate();">
<input type="url" id="enteredurl" name="url" placeholder="Paste a long Url" class="input1 "><br>
<input type="text" value="https://etechknow.net/" disabled="disabled" class="input2">
<input type="text" id="subdir" name="subdirectory" placeholder="Name your Url" class="input3">

<input style="color: white;" type="submit" value="Shortenn URL" class="input4">
</form>
<p id="error_para" ></p>
</div>
</body>

<script>
function desktop(){
$(document).ready(function(){
    $(".input1").hover(function(){
        $(".input1").animate({width: '62%',});
    },
    function(){
        $(".input1").animate({width: '60%'});
    },
    
    
    );

    $(".input3").hover(function(){
        $(".input3").animate({width: '22%'});
    },
    function(){
        $(".input3").animate({width: '20%'});
    },
    
    );
  });
}
function mobile(){
$(document).ready(function(){
    $(".input1").hover(function(){
        $(".input1").animate({width: '82%',});
    },
    function(){
        $(".input1").animate({width: '80%'});
    },
    
    );

    $(".input3").hover(function(){
        $(".input3").animate({width: '82%'});
    },
    function(){
        $(".input3").animate({width: '80%'});
    },
    
    );
  });
}
if ($(window).width() < 668) {       
   mobile();                 
}
else {                              
   desktop();               
}

</script>

</html>
