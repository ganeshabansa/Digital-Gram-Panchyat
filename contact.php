
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
    <!-- CSS Links -->
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<link rel="stylesheet" href="css/header-footer.css">
	<link rel="stylesheet" href="css/contact.css">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <!-- jQuery -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

	<title>Contact Us</title>
	<style>
   
   body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container
{
    position: relative;
    min-width: 1100px;
    min-height: 550px;
    display: flex;
    z-index: 1000;
}
.container .contactinfo
{
    position: relative;
    top: 40px;
    width: 350px;
    height: calc(100% - 80px);
    background: #0f3959;
    z-index: 1;
    padding: 40px;
    display: flex;
    justify-content: space-between;
}
.container .contactinfo h2
{
    color: #fff;
    font-size: 24px;
    font-weight: 500;
}
.container .contactinfo .info
{
    position: relative;
    margin: 20px 0;

}
.container .contactinfo .info li
{
    position: relative;
    list-style: none;
    display: flex;
    margin: 20px 0;
    cursor: pointer;
    align-items: flex-start;
}
.container .contactinfo .info li span:nth-child(1)

{
   width: 30px;
   min-width: 30px;
}
.container .contactinfo .info li span:nth-child(1) img
{
    max-width: 100%;
    filter: invert(1);
    opacity: 0.5;
}
.container .contactinfo .info li span:nth-child(2)

{
   color: #fff;
   margin-left: 10px;
   font-weight: 300;
   opacity: 0.5;
}
.container .Contactform
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
.container .Contactform h2
{
    color: #0f3959;
    font-size: 24px;
    font-weight: 500;
}
.container .Contactform .formBox
{
    position: relative;
    display: flex;
    justify-content: space-between;
    flex-wrap:wrap ;
    padding: 30px;
}
.container .Contactform .formBox ,inputBox
{
    position: relative;
    margin: 0 0 35px 0;

}
.container .Contactform .formBox .inputBox.w50
{
    width: 47%;
}
.container .Contactform .formBox .inputBox.w100
{
    width: 100%;
}
.container .Contactform .formBox .inputBox input
.container .Contactform .formBox .inputBox textarea 
{
    width: 100% limportant;
    padding: 5px 0;
    resize:none;
    font-size: 18px;
    font-weight: 300;
    color: #333;
    border: none;
    border-bottom: 1px solid #777;
    outline: none;

  
}
.container .Contactform .formBox .inputBox textarea 
{
  min-height: 130px;
}
.container .Contactform .formBox .inputBox span
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
.container .Contactform .formBox .inputBox input:focus~span
.container .Contactform .formBox .inputBox textarea:focus~span
.container .Contactform .formBox .inputBox input:valid~span
.container .Contactform .formBox .inputBox textarea:valid~span
{
    transform: translateY(-20px);
    font-size:12px;
    font-weight: 400;
    letter-spacing: 1px;
    color: #ff568c;

}
.container .Contactform .formBox .inputBox input[type="submit"]
{
    position: relative;
    cursor: pointer;
    background: #0f3959;
    color: #fff;
    border: none;
    max-width: 150px;
    padding: 12px;

}
.container .Contactform .formBox .inputBox input[type="submit"]
{
    background: #ff568c;
}






</style>

</head>

<body>
    <?php include('include/header.php');?>

    <!-- Your Code Goes here -->
	
  
<div class="container">
  <div class="contactinfo">
    <div>
      <h2>contact Info</h2>
      <ul class="info">
        <li>
          <span><img src="location.png"></span>
          <span>41106 ganagapur town<br>
            sambhaji nagar gangapur <br>
            41106</span>
           </li>
           <li>
           <span><img src="email.png"></span>
          <span>gramvikasyojana@gmail.com</span>
          </li>
          <li>
            <span><img src="phn.png"></span>
            <span>310-386-1</span>
          </li>
         </ul>
        </div>
       </div>
       <div class="Contactform">
        <h2>send a message</h2>
        <div class="formBox">
          <div class="inputBox w50">
            <input type="text" name="" required>
            <span>First Name</span>
                   </div>
            <div class="inputBox w50">
            <input type="text" name="" required>
            <span>Last Name</span> 
               </div>
            <div class="inputBox w50">
            <input type="text" name="" required>
            <span>Email Address</span>
              </div>
              <div class="inputBox w50">
            <input type="text" name="" required>
            <span>Phone Number</span>
              </div>
              <div class="inputBox w100">
            <textarea name="" required></textarea>
            <span>Write Your Message here...></span>
            </div>
            <div class="inputBox w100">
              <input type="Submit" value="send">

            
            

      

 
  


    
    
	<?php include('include/footer.php');?>
</script>

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