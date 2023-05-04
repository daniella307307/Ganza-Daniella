<?php
include 'connection.php';
$output = '';

if(isset($_POST['download'])){
    $format=$_GET['format'];
    $sql = "SELECT * FROM people";
    $result = $con->query($sql);
   
    if(mysqli_num_rows($result) > 0){
        $output .='<table class="table" border="1">
                    <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Gender</th>
                    </tr>';

        while($row = mysqli_fetch_assoc($result)){
           $output.= '<tr>
                        <td>'.$row['fullname'].'</td>
                        <td>'.$row['email'].'</td>
                        <td>'.$row['phone_number'].'</td>
                        <td>'.$row['gender'].'</td>
                
                 </tr>';
        }
        echo '</table>';
        if($format == 'PDF'){
            header('Content-type: application/pdf');
            header('Content-Disposition: attachment; filename=reports.pdf');
        }else if($format == 'XLS'){
            header('Content-type: application/xls');
            header('Content-Disposition: attachment; filename=reports.xls');
        }
        echo $output;
    } else {
        echo 'No data was found';
    }  
}
?>