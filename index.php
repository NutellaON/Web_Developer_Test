<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
<title>Web developer test</title>
</head>
<body id="bod">
            <div id="column_right">
                <img id="test" src="images/image_summer.png" alt="test"> 
            </div>
                <div id="column_left">
                
                        <div class=navbar>
                                <img id="mobile" src="images/logo_pineapple.svg">
                                <img id="pine" src="images/logo_pineapple.png">
                                <div class="topnav-right">
                                    <a href="#" id="link">About</a>
                                    <a href="#" class="link">How it works</a>
                                    <a href="#" class="link">Contact</a>
                                </div>
                        </div>
                        <div  id="con" class="cont">
                            <div id="h1">Subscribe to newsletter</div>
                            <div id="p">Subscribe to our newsletter and get 10% discount on pineapple glasses.</div>
                                <form action="code.php" method="POST">
                                    <div id="input_container">
                                        
                                        <input onkeyup="validation()" id="epasts" type="text"  name="epasts" class="inputField" placeholder="Type your email address here…">
                                        <span id="msg"></span>
                                        <button type="sumbit" id="poga" name="poga" onclick="success()"></button>
                                    </div>
                                    <div id="tos">
                                        <input type="checkbox" id="chec" class="check" onclick="myFunction()">
                                        <div id="agree">I agree to <span id="terms">terms of service</span></div>
                                    </div>
                                </form>
                            <hr id="linija">
                            <div id="soc">
                                <div class="fb" ></div>
                                <div class="ig" ></div>
                                <div class="tw" ></div>
                                <div class="yt" ></div>
                            </div>
                        </div>    
                    </div>
    <script type="text/javascript">
        
        var checkBox = document.getElementById("chec");
        var email = document.getElementById("epasts");
        function validation()
        {
            var form = document.getElementById("form");
            
            var form = document.getElementById("msg");
            var pattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;

            if(email.value.match(pattern))
            {
                    form.classList.add("valid");
                    form.classList.remove("invalid");
                    msg.innerHTML="";
                    
                    if(checkBox.checked==false){
                    msg.innerHTML="You must accept the terms and conditions";
                    msg.style.color="#ff0000"
                    document.getElementById("poga").disabled = true;
                    }
                    
            }
            else
            {
                form.classList.remove("valid");
                form.classList.add("invalid");
                msg.innerHTML="Please provide a valid e-mail address";
                msg.style.color="#ff0000"
            }
            if (email.value.slice(-2)=="co") {
                        msg.innerHTML="We are not accepting subscriptions from Colombia emails";
                        msg.style.color="#ff0000"  
            }
            if(email.value==0)
            {
                msg.innerHTML="Email address is required";
                msg.style.color="#ff0000"
                
            } 
        }
        function myFunction() {
            
            if (checkBox.checked == true){ 
                
                msg.innerHTML="";
                document.getElementById("poga").disabled = false;
                if(email.value.length == 0)
                {
                    msg.innerHTML="Email address is required";
                    msg.style.color="#ff0000"
                    document.getElementById("poga").disabled = true;
                }
            }
            else
            {
                msg.innerHTML="You must accept the terms and conditions";
                msg.style.color="#ff0000"
                document.getElementById("poga").disabled = true;
            }
        }
    </script>
    <script>
        function success()
        {
            document.getElementById("p").innerHTML = "You have successfully subscribed to our email listing. Check your email for the discount code.";
            document.getElementById("h1").innerHTML = "Thanks for subscribing!";
            document.getElementById("epasts").style.display = "none";
            document.getElementById("tos").style.display = "none";
            document.getElementById("linija").style.top="539px";
            document.getElementById("soc").style.top="590px";
            
            var img = document.createElement("img");
 
            img.src = "images/ic_success.svg";
            var src = document.getElementById("bod");
            img.style.left="140px";
            img.style.top="269px";
            src.appendChild(img);
            img.style.position="absolute";
            
            }
    </script>
    <script>
        function myFunction(x) {
          if (x.matches) { 
            document.getElementById("linija").style.top="274px";
            document.getElementById("soc").style.top="295px";
            document.getElementById("p").style.top="183px";
            document.getElementById("h1").style.top="139px";
            document.getElementById("p").innerHTML = "You have successfully subscribed to our email listing. Check your email for the discount code.";
            document.getElementById("h1").innerHTML = "Thanks for subscribing!";
            document.getElementById("epasts").style.display = "none";
            document.getElementById("tos").style.display = "none";
            document.getElementById("poga").style.display = "none";
            var img = document.createElement("img");
 
            img.src = "images/ic_success.svg";
            var src = document.getElementById("bod");
            img.style.left="40px";
            img.style.top="284px";
            src.appendChild(img);
            img.style.position="absolute";
          } 
        }
        
        var x = window.matchMedia("(max-width: 375px)")
        myFunction(x) 
        x.addListener(myFunction) 
        </script>
</body>
</html>