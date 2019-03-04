<!doctype html>
<html lang="us">
    
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
    
<link rel="stylesheet" type="text/css" href="css/styles.css">
    
<!----JQuery------->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
<script src="script.js"></script>
    
<!---JavaScript-->
<script type="text/javascript" src="javascript/jquery-3.3.1.mis.js"></script>
    
<!----Bootstrap---->
<link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">  
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    
<!----Fonts------->
<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css?family=Libre+Franklin" rel="stylesheet"> 
    
<!-----FONT AWESOME ICONS--------->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
<script>

    function openNav() {
        document.getElementById("myNav").style.width = "100%";
    }
    
     function closeNav() {
        document.getElementById("myNav").style.width = "0%";
    }
    
    $(document).ready(function() {
        $("#about-overlay-dropdown").click(function() {
            $("#about-overlay-dropdown-submenu").slideToggle("medium");
        });
    });
    
    $(document).ready(function() {
        $("#programs-overlay-dropdown").click(function() {
            $("#programs-overlay-dropdown-submenu").slideToggle("medium");
        });
    });
    
    $(document).ready(function() {
        $("#schedule-overlay-dropdown").click(function() {
            $("#schedule-overlay-dropdown-submenu").slideToggle("medium");
        });
    });
    
    $(document).ready(function() {
        $("#knowledge-overlay-dropdown").click(function() {
            $("#knowledge-overlay-dropdown-submenu").slideToggle("medium");
        });
    });
    
</script>
    
</head>

<div id="header">
    
    <a href="index.php"><img src="images/logo.png" alt="Logo" id="logo" /></a>
    
    <ul id="nav">
        <li><a href="index.php">Home</a></li>
        
            <div id="about-dropdown">
                <li><a href="">About</a></li>
                    <div class="submenu-content">
                        <li><a href="instructors-and-staff.php">Instructors &amp; Staff</a></li>
                        <li><a href="locations.php">Locations</a></li>
                    </div>
            </div>
            
            <div id="programs-dropdown">
                 <li><a href="">Programs</a></li>
                    <div class="submenu-content2">
                        <li><a href="taekwondo.php">Taekwondo</a></li>
                        <li><a href="belt-testing.php">Testing</a></li>
                        <li><a href="competition-team.php">Competition Team</a></li>
                        <li><a href="birthday-parties.php">Birthday Parties</a></li>
                    </div>
            </div>
        
            <div id="schedule-dropdown">
                <li><a href="">Schedule</a></li>
                    <div class="submenu-content3">
                        <li><a href="class-schedule.php">Class Schedule</a></li>
                        <li><a href="tournaments.php">Tournaments</a></li>
                    </div>
            </div>
                
        <!--<li><a href="">Proshop</a></li>---->
        
            <div id="knowledge-dropdown">
                <li><a href="">Knowledge</a></li>
                    <div class="submenu-content4">
                        <li><a href="rules-and-requirements.php">Rules &amp; Requirements</a></li>
                        <li><a href="forms-and-sparring.php">Forms &amp; Sparring</a></li>
                        <li><a href="terminology.php">Terminology</a></li>
                        <li><a href="hapkido.php">Hapkido</a></li>
                    </div>
            </div>
        
        <li><a href="contact.php">Contact</a></li>
    
    </ul>
    
    <span style="font-size:30px;cursor:pointer" onclick="openNav()" id="mobile-nav">&#9776;</span>
    
    
    <div id="myNav" class="overlay">
    
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    
    
        <div class="overlay-content">
        
            <li><a href="index.php">Home</a></li>
            
            <div id="about-overlay-dropdown"><a href="#" class="overlay-link">About <img src="images/arrow.png" id="arrow" width="20" /></a>
                <ul id="about-overlay-dropdown-submenu">
                    <li><a href="instructors-and-staff.php">Instructors &amp; Staff</a></li>
                    <li><a href="locations.php">Locations</a></li>
                </ul>
            </div>
            
            <div id="programs-overlay-dropdown"><a href="#" class="overlay-link">Programs <img src="images/arrow.png" id="arrow" width="20" /></a>
                <ul id="programs-overlay-dropdown-submenu">
                    <li><a href="taekwondo.php">Taekwondo</a></li>
                    <li><a href="testing.php">Testing</a></li>
                    <li><a href="competition-team.php">Competition Team</a></li>
                    <li><a href="birthday-parties.php">Birthday Parties</a></li>
                </ul>
            </div>
            
            <div id="schedule-overlay-dropdown"><a href="#" class="overlay-link">Schedule <img src="images/arrow.png" id="arrow" width="20" /></a>
                <ul id="schedule-overlay-dropdown-submenu">
                    <li><a href="class-schedule.php">Class Schedule</a></li>
                    <li><a href="tournaments.php">Tournaments</a></li>
                </ul>
            </div>
            
            <div id="knowledge-overlay-dropdown"><a href="#" class="overlay-link">Knowledge <img src="images/arrow.png" id="arrow" width="20" /></a>
                <ul id="knowledge-overlay-dropdown-submenu">
                    <li><a href="rules-requirements.php">Rules &amp; Requirements</a></li>
                    <li><a href="forms-and-sparring.php">Forms &amp; Sparrning</a></li>
                    <li><a href="terminology.php">Terminology</a></li>
                    <li><a href="hapkido.php">Hapkido</a></li>
                </ul>
            </div>
            
            <li><a href="contact.php">Contact</a></li>
        
        </div>
    
    
    </div>
    
</div>