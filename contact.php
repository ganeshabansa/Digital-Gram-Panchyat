
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
    <!-- CSS Links -->
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<link rel="stylesheet" href="css/contact.css">
	<link rel="stylesheet" href="css/header-footer.css">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <!-- jQuery -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

	<title>Contact Us</title>

	<style>
	
		/* body {font-family: Arial, Helvetica, sans-serif;}
		* {box-sizing: border-box;} */

		.input_style select, textarea {
			width: 100%;
			padding: 12px;
			border: 1px solid;
			border-radius: 4px;
			box-sizing: border-box;
			margin-top: 6px;
			margin-bottom: 16px;
			resize: vertical;
		}

		.input_style {
		/* background-color: #04AA6D; */
		/* color: white; */
		padding: 12px 20px;
		/* border: none; */
		border-radius: 4px;
		cursor: pointer;
		}

		/* .input_style:hover {
		background-color: #45a049;
		} */
		section .container
       {

    position: relative;
    min-width: 1100px;
     min-height: 550px;
     display: flex;
    z-index: 1000;         
        }

   section .container .contactinfo
    {

    position: relative;
    top: 40px;
    width: 350px;
    height: calc(100% - 80px);
    background: #0f3959;
    z-index: 1;
    padding: 40px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    box-shadow: 0 20px 20px rgba(0,0,0,0.2);
                                            
                                        }


   section .container .contactinfo h2
         
   {
    color: #fff;
    font-size: 24px;
    font-weight: 500;
                       }

  section .container .contactinfo .info
       {
    
    position: relative;
    margin: 20px 0;
                     }

   section .container .contactinfo .info li
       {

    position: relative;
    list-style: none;
    display: flex;
    margin: 20px 0;
    cursor: pointer;
    align-items: flex-start;

                }

   section .container .contactinfo .info li span:nth-child(1)
           {

    width: 30px;
   min-width: 30px;
           }

   section .container .contactinfo .info li span:nth-child(1) img
         {
    max-width: 100%;
    filter: invert(1);
    opacity: 0.5;
            }

    section .container .contactinfo .info li span:nth-child(2)
        {

    color: #fff;
    margin-left: 10px;
    font-weight: 300;
    opacity: 0.5;
               }

   section .container .contactinfo .info li span:nth-child(1) img,
   section .container .contactinfo .info li span:nth-child(2)
          {

    opacity: 1;
         }

   section .container .Contactform
      {

    position: absolute;
    padding: 70px 50px;
    background: #fff;
    margin-left: 150px;
    padding-left: 250px;
    width: calc(100% - 150px);
    height: 100%;
    box-shadow: 0 50px 50px rgba(0,0,0,0.5);
                                             }
			    
    section .container .Contactform h2
                 {

    color: #0f3959;
    font-size: 24px;
    font-weight: 500;
                     }

   section .container .Contactform .formBox
           {

    position: relative;
    display: flex;
    justify-content: space-between;
    flex-wrap:wrap ;
    padding-top: 30px;
                  }

   section .container .Contactform .formBox .inputBox
           {

    position: relative;
    margin: 0 0 35px 0;
                       }

   section .container .Contactform .formBox .inputBox.w50
           {

    width: 47%;
                   }

   section .container .Contactform .formBox .inputBox.w100
           {

    width: 100%;
                  }

   section .container .Contactform .formBox .inputBox input,
   section .container .Contactform .formBox .inputBox textarea 
             {

    width: 100% limportant ;
    padding: 5px 0;
    resize:none;
    font-size: 18px;
    font-weight: 300;
    color: #333;
    border: none;
    border-bottom: 1px solid #777;
    outline: none;
                     }

    section .container .Contactform .formBox .inputBox textarea 
          {

    min-height: 120px;
                      }

    section .container .Contactform .formBox .inputBox span
         {

    position: absolute;
    left: 0;
    padding: 5px 0;
    font-size: 18px;
    font-weight: 300;
    color: #333;
    transition: 0.5s;
    pointer-events: none;
                           }

   section .container .Contactform .formBox .inputBox input:focus~span
   section.container .Contactform .formBox .inputBox textarea:focus~span
   section.container .Contactform .formBox .inputBox input:valid~span
   section.container .Contactform .formBox .inputBox textarea:valid~span
        {

    transform: translateY(-20px);
    font-size:12px;
    font-weight: 400;
    letter-spacing: 1px;
    color: #ff568c;
                       }

    section.container .Contactform .formBox .inputBox input[type="submit"]
               {

    position: relative;
    cursor: pointer;
    background: #0f3959;
    color: #fff;
    border: none;
    max-width: 150px;
    padding: 12px;
                       }

    sec.container .Contactform .formBox .inputBox input[type="submit"]
            {

    background: #ff568c;
                      }
	

	</style>
</head>



    <?php include('include/header.php');?>

    <!-- Your Code Goes here -->
	<body>
        <section>
        <div class="container">

            <div class="contactinfo">
                <h2>contact Info</h2>
                <ul class="info">
                    <li>
                        <span><img src="./img/location.png"></span>
                        <span>41106 ganagapur town<br>
                            sambhaji nagar gangapur <br>
                            41106</span>
                    </li>
                    <li>
                        <span><img src="./img/email.png"></span>
                        <span>gramvikasyojana@gmail.com</span>
                    </li>
                    <li>
                        <span><img src="./img/phn.png"></span>
                        <span>310-386-1</span>
                    </li>
                </ul>
            </div>
    
            <div class="Contactform">
                <h2>send a message</h2>
                <div class="formBox">
                    <div class="inputBox w50">
                        <input class="input_style" type="text" name="" placeholder="First Name" required>
                    </div>
                    
                    <div class="inputBox w50">
                        <input class="input_style" type="text" name="" placeholder="Second Name" required>
                    </div>
                    
                    <div class="inputBox w50">
                        <input class="input_style" type="text" name="" placeholder="Email Address" required>
                    </div>
                    
                    <div class="inputBox w50">
                        <input class="input_style" type="text" name="" placeholder="Phone Number" required>
                    </div>
                    
                    <div class="inputBox w100">
                        <textarea name="" placeholder="Write Your Message here..." required></textarea>
                    </div>
                    
                    <div class="inputBox w100">
                        <input class="input_style" type="Submit" value="send">
                    </div>
                </div>
            </div>
        </div>
    </section>
    </body>
</html>
	
	<!-- You Stop Writing here -->
	<?php include('include/footer.php');?>

	<!-- javaScripts libraries-->
	<!-- <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script> -->
	<!-- <script src="//code.jquery.com/jquery-1.11.1.min.js"></script> -->

	<!-- jQuery -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<!-- pooper.js -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
	<!-- bootstrap.js -->
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>