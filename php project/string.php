<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini Project</title>
   
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&family=Teko:wght@300;700&display=swap" rel="stylesheet">
   <!-- <link rel="stylesheet" href="ff.css"> -->
</head>
<style>

.err{
     
     max-width: 80%;
     padding: 20px;
     margin:auto;
 }
 *{
     margin: 0%;
     padding: 0%;
     box-sizing: border-box;
     font-family: 'Monoton', cursive;
 }
 .err  h1 {
     font-size: 330%;
     text-align: center;
     color: red;
     font-family: 'Teko', sans-serif;
     }
     .err p{
         text-align: center;
         color: black;
         font-size: 130%;
     }
     input,textarea{
         
         border:2px solid black;
         border-radius: 8px;
         outline: none;
         font-size: 15px;
         width: 77%; 
         margin: 10px 0px;
         padding: 5px;
     }
     form{
 
      display: flex;
      align-items:center ;
      justify-content: center;
      flex-direction: column;
 }
  .btn {
  color: white;
  padding: 11px 17px;
  font-size: 14px;
  background-color: green;
  border: 2px solid white;
  border-radius: 11px;
  cursor:pointer;
 } 
 .bg{
 
     
     max-width: 100% ;
   
     position: fixed;
     height: auto;
     z-index: -1;
    
     
     
 }





</style>
<body>
<img class="bg" src="class.JPG" alt="Smiley face">
      
    <div class="err">
     <h1>Registration for New Books </h1>
     <p>This is the official page for Dikhan Student to Enroll your Books</p>
   

  <form action="deelo.php" method="post">
 <input type="text" name="name" id="name" placeholder="Enter you name" required>
 <input type="text" name="age" id="age" placeholder="Enter you age" >
 <input type="phone" name="contact" id="contact" placeholder="Enter you phone_no">
 <input type="email" name="email" id="email" placeholder="Enter you email"required>
 <input type="text" name="gender" id="gender" placeholder="Enter you gender">

 <textarea name="detail" id="detail" cols="30" rows="10" placeholder="Which Subject Do You Intrested" required></textarea>
 <button class="btn">Submit</button> 
 




</form>

</div>
<script src="java.js">

// `id`, `name`, `age`, `contact`, `email`, `gender`, `other`, `detail`) VALUES ('1', 'adeel', '15', '03055574', 'mef@515.com', 'male', 'this is the info', '2021-11-09');

</script>
    </body>
</html>
