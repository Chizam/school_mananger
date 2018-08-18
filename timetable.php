<?php
session_start(); 
require_once('config.php');
?>


<html>

<head>
    <title></title>
     <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

    <div >
    
     <div><h1 class="text-center">TIME TABLE</h1> 
        <button style="float: right;"><a href="dashboard.php"> Back To Dashboard </a></button> 
     </div>
     <div class="shifts">
        <table class="text-center ">
            <thead>
                <tr>
                    <td ></td>
                    <th> 8:00am -8:45am</th>
                    <th> 8:45am-9:30am</th>
                    <th> 9:30am-10:15am</th>
                    <th> 9:30am-10:15a</th>
                    <th> 9:30am-10:15a</th>
                    <th> 9:30am-10:15a</th>
                    
                </tr>
                
                <tbody>
                    <tr>
                        <th>Mon </th>
                        <td>maths </td>
                        <td> Chemistry <br/> History</td>
                        <td> Creative Art <br/> Geography </td>
                        <td  class="vertical" rowspan="5" > <h3>BREAK</h3></td>
                        <td>  Chemistry <br/> History</td>
                        <td> Chemistry <br/> History </td>
                    </tr>
                    <tr>
                        <th>Tue </th>
                        <td>maths </td>
                        <td> Chemistry <br/> History</td>
                        <td> Chemistry <br/> History </td>
                        <td>  Chemistry <br/> History</td>
                        <td> Chemistry <br/> History </td>
                    </tr>
                    <tr>
                        <th>Wed </th>
                        <td>maths </td>
                        <td> Chemistry <br/> History</td>
                        <td> Chemistry <br/> History </td>
                        <td>  Chemistry <br/> History</td>
                        <td> Chemistry <br/> History </td>
                    </tr>
                    <tr>
                        <th>Thur </th>
                        <td>maths </td>
                        <td> Chemistry <br/> History</td>
                        <td> Chemistry <br/> History </td>
                        <td>  Chemistry <br/> History</td>
                        <td> Chemistry <br/> History </td>
                    </tr>
                    <tr>
                        <th>Fri </th>
                        <td>maths </td>
                        <td> Chemistry <br/> History</td>
                        <td> Chemistry <br/> History </td>
                        <td>  Chemistry <br/> History</td>
                        <td> Chemistry <br/> History </td>
                    </tr>
                </tbody>
            </thead>
        </table>
        </div>
    
    </div>
</body>
</html>