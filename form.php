<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
        <input type="hidden" name="id" value="<?php echo isset($id)?$id:'';?>">
        
          First Name: <input type="text" name="fname" value="<?php echo isset($fname)?$fname:'';?>">
          
          <br><br>
          Last Name: <input type="text" name="lname" value="<?php echo isset($lname)?$lname:'';?>">
          
          <br><br>
          E-mail: <input type="text" name="email" value="<?php echo isset($email)?$email:'';?>">
          
          <br><br>
          Date of Birth: <input type="date" name="date" value="<?php echo isset($date)?$date:'';?>">
          <br><br>
         Password: <input type="password" name="password" value="<?php echo isset($password)?$password:'';?>">
         
          <br><br>
         
          Gender:
          <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
          <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
          <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
          
          <br><br>
          <input type="submit" name="submit" value="submit"> 
           <br><br>
        </form>