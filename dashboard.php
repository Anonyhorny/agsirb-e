<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['qrcode'])) {

 ?>
 

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--========== BOX ICONS ==========-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
        <!--========== LINK REL ==========-->
        <link rel="stylesheet" href="./fontawesome-free-5/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

        <!--========== CSS ==========-->
        <link rel="stylesheet" href="assets/css/styles.css">
        <script type="text/javascript" src="jassets/css/main.js"></script>
        

        <title>ONLINE EXAMINATION</title>
    </head>
    <body>
        <!--========== HEADER ==========-->
        <header class="header">
            <div class="header__container">
                <a href="home.php" class="header__img"><svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 0.82);transform: ;msFilter:;"><path d="M21 11H6.414l5.293-5.293-1.414-1.414L2.586 12l7.707 7.707 1.414-1.414L6.414 13H21z"></path></svg></a>

                <a href="home.php" class="header__logo">Welcome Resident!</a>
    
                <div class="header__search">
                    <input type="search" placeholder="Search" class="header__input">
                    <i class='bx bx-search header__icon'></i>
                </div>
    
                <div class="header__toggle">
                    <i class='bx bx-menu' id="header-toggle"></i>
                </div>
            </div>
        </header>

        <!--========== NAV ==========-->
        <div class="nav" id="navbar">
            <nav class="nav__container">
                <div>
                    <a href="home.php" class="nav__link nav__logo">
                        <i class='bx bx-book-open nav__icon' ></i>
                        <span class="nav__logo-name">Barangay Supot!</span>
                    </a>
    
                    <div class="nav__list">
                        <div class="nav__items">
                            <h3 class="nav__subtitle">Profile</h3>
    
                            <a href="home.php" class="nav__link active">
                                <i class='bx bx-home nav__icon' ></i>
                                <span class="nav__name">Home</span>
                            </a>
                            
                            <div class="nav__dropdown">
                                <a href="#" class="nav__link">
                                    <i class='bx bx-user nav__icon' ></i>
                                    <span class="nav__name"><?php echo $_SESSION['name']; ?></span>
                                </a>
                            </div>

                            

                           
                            
                        <div class="nav__items">
                            <h3 class="nav__subtitle">Menu</h3>

                         

                             
                    
                            </div>
                            <a href="#" class="nav__link">
                                <i class='bx bx-help-circle nav__icon' ></i>
                                <span class="nav__name">Help & Support</span>
                            </a>
                            <a href="#" class="nav__link">
                                <i class='bx bx-cog nav__icon' ></i>
                                <span class="nav__name">Settings & Privacy</span>
                            </a>
                             <a href="#" class="nav__link">
                                <i class='bx bx-moon nav__icon' id="theme_button" ></i>
                                <span class="nav__name">Night Mode</span>
                            </a>
                        </div>
                    </div>
                </div>

                <a href="logout.php" class="nav__link nav__logout">
                   <i class='bx bx-log-out nav__icon'></i>
                    <span class="nav__name" id="log_out">Logout</a></span>
                </a>
            </nav>
        </div>

        <!--========== CONTENTS ==========-->
        <main>
            <section>
       <div class="center">
<!--========== Messenger ==========-->
  
            </section>
        </main>
<style>
   @import url('https://fonts.googleapis.com/css?family=Abel');

.center {
  position: absolute;
  top: 80%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
}

.card {
  width: 480px;
  height: 280px;
  background-color: #fff;
  background: linear-gradient(#f8f8f8, #fff);
  box-shadow: 0 8px 16px -8px rgba(0,0,0,0.4);
  border-radius: 6px;
  overflow: hidden;
  position: relative;
  margin: 1.5rem;
  cursor: pointer;
}

.card h1 {
  text-align: center;
}

.card .additional {
  position: absolute;
  width: 150px;
  height: 100%;
  background: linear-gradient(#dE685E, #EE786E);
  transition: width 0.4s;
  overflow: hidden;
  z-index: 2;
}

.card.green .additional {
  background: linear-gradient(#92bCa6, #A2CCB6);
}


.card:hover .additional {
  width: 100%;
  border-radius: 0 5px 5px 0;
}

.card .additional .user-card {
  width: 150px;
  height: 100%;
  position: relative;
  float: left;
}

.card .additional .user-card::after {
  content: "";
  display: block;
  position: absolute;
  top: 10%;
  right: -2px;
  height: 80%;
  border-left: 2px solid rgba(0,0,0,0.025);*/
}

.card .additional .user-card .level,
.card .additional .user-card .points {
  top: 15%;
  color: #fff;
  text-transform: uppercase;
  font-size: 0.75em;
  font-weight: bold;
  background: rgba(0,0,0,0.15);
  padding: 0.125rem 0.75rem;
  border-radius: 100px;
  white-space: nowrap;
}

.card .additional .user-card .points {
  top: 85%;
}

.card .additional .user-card svg {
  top: 50%;
}

.card .additional .more-info {
  width: 300px;
  float: left;
  position: absolute;
  left: 150px;
  height: 100%;
}

.card .additional .more-info h1 {
  color: #fff;
  margin-bottom: 0;
}

.card.green .additional .more-info h1 {
  color: #224C36;
}

.card .additional .coords {
  margin: 0 1rem;
  color: #fff;
  font-size: 1rem;
}

.card.green .additional .coords {
  color: #325C46;
}

.card .additional .coords span + span {
  float: right;
}

.card .additional .stats {
  font-size: 2rem;
  display: flex;
  position: absolute;
  bottom: 1rem;
  left: 1rem;
  right: 1rem;
  top: auto;
  color: #fff;
}

.card.green .additional .stats {
  color: #325C46;
}

.card .additional .stats > div {
  flex: 1;
  text-align: center;
}

.card .additional .stats i {
  display: block;
}

.card .additional .stats div.title {
  font-size: 0.75rem;
  font-weight: bold;
  text-transform: uppercase;
}

.card .additional .stats div.value {
  font-size: 1.5rem;
  font-weight: bold;
  line-height: 1.5rem;
}

.card .additional .stats div.value.infinity {
  font-size: 2.5rem;
}

.card .general {
  width: 300px;
  height: 100%;
  position: absolute;
  top: 0;
  right: 0;
  z-index: 1;
  box-sizing: border-box;
  padding: 1rem;
  padding-top: 0;
}

.card .general .more {
  position: absolute;
  bottom: 1rem;
  right: 1rem;
  font-size: 0.9em;
}


</style>

    <!-- CONTACT US -->

    <div class="wrapper">
    <div class="button">
    <div class="icon">
    <i class="fab fa-facebook-messenger"></i>

    </div>
    <span>Message Us</span>
    </div>
    </div>

<script>
    const wrapper = document.querySelector(".wrapper"),
    header = wrapper.querySelector("span");
    i = wrapper.querySelector("i");
    function onDrag({movementX, movementY}){
      let getStyle = window.getComputedStyle(wrapper);
      let leftVal = parseInt(getStyle.left);
      let topVal = parseInt(getStyle.top);
      wrapper.style.left = `${leftVal + movementX}px`;
      wrapper.style.top = `${topVal + movementY}px`;
    }
    header.addEventListener("mousedown", ()=>{
      header.classList.add("active");
      header.addEventListener("mousemove", onDrag);
    });
    i.addEventListener("mousedown", ()=>{
      i.classList.add("active");
      i.addEventListener("mousemove", onDrag);
    });
    document.addEventListener("mouseup", ()=>{
      header.classList.remove("active");
      header.removeEventListener("mousemove", onDrag);
    });
    document.addEventListener("mouseup", ()=>{
      i.classList.remove("active");
      i.removeEventListener("mousemove", onDrag);
    });
  </script>

    <style type="text/css">
        /* Contact Us */

.wrapper{
  position: fixed;
  bottom: 2%;
  right: 0%;
  height: 60px;
  width: 40px;
  border-radius: 50px;
  transform: translate(-50%, -50%);
  cursor: pointer;
}
.wrapper i{

  height: 60px;
  width: 60px;
  font-size: 5em;
  border-radius: 50%;
  display: inline-block;
  align-items: center;
}
.wrapper i.active{
  cursor: move;
  user-select: none;
}

.wrapper .button{
  display: inline-block;
  height: 60px;
  width: 60px;
  float: right;
  margin: 0 5px;
  overflow: hidden;
  background: #0099ff;
  color: #fff;
  border-radius: 50px;
  cursor: pointer;
  box-shadow: 0px 10px 10px rgba(0,0,0,0.1);
  transition: all 0.3s ease-out;
}
.wrapper .button:hover{
  width: 200px;
}
.wrapper .button .icon{
  display: inline-block;
  height: 60px;
  width: 60px;
  text-align: center;
  border-radius: 50px;
  box-sizing: border-box;
  line-height: 60px;
  transition: all 0.3s ease-out;
}
.wrapper .button:nth-child(1):hover .icon{
  background: #fff;
}

.wrapper .button .icon i{
  font-size: 25px;
  line-height: 60px;
  transition: all 0.3s ease-out;
}
.wrapper .button:hover .icon i{
  color: #0099ff;
}
.wrapper .button span{
  font-size: 20px;
  font-weight: 500;
  line-height: 60px;
  margin-left: 10px;
  transition: all 0.3s ease-out;
}
.wrapper .button:nth-child(1) span{
  color: #fff;
}

/* */
    </style>

        <!--========== MAIN JS ==========-->
        <script src="assets/js/mainjs.js"></script>
    </body>

    <footer> <!-- Messenger Chat Plugin Code -->
    <div id="fb-root"></div>

    <!-- Your Chat Plugin code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "104757055773529");
      chatbox.setAttribute("attribution", "biz_inbox");
    </script>

    <!-- Your SDK code -->
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v15.0'
        });
      };

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script></footer>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>