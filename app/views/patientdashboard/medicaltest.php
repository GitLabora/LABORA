<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta http-equiv="refresh" content="600; url=http://localhost/labora/user/logout"> -->
    <link rel="stylesheet" href="<?php echo APPROOT.'/public/css/patientdashboard/medicaltest.css'?>">
    <script src="<?php echo APPROOT.'/public/js/patientdashboard/patient.js';?>"></script>
    <!-- static icons -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <!-- annimation icons -->
    <script src="https://cdn.lordicon.com/lordicon-1.1.0.js"></script>
    <script src="<?php echo APPROOT.'\public\js\home.js';?>"></script>
    <title>Patient dashboard</title>
</head>
<body>
    <?php require_once 'components/nevbar.php' ?>
    <div class="container_1">
    <div class="services" id="services">
        <h1>Our Comprehensive Services</h1>
        <div class="horizontal-line"></div>
        <h3>Advanced Medical Testing Tailored to Your Needs</h3>
        <p>At SAHANYA Labs, we offer a wide range of medical tests and diagnostics to cater to your healthcare needs. Our dedicated team of professionals ensures accurate and timely results. Below are some of the key tests we provide, along with important pre-preparation information.</p>
        <h4>Available Medical Test</h4>
        <div class="test-list">
            <div>
                <ul>
                <li><a onclick="CBC();" id="first">Complete Blood Count (CBC)</a></li>
                <li><a onclick="Lipid();">Lipid Profile</a></li>
                <li><a onclick="Glucose();">Blood Glucose Test</a></li>
                <li><a onclick="Urinalysis();">Urinalysis</a></li>
                <li><a onclick="Density();">Bone Density Scan (DXA)</a></li>
                <li><a onclick="XRay();">X-Ray (Radiography)</a></li>
                <li><a onclick="ECG();">Electrocardiogram (ECG or EKG)</a></li>
                <li><a onclick="BPM();">Blood Pressure Measurement</a></li>
                <li><a onclick="MRI();">MRI (Magnetic Resonance Imaging)</a></li>
                <li><a onclick="Pap();">Pap Smear</a></li>
            </ul>
            </div>
            <div class="vertical-line"></div>
            <div class="discription">
                <p id="dis">    
                    
                </p>
            </div>
        </div>
    </div>
    </div>
</body>
</html>