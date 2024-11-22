
<!doctype html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
</head>
<?php
        if($_SERVER['REQUEST_METHOD'] =='POST') 
        {
            $_name=$_POST['name'];
            $_email=$_POST['email'];
            $_mrks=$_POST['mrks'];
            $_age=$_POST['age'] ;
            $_gender=$_POST['gender'];
            $_level=$_POST['level'];
            $_tel=$_POST['tel'];
            $_count=$_POST['count'];
            $_pass=$_POST['pass'];
            $_birth=$_POST['birth'];
           
            
        echo("<h3>THE RECORDS</h3>");
        echo "<table border='2'>
        <tr>
            <th>Student</th>
            <th>email</th>
            <th>marks</th>
            <th>age</th>
            <th>gender</th>
            <th>level</th>
            <th>tel</th>
            <th>country</th>
            <th>password</th>
            <th>birthdate</th>
        </tr>
        <tr>
            <td>$_name</td>
            <td>$_email</td>
            <td>$_mrks</td>
            <td>$_age</td>
            <td>$_gender</td>
            <td>$_level</td>
            <td>$_tel</td>
            <td>$_count</td>
            <td>$_pass</td>
            <td>$_birth</td>
        </tr>
    </table>";
        } 
