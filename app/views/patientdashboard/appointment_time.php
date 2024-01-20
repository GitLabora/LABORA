<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo APPROOT.'/public/css/patientdashboard/appointment_time.css'?>">
    <title>Document</title>
</head>
<body>
    <?php require_once 'components/nevbar.php' ?>
    <div class="container_1">
        <div class="time_container">
            <h2>Select Time Slots</h2>
            <div id="timeSlotsContainer">
                <?php
                    $text_arr = $data['time_slots'];
                    $value_arr = $data['time_slots_value'];

                    $combined_arr = array_combine($text_arr , $value_arr);

                    foreach($combined_arr as $key => $value){
                       echo '<a href="'.URLROOT.'PatientDashboard/set_available_times/'.$value.'" style="text-decoration:none;color:black;font-family:roboto;"><div class="time-slot">'.$key.'</div></a>';
                    }
                ?>
                <!-- Add more time slots as needed -->
            </div>
        </div>
    </div>
</body>
</html>