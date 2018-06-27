<?php
include 'includes/header.php';
?>

<body>
    
    <h1 class="main-h1">CONTACT ATKD</h1>
    
    <div id="contact-title-img"></div> 

    <div class="secondary-content">
            
            <p id="contact"><strong>Contact American Taekwondo today if you would like more information about the programs we offer. We have several locations to choose from with our newest location in Brookfield owned my Master Aaron Vorpahl.</strong></p>

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