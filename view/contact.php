<?php

?>

    <!--CONTACT FORM USING VUE-->   
    <section class="contact">
        <h2 hidden>Contact Form</h2>

        <form action="./controller/contactController.php" method="POST" id="mail-form">  
           
            <label for="firstname">Full Name*</label>
            <input ref="name" type="text" id="name" name="name" required="required" placeholder="Enter your full name">

            <br>
            <div class="contact-middle">

            <div>
            <label for="email">Email*</label>
            <input ref="email" type="email" id="email" name="email" required placeholder="Enter your full name">
            </div>

            <div>
            <label for="phone">Phone #</label>
            <input ref="phone" id="phone" type="tel" value="tel" name="phone" placeholder="Enter your phone number">
            </div>

            </div> <!--contact-middle-->
            <br>

            <label for="message">Message*</label>
            <textarea name="message" id="message" cols="30" rows="10" placeholder="Your Message goes here"></textarea>

            
            <div class="wrapper">
                <input @click.prevent="processMail" type="submit" class="submit" value="Send">
            </div>    
           
        </form>
    </section>

    <div class="contactImg">
        <img src="./public/images/online-msg.svg" alt="contact svg">
    </div>

    <div class="msg-error">
            <p>Oopsiee...you missed out a column or so.</p>
    </div>
    <div class="msg-success">
            <p>Mail sent successfully, you will be contacted within 24 hours. </p>
    </div>