<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta http-equiv="refresh" content="600; url=http://localhost/labora/user/logout"> -->
    <link rel="stylesheet" href="<?php echo APPROOT.'/public/css/patientdashboard/appointment_form.css'?>">
    <script src="<?php echo APPROOT.'/public/js/patientdashboard/patient.js';?>"></script>
    <!-- static icons -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <!-- annimation icons -->
    <script src="https://cdn.lordicon.com/lordicon-1.1.0.js"></script>
    <title>Patient dashboard</title>
</head>
<body>
    <?php require_once 'components/nevbar.php' ?>
    <div class="container_1">
    <form action="<?php echo URLROOT?>PatientDashboard/appointment_form" method="post" class="appointment-form">
        <h2>Schedule Appointment</h2>
        <div class="form-group">
            <label for="test-type">Test Type</label>
            <select id="test-type" name="test-type" required>
                <?php 
                    foreach($data['test_types'] as $test){
                        echo '<option value="'.$test['id'].'">'.$test['Test_type'].'</option>';
                    }
                ?>
            </select>
        </div>
        <div class="form-group">
            <label for="appointment-notes">Appointment Notes</label>
            <textarea id="appointment-notes" name="appointment-notes" rows="4"></textarea>
        </div>
        <button type="submit" class="button">Next</button>
    </form>
    </div>
</body>
</html>