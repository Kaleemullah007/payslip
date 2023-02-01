<html>
<?php


function numberTowords($num)
{ 
$ones = array( 
1 => "one", 
2 => "two", 
3 => "three", 
4 => "four", 
5 => "five", 
6 => "six", 
7 => "seven", 
8 => "eight", 
9 => "nine", 
10 => "ten", 
11 => "eleven", 
12 => "twelve", 
13 => "thirteen", 
14 => "fourteen", 
15 => "fifteen", 
16 => "sixteen", 
17 => "seventeen", 
18 => "eighteen", 
19 => "nineteen" 
); 
$tens = array( 
1 => "ten",
2 => "twenty", 
3 => "thirty", 
4 => "forty", 
5 => "fifty", 
6 => "sixty", 
7 => "seventy", 
8 => "eighty", 
9 => "ninety" 
); 
$hundreds = array( 
"hundred", 
"thousand", 
"million", 
"billion", 
"trillion", 
"quadrillion" 
); //limit t quadrillion 
$num = number_format($num,2,".",","); 
$num_arr = explode(".",$num); 
$wholenum = $num_arr[0]; 
$decnum = $num_arr[1]; 
$whole_arr = array_reverse(explode(",",$wholenum)); 
krsort($whole_arr); 
$rettxt = ""; 
foreach($whole_arr as $key => $i){ 
if($i < 20){ 
$rettxt .= $ones[$i]; 
}elseif($i < 100){ 
$rettxt .= $tens[substr($i,0,1,)]; 
$rettxt .= " ".$ones[substr($i,1,1)]; 
}else{ 
$rettxt .= $ones[substr($i,0,1)]." ".$hundreds[0]; 
$rettxt .= " ".$tens[substr($i,1,1)]; 

} 
if($key > 0){ 
$rettxt .= " ".$hundreds[$key]." "; 
} 
} 
if($decnum > 0){ 
$rettxt .= " and "; 
if($decnum < 20){ 
$rettxt .= $ones[$decnum]; 
}elseif($decnum < 100){ 
$rettxt .= $tens[substr($decnum,0,1)]; 
$rettxt .= " ".$ones[substr($decnum,1,1)]; 
} 
} 
return $rettxt; 
} 



$tittle = $_POST['tittle'];
$payslipno = $_POST['payslipno'];
$employerdetails =$_POST ['employerdetails'];
$employeedetials =$_POST ['employeedetials'];
$paydate = $_POST['paydate']??'';
$payperiod = $_POST['payperiod'];
$footernote = $_POST['footernote'];
$paymenthetails = $_POST['paymentdetails'];
$employeeSignaturetext = $_POST['employeeSignaturetext'];
$employerSignaturetext = $_POST['employerSignaturetext'];
$currency = $_POST['currency'];
$getpay = $_POST['earning'];
$amount = $_POST['amount'];
$overtime = $_POST['overtimepay'];
$overtimedetails = $_POST['overtimedetails'];
$Deduction = $_POST['deduction'];
$Deductiondetails = $_POST['taxamount'];
$checkboxes = $_POST['checkbox'];
$html = '';
foreach($checkboxes as $checkbox)
 {
 if ($checkbox === "Logo")
  {
  $html .= '<tr>
  <style>
.image
 {
  margin-left :  1000px;
  padding-top :  50px;
   }
  </style>';
 echo '<img class = "image" src="cricketina_free-file.png" "width=50  height= 60">';
       echo     ' </tr> ';
 }
    if($checkbox === 'Tittle')
    {   
      $html .='<tr> 
     <style>
     .tittle
      {
      text-align : center ;
        margin-right :  700px;
      }
     </style>
     <style>
     .hiding  
      {
       margin-top : 50px; 
          margin-left :  260px;
          font-size : 50px;
         }
          </style>';
       echo   '<h1 class = " hiding " > PaySlip </h1>';
 echo   '<p class =" tittle"> Tittle : Monthly Pay</p>';
            echo ' </tr>';        
    }
    if($checkbox === 'Payslip No')
    {
      $html .=  '<tr> 
       <style>
       .slipno 
       {text-align : center;
       margin-right : 700px;  
      }
       </style>';
      echo    '<p class = "slipno"> Payslip No : PS-002</p>';
            echo '</tr>';
    }
   if($checkbox  === ' Employer Details')
   {
    $html .= '<tr> 
    <style>
    .employer 
    {
       margin-left: 250px;
    }
    </style>';
   echo  '<p class = "employer">  Employer Details : Sphire Private Limited   </p>'; 
         echo    '</tr>';    
   }
   if($checkbox === 'Employee Details')
   {
    $html .= '<tr> 
    <style>
    .employee
    { 
  margin-left: 250px;
     }
    </style>';
   echo '<p class = "employee"> Employee Details :  Works as a eclectical enginer    </p>';
            echo '</tr>';  
   }
   if($checkbox === 'Pay Date')
   {
    $html .= '<tr> 
     <style>
     .paydate
     {
      text-align : center; 
      margin-right : 690px; 
    }
     </style>';
    echo '<p class  = "paydate">  Pay Date : 13/01/2023    </p>'; 
          echo   '</tr>';
   }
   if($checkbox === 'Pay Period')
   {
    $html .= '<tr> 
    <style>
    .payperiod
    {
     text-align : center; 
     margin-right : 670px; 
    }
    </style>';
   echo '<p class = "payperiod">  Pay Period : January 2023   </p> ';
             echo '</tr>';
   }
   if($checkbox === 'Footer Note')
     {
    $html .= '<tr> 
    <style>
    .footer
    {
     margin-left : 250px; 
    }
    </style>';
       echo '<p class = "footer"> Footer Note :Please ensure that you have recived your Monthly salary    </p>';           
           echo '<br>';
             echo '</tr>';
   } 
   if ($checkbox === 'Earning')
   {  
    $html .= '<tr>
    <style>
    .slip 
        {
          margin-left : auto ;
          margin-right : auto;
         }
    .slip th
          {
      padding: 8px;
          }
         thead:nth-child(even)
          {
          background-color: #dddddd;
        }
        tr:nth-child(even) 
        {
          background-color: #dddddd;
        } 
         .slip tr:hover {background-color: #ddd;}
         .slip th
          { 
            width : 400px;    
          padding-top: 12px;
          padding-bottom: 12px;
          text-align: left;
          padding: 8px;
          }
        </style>';
      echo    '<table class = "slip" >';      
     echo '<tr>'; 
        echo   '<th ">Employee Details</th>';       
    echo      '<th ">Employer  Details </th>';
        echo   '</tr>';
    echo   '<tr>';
    echo      '<th>Earning</th>';     
      echo     '<th  >Amount</th>';
     echo   '</tr>';
     echo '</table>';  
           echo      '</tr>';  
   }
   if ($checkbox === "Amount")
     {
    $html .=  
   '<style>
     .slipprint
        {
          margin-left : auto ;
          margin-right : auto;   
         }
         .slipprint th
         { 
     padding: 8px;
        }
        tr:nth-child(even) 
        {
          background-color: #dddddd;
        }  
         .slipprint th
          { 
            width : 400px;    
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
          padding:8px;
          }
           </style>';
      echo ' <table class = "slipprint">';
      echo     ' <tr>';
      echo    '<th>'    .  $getpay  .'</th>';
      echo    '<th>'   .$currency .$amount.'</th>';
      echo   '</tr>';   
      echo   '<tbody>';
      echo '<tr>';
      echo  '<th>'.$overtime .'</th>';
      echo  ' <th>'.$currency .$overtimedetails .'</th>';  
      echo  '</tr>';
      echo '</tbody> ';
 '</table> ';   
   }
   if ($checkbox === "Deduction")
   {
    $html .= '<tr>
    <style>
    #slip 
        {
         margin-left : auto ;
         margin-right : auto;  
        } 
    #slip th
          {    
      padding: 8px;
         }
         thead:nth-child(even) 
         {
          background-color: #dddddd;
        }        
        tr:nth-child(even) 
        {
          background-color: #dddddd;
        }   
         #slip th
          { 
            width : 400px;    
            padding-top: 12px;
            padding-bottom: 12px;
          text-align: left;
          padding: 8px;
          } 
        </style>';      
 echo '  <table id = "slip"> ';
 echo ' <tr>';
   echo '<thead>';
   echo ' <th style = "font-size: 19">'.$Deduction .'</th>';   
   echo  '<th style = "font-size: 19">'.$currency .$Deductiondetails.'</th>';
   echo ' </thead>';
  echo '</tr>';
 echo  '<tr>';
 echo  '<tbody>';
  echo  '<th>Total Pay</th>';
    echo  '<th>'.$currency .$amount + $overtimedetails - $Deductiondetails .'</th>';
  echo ' </tbody>';
  echo '</tr>';
 ' </table>';   
        '</tr>';
   }
   if($checkbox === 'Payment Details')
   {
    $html .= '<tr> 
    <style>
    #slips 
        {   
      margin-left : auto ;
      margin-right : auto;    
         }
    #slips th
          {
      padding: 8px;
         }
         thead:nth-child(even)
          {
          background-color: #dddddd;
        } 
        tr:nth-child(even)  
         {
          background-color: #dddddd;
        }
         #slips th
          { 
            width : 400px;    
          padding-top: 12px;
          padding-bottom: 12px;
          text-align: left;
          padding: 8px;
          }
    .signature{
      margin-left : 243px;
     }
        </style>';
   echo '<table id = "slips"> ';
  echo '<tr>';
  echo '<tbody>';
   echo  '<th>Total Pay in Words</th>';
    echo '<th>' .$currency .numberTowords($amount + $overtimedetails - $Deductiondetails)  .'</th>';
    echo '</tbody>';
echo   '</tr>';
echo   '</table>';
         echo  '</tr>';
   }  
   if($checkbox === 'Signatures')
   {
    $html .= '<tr> 
    <style>   
   .name 
        {
      margin-left : auto ;
      margin-right : auto;
         }
    .name td
          {
      padding: 8px;   
           }
         thead:nth-child(even)
          {
          background-color: #dddddd;
          }      
        tr:nth-child(even) 
        {
          background-color: #dddddd;
        }      
        .name td
          { 
            width : 83%;    
          text-align: left;
          padding-top: 5px;
          }        
       }
        </style>
           <br>
  <h3 class = "signature"> Payment Details </h3>
 <p style = "  margin-left : 243px;"> Payment made to employees  bank account </p>
        <table class = "name">
        <tr>
    <td > Employer Signature </td>  
<td> Employee Signature </td>
</tr>
</table>
     </tr>';
   }
   if($checkbox === 'Currency')
   {
    $html .= '<tr> 
    <style>
    .currency 
    {
      margin-left : 250px;
    }
        </style> 
      <br>
      <br>
      <p style = "text-align : center ;"> This ia system generated Payslip</p>
      <div style = "margin-bottom : 400px;"> 
      </div>
      </tr>';
    }     
}                        
echo $html;
// database connection
 //$conn = new mysqli('localhost','root','','slipdetails');
 //if($conn->connect_error){
 //    die('connection failed : ' .$conn->connect_error);
 //}else{
  //   $stmt = $conn->prepare("insert into printslip(tittle,payslipno,employerdetails,employeedetials, paydate , payperiod , footernote , paymenthetails , employeeSignaturetext , employerSignaturetext , currency  )
    // values(?, ? , ? , ? , ? , ? , ? , ? , ? , ? , ?)");
    // $stmt->bind_param("ssssssssssi" , $tittle , $payslipno , $employerdetails , $employeedetials , $paydate ,
    // $payperiod , $footernote , $paymenthetails , $employeeSignaturetext , $employerSignaturetext, $currency );
    // $stmt->execute();
    // echo "Information is saved successfully ... ";
    // $stmt->closed();
    // $conn->closed();
// }


?>
</html>









