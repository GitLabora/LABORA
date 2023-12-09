<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo APPROOT.'/public/css/signup.css'?>">
    <title>Patient Registration</title>
</head>
<body>
    <?php require_once 'components/home.php'?>
    <div class="registration-container">
        <h2>Patient Registration</h2>
        <form action="<?php echo URLROOT?>User/register" method="post" autocomplete="off">
            <div class="form-group">
                <label for="patient_name">Full Name</label><br>
                <input type="text" pattern="[A-Za-z. ]+" oninvalid="this.setCustomValidity('Please enter a valid name with English characters only.')" oninput="setCustomValidity('')" id="patient_name" name="patient_name" value="<?php echo $data['username'];?>" required>
            </div>
            <div class="form-group">
                <label for="patient_email">Email</label><br>
                <input type="email" id="patient_email" name="patient_email" value="<?php echo $data['email'];?>" required><br>
                <span class="formerr"><?php echo $data['emailerr'];?></span>
            </div>
            <div class="form-group">
                <label for="password">Password</label><br>
                <input type="password" minlength="8" id="password" name="password" value="<?php echo $data['password'];?>" required><br>
                <span class="formerr"><?php echo $data['passworderr'];?></span>
            </div>
            <div class="form-group">
                <label for="confirm_password">Confirm Password</label><br>
                <input type="password" id="confirm_password" name="confirm_password" value="<?php echo $data['confirmpassword'];?>" required><br>
            </div>
            <div class="form-group">
                <label for="patient_phone">Phone</label><br>
                <input type="tel" pattern="[0-9]+" maxlength="10" oninvalid="this.setCustomValidity('Accept only numbers')" oninput="setCustomValidity('')" id="patient_phone" name="patient_phone" value="<?php echo $data['phone'];?>" required>
            </div>
            <div class="form-group">
                <label>Gender</label>
                <fieldset>
                  <input type="radio" id="gender" name="gender" value="Male" required>
                  <label for="gender">Male</label>
                  <input type="radio" id="gender" name="gender" value="Female" required>
                  <label for="gender">Female</label>
                  <input type="radio" id="gender" name="gender" value="Other" required>
                  <label for="javascript">Other</label>
                </fieldset>   
            </div>
            <div class="form-group">
                <label for="patient_dob">Date of Birth</label><br>
                <input type="date" id="patient_dob" name="patient_dob" max="2023-11-1" value="<?php echo $data['dob'];?>" required>
            </div>
            <div class="form-group">
                <label for="patient_address">Address</label><br>
                <input type="text" id="patient_address" pattern="[A-Za-z0-9,. -&@:/]+" oninvalid="this.setCustomValidity('Enter valid address')" oninput="setCustomValidity('')" name="patient_address" required><?php echo $data['address'];?></input>
            </div>
            <button type="submit" name="submit" class="btn-register button">Register</button>
        </form>
    </div>
</body>
</html>
