<?php

//echo "contact";

?>

    <!--CONTACT FORM USING VUE-->   
    <section class="contact">
        <h2 hidden>Contact Form</h2>

        <form action="/includes/send.php" method="POST" id="mail-form">  <!--post, variable which is used to collect data, it goes to send.php/action-->    
           
            <label for="firstname">First Name</label>
            <input type="text" id="firstname" name="firstname" required="required">

            <label for="lastname">Last Name</label>
            <input type="text" id="lastname" name="lastname" required>


            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>


            <label for="message">Your Message</label>
            <textarea name="message" id="message" cols="30" rows="10"></textarea>

            <label for="phone">Your Phone # <i>(optional)</i></label>
            <input  id="phone" type="tel" value="tel" name="phone">
            
            <div class="wrapper">
                <input @click.prevent="processMail" type="submit" class="submit" value="Submit">
            </div>    

            <!--<div class="success" v-if="successMessage">
                <p>your message has been sent succesfully</p>
            </div> -->   
           
        </form>
    </section>