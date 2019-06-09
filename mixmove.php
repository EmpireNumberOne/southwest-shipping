 <!DOCTYPE html>
<html>

<head>
    <title>mixmove</title>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-127710933-1"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-127710933-1');
        </script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

        <?php # Script 11.1 - email.php
    
        // Check for form submission:
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        // Minimal form validation:
        if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['comments']) ) {

            // Create the body:
            $body = "Name: {$_POST['name']}\n\nComments: {$_POST['comments']}";

            // Make it no longer than 70 characters long:
            $body = wordwrap($body, 70);

            // Send the email:
            mail('Nate77exprotection@gmail.com', 'Contact Form Submission' , $body,
            "From: {$_POST['email']}"); 
            
            // Print a message:
            echo '<p><em>Your message has been submitted.</em></p>';

            // Clear $_POST (so that the form's not sticky):
            $_POST = [];
            
        } else {
            echo '<p style="font-weight: bold; color: #C00">Please fill out the form completely.
                </p>';

        }
        
        
    }   // End of main isset() IF.

    // Create the HTML form:
    ?>

    <style>
   

        /* Container holding the text */
        .container {
            position: relative;
            text-align: center;
            color: white;
        }

        form   {
            position: relative;
            right:         0px;
            left:        680px;
            bottom:        0px;
            top:          65px; 
            width:        500px;
            height:       720px;
            margin:       10px;
            padding:      10px;
            font-weight:   550;
            border: solid 2px #7B68EE;
            font-family: cursive;
            background-color: white;
            color: #7B68EE; 
        }

        form div {
            margin-bottom: 1em;
        }
        div.submit input {
            margin-left: 0px;
            color: #7B68EE;
            border: 1px #7B68EE;
            font-size: 20px;
            font-weight: 550;
        }
        label.field {
            display: block;
            float: center;
            margin-right: 15px;
            width: 150px;
            text-align: left;
        }
        input [type="text"], select, textarea {
            width: 300px;
            font: 18px cursive;
            border: solid 2px #7B68EE;
            background-color: white;
            color: #7B68EE;
            float: center;
        }
        div.required label.field {
            font-weight: bold;
        }
        div.required input, div.required select {
            background-color: white;
            border: solid 2px #7B68EE;
            font-weight: bold;
        }    
        
        footer {
            position: absolute;
            top:    720px;
            left:     0px;
            padding: 10px;
            margin:  20px;
            font-size: 20px;
            font-family: cursive;
            font-weight: 550;
            width: 700px;
            text-align: left;
        }

        body   {
            background: #7B68EE;
            color: white;
            font-family: cursive;
        } 

        /* Company */
        .company {
            position: absolute;
            top: 10%;
            left:20%;
            transform: translate(-50%, -50%);
            font-size: 2vw;
            font-weight: 550;
            color: white; 
        } 

        /* Listing */
        .listing {
            position: absolute;
            top: 50%;
            left: 20%;
            transform: translate(-50%, -50%);
            font-size: 2vw;
            font-weight: 550;
			color: white;
            margin: 10px;
            padding: 10px;
            text-align: left;

        }

        fieldset {
            border: solid 2px white;
        }

          



    </style>
    
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



        <body>
            <div class="container">
                <div class="company">Southwest Shipping and Delivery Service</div>
                <div class="listing">
                <ul>
                    <li>In-state move, out-of-state move</li>
                    <li>Long distance move</li>
                    <li>Apartment & house residential move</li>
                    <li>Office and commercial relocation</li>
                    <li>Locally-owned and operated</li>
                    <li>Affordable rates</li>
                    <li>Freight deliveries</li>
                    <li>Licensed, Insured and Bonded</li>
                    <li>Contact Us @ (702) 374-3350</li>
                </ul>
                </div>   

           <!--right column -->
			    <div class="col-sm-4">
			        <form method="post" action="mailto:nate77exprotection@gmail.com">
            <form action="/register" method="post"
                enctype="multipart/form-data">
                    <h1>Moving?</h1>
                    <div class="required">
                        <label class="field" for="first name">First Name</label>
                        <input id="first name" type="text">
                    </div>
                    <div class="required">
                        <label class="field" for="last name">Last Name</label>
                        <input id="last name" type="text">

                    </div>
                    <div class="required">
                        <label class="field" for="email address">Email Address</label>
                        <input id="email address" type="text">
                    </div>    
                    <div class="required">
                        <label class="field">Type of Move</label>
                        <select id="type of move">
                            <option value="Local">Local</option>
                            <option value="Out of State">Out of State</option>
                        </select>
                    </div>
                    <div>
                        <label class="field">Appliances</label>
                        <label><input type="checkbox" name="appliances" value="refrigerator"> Refrigerator</label>
                        <label><input type="checkbox" name="appliances" value="stove"> Stove</label>
                        <label><input type="checkbox" name="appliances" value="freezer"> Freezer</label>
                    </div>

                    <div>
                        <label class="field" for="message">Message</label>
                        <textarea id="bio" rows="6" cols="40"></textarea>
                    </div>
                    <div class="submit">
                        <input type="submit" value="Submit">
                    </div>
            </form>    

                <div class="footer">
                <footer>    
                    <large>&copy; Copyright 2019, Southwest Shipping and Delivery Service</large>   
                </footer>

                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> 







        </body>



</html>     