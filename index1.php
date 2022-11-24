<?php
require('vendor/autoload.php');
$con = mysqli_connect('localhost','root','','cinema_db');
$res = mysqli_query($con,"select * from bookingtable");
if(mysqli_num_rows($res) > 0){
    $html = '<style>.table{border: solid 1px black}</style></style><table class = "table">';
        $html.= '<tr class="trow"><td class="tda">ID</td> <td>Movie</td> <td>Theatre</td> <td>Type</td> <td>Booking Date</td> <td>Booking Time</td> <td>Buyer Fname</td> <td>Buyer Lname</td> <td>Buyer Phone</td></tr>';
        while($row=mysqli_fetch_assoc($res)){
            $html.= '<tr><td>'.$row['bookingID'].'</td> <td>'.$row['movieName'].'</td> <td>'.$row['bookingTheatre'].'</td> <td>'.$row['bookingType'].'</td> <td>'.$row['bookingDate'].'</td> <td>'.$row['bookingTime'].'</td> <td>'.$row['bookingFName'].'e</td> <td>'.$row['bookingLName'].'</td> <td>'.$row['bookingPNumber'].'</td></tr>';
        }
    


    $html.='</table>';
    
}else{
    $html="Data not found";
}
$mpdf=new \Mpdf\Mpdf();
$mpdf->WriteHTML($html);
$file=time().'.pdf';
$mpdf->output($file,'I');

?>