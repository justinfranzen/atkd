<?php
include 'includes/header.php';
?>

<body>
    
<div id="school-name">AMERICAN <br>
    TAEKWONDO
    <br>
    <span id="slogan">"now we're kickin"</span>
</div>
    

<div id="bg-img"></div>
        
        <div class="content">
            
            <h1 class="index-secondary-title">ABOUT THE OWNERS</h1>

                <h2>Master V</h2>

                <p>Master V 6th Dan AMA Black Belt is the chief instructor and owner of the American Taekwondo Center in Hartford Wisconsin. He has dedicated his life to bringing the joys and benefits of martial arts to both children and adults.  His involvement with full contact sports has spanned over 50 years which include Wrestling,  Judo, Karate and Taekwondo. Teaching Taekwondo for over 25 years.</p>

                <p>In 1982 Master V graduated from the University of Wisconsin-La Crosse with his Bachelor of Science degree.  His senior year he was voted the most valuable wrestler at UW-La Crosse and was named  All-American at the NAIA 1981 National Wrestling Championships.</p>

                <p>After college Master V accepted a teaching and coaching position and taught for 4 years till 1986.  He then moved to West Bend, Wisconsin, where  he now resides with his wife Kathy and son Aaron and daughter Aleah. Chasing his dream to own and run his own Martial arts studio became reality in the winter of 1992 when the American Taekwondo Center was founded.</p>

                <p>Master V's philosophy is simple.</p>
                <blockquote>"Attitude plus discipline equals success. There is a fine line between success and failure and just maybe Taekwondo and I can make a difference in our young people." </blockquote>

                <h2>Master Aaron Vorpahl</h2>

                <p>Master Aaron Vorpahl 5th Dan AMA Black Belt: Master Aaron is the head instructor and owner of American Taekwondo Fredonia. He has been practicing Taekwondo for over 30 years. He was one of Wisconsin's first 8 year old Ji Do Kwon style Taekwondo 1st Poome Black Belt at the age of 8.</p>  

                <p>His forte is working with our youth, his goals are to form one of the best schools in the area.  And work toward kids understanding that Taekwondo is not all about sparring, but guiding them toward being better people thru Honor, excellence and respect.
                <blockquote>"Remember where you came from."</blockquote>
            
        </div>
        
        <div class="content two">
        
            <h1 class="index-secondary-title">ANNOUNCEMENTS</h1>
            
            <div class="row">
                
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        
                        <div class="blurb">

                            <h2>Holiday Class Schedule</h2>

                            <p>Summer vacation July 2-6</p>
                            <p>No classes in Hartford, Fredonia, or Brookfield</p>
                            <p>Happy 4th of July</p>

                        </div>
                    
                    </div>
                
                <div class="col-lg-4 col-md-4 col-sm-12">
                    
                    <div class="blurb">

                        <h2>Team Members Only</h2> 

                            <p>Any team members wanting to travel to Chicago for cross training with Master Godoy, Master Javiar, and Master May</p>

                            <p>Date: TBA, 2018</p>

                            <p>Time: We leave at 7:15 sharp from McDonalds </p>

                            <p>Cross training starting at 10am</p>

                            <p>Address: 3944 W. 63rd St. Chicago, IL 60627</p>

                            <p>Other schools will be joining us also</p>
                        
                    </div>

                </div>
                
                <div class="col-lg-4 col-md-4 col-sm-12">
                    
                    <div class="blurb">

                        <h2>The 2018 American Classic</h2>

                        <p><a href="https://docs.wixstatic.com/ugd/d4f095_d6c1bcd3a452454aa80a46ec3c7ca1e1.pdf" target="_blank" class="link2">Click for registration form</a></p>

                        <img src="images/american-classic.jpg" alt="American Classic Taekwondo Championships" id="american-classic">
                
                    </div>
                        
                </div>
                
            </div>
        
        </div>
        
        <div class="content">
        
            <h1 class="index-secondary-title">JOIN THE ATKD TEAM</h1>
            
            <p class="center">Are you or someone you know interested in learning martial arts?  American Taekwondo has several locations to choose from with our newest location in Brookfield.  If you're interested in learning more about our programs don't hesitate to call or simply submit the form below.</p>
            
            <div id="contact-form" action="index.php">
                
                <div class="row">
                    
                    <div class="col-lg-4 col-md-4 col-sm-12">
                
                        <label for="name"><strong>Name *</strong></label><br>
                        <input type="text" name="name" placeholder="Full Name">
                        
                    </div>
                    
                     <div class="col-lg-4 col-md-4 col-sm-12">

                        <label for="email"><strong>Email *</strong></label><br>
                        <input type="email" name="email" placeholder="Email">
                         
                    </div>
                    
                    <div class="col-lg-4 col-md-4 col-sm-12">

                        <label for="location"><strong>Location *</strong></label><br>
                        <select name="location">
                            <option selected disabled hidden style='display: none' value=""></option> 
                            <option value="Hartford" <?php if ($_POST['location'] == 'Hartford') echo 'selected="selected"';?>>Hartford</option>
                            <option value="Brookfield" <?php if ($_POST['location'] == 'Brookfield') echo 'selected="selected"';?>>Brookfield</option>
                            <option value="Fredonia" <?php if ($_POST['location'] == 'Fredonia') echo 'selected="selected"';?>>Fredonia</option>
                            <option value="Kettle Moraine YMCA" <?php if ($_POST['location'] == 'Kettle Moraine YMCA') echo 'selected="selected"';?>>Kettle Moraine YMCA</option>
                        </select>
                         
                    </div>
                    
                </div>
                
                <div class="row">
                    
                     <div class="col-lg-12 col-md-12 col-sm-12">
                         
                        <label for="message"><strong>Message *</strong></label><br>
                        <textarea rows="5" name="message" placeholder="Message"></textarea>
                         
                    </div>
                    
                </div>
        
                <button value="SEND" id="submit">SEND</button>
                        
            </div>
        
</div>

</body>

<?php
include 'includes/footer.php';  
?>