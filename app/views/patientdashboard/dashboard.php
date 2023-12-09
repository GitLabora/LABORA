<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta http-equiv="refresh" content="600; url=http://localhost/labora/user/logout"> -->
    <link rel="stylesheet" href="<?php echo APPROOT.'/public/css/patientdashboard/dashboard.css'?>">
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
        <div class="boxset-1">
            <div class="box box-1">
                <span>65</span><br>
                <h5>Number of Reports Received</h5><br>
                <p>patient are kept up to date with real-time updates to their medical history.</p>
            </div>
            <div class="box box-2">
                <span>6</span><br>
                <h5>Number of Medical Test Types</h5><br>
                <p>This box provides a snapshot of the variety of medical test types the patient has undergone. </p>
            </div>
            <div class="box box-3">
                <span>600$</span><br>
                <h5>Medical Test Expenses</h5><br>
                <p>The total expenses will automatically update as new costs are incurred. </p>
            </div>
            <div class="box box-4">
                <span>MRI</span><br>
                <h5>Most Frequent Test</h5><br>
                <p>This box identifies the primary medical test type that the patient has taken most often.</p>
            </div>
        </div>
    </div>

    <div class="container_2">
        <div class="boxset-2">
            <div class="message box-1">

                <h1>Calendar</h1>

                <div class="month">      
                <ul>
                    <li class="prev">&#10094;</li>
                    <li class="next">&#10095;</li>
                    <li>
                    August<br>
                    <span style="font-size:18px">2021</span>
                    </li>
                </ul>
                </div>

                <ul class="weekdays">
                <li>Mo</li>
                <li>Tu</li>
                <li>We</li>
                <li>Th</li>
                <li>Fr</li>
                <li>Sa</li>
                <li>Su</li>
                </ul>

                <ul class="days">  
                <li>1</li>
                <li>2</li>
                <li>3</li>
                <li>4</li>
                <li>5</li>
                <li>6</li>
                <li>7</li>
                <li>8</li>
                <li>9</li>
                <li><span class="active">10</span></li>
                <li>11</li>
                <li>12</li>
                <li>13</li>
                <li>14</li>
                <li>15</li>
                <li>16</li>
                <li>17</li>
                <li>18</li>
                <li>19</li>
                <li>20</li>
                <li>21</li>
                <li>22</li>
                <li>23</li>
                <li>24</li>
                <li>25</li>
                <li>26</li>
                <li>27</li>
                <li>28</li>
                <li>29</li>
                <li>30</li>
                <li>31</li>
                </ul>
            </div>
            <div class="notify box-2">
            <div class="notification-box">
                <h2>Notification</h2>
                <p>You have a new notification in your Notification Box. Click below to read it.</p>
                <p class="timestamp">Received 3 hours ago</p>
            </div>
            </div>
        </div>
    </div>
</body>
</html>