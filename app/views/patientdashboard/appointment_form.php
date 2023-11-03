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
    <h1>Schedule Appointment</h1>
    <form action="<?php echo URLROOT?>PatientDashboard/appointment_form" method="post" class="appointment-form">
        <div class="form-group">
            <label for="test-type">Test Type</label>
            <select id="test-type" name="test-type" required>
                <option value="Complete Blood Count (CBC)">Complete Blood Count (CBC)</option>
                <option value="Lipid Profile">Lipid Profile</option>
                <option value="Blood Glucose Test">Blood Glucose Test</option>
                <option value="Urinalysis">Urinalysis</option>
                <option value="Bone Density Scan (DXA)">Bone Density Scan (DXA)</option>
                <option value="X-Ray (Radiography)">X-Ray (Radiography)</option>
                <option value="Electrocardiogram (ECG or EKG)">Electrocardiogram (ECG or EKG)</option>
                <option value="Blood Pressure Measurement">Blood Pressure Measurement</option>
                <option value="MRI (Magnetic Resonance Imaging)">MRI (Magnetic Resonance Imaging)</option>
                <option value="Pap Smear">Pap Smear</option>
            </select>
        </div>
        <div class="form-group">
            <label for="appointment-date" min="<?php echo date("Y-m-d"); ?>">Appointment Date</label>
            <input type="date" id="appointment-date" name="appointment-date" required><br>
            <span class="dateerr"><?php echo $data['dateerr'];?></span>
        </div>
        <div class="form-group">
            <label for="appointment-time">Appointment Time</label>
            <input type="time" id="appointment-time" name="appointment-time" required>
        </div>
        <div class="form-group">
            <label for="appointment-notes">Appointment Notes</label>
            <textarea id="appointment-notes" name="appointment-notes" rows="4"></textarea>
        </div>
        <button type="submit" class="button">Submit</button>
    </form>
    </div>
</body>
</html>