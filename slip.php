
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
   
    <title>Slip</title>
</head>
<body>
<div class =" container py-2">
<form action="connection.php" method="post">
<label class="form-label" for="customFile">Logo</label>
<input type="file" name="logo" id="logo" class="form-control" id="customFile">
<div class="grid gap-3">
<div class="p-2 g-col-6">
    <label for="">Tittle</label>
  <input type="text" name = "tittle" id="tittle" class="form-control" placeholder = "Payslip" aria-describedby="inputGroup-sizing-sm"> 
  </div>
  <div class="p-2 g-col-6"> 
       <label for="">Payslip No</label>
  <input type="text" name = "payslipno" id= "payslipno" class="form-control" placeholder = "PS-2001" aria-describedby="inputGroup-sizing-sm"> 
</div>
  <div class="p-2 g-col-6">
  <label for="">Employer Details</label>
  <textarea class="form-control" name = "employerdetails" id="employerdetails" placeholder="Employer Name and Address"  style="height: 100px"></textarea> 
  </div>
  <div class="p-2 g-col-6">  
  <label for="">Employee Details</label>
  <textarea class="form-control" name = "employeedetials" id = "employeedetials" placeholder="Employee ID, Name and Destination"  style="height: 100px"></textarea>
     </div>
    </div>
   </div>





   <div class="container">

<div class="grid gap-3">
  <div class="p-2 g-col-6">
    <label for="">Pay Date</label>
  <input type="date" class="form-control" name ="paydate " id = "paydate" aria-describedby="inputGroup-sizing-sm"> 
  </div>
  <div class="p-2 g-col-6">   
     <label for="">Pay Period</label>
  <input type="text" class="form-control" placeholder = "Febraury 2003" name="payperiod" id="payperiod" aria-describedby="inputGroup-sizing-sm"> 
</div>
  <div class="p-2 g-col-6">
  <label for="">Footer Note</label>
  <textarea class="form-control" placeholder="This is system generated slip" name ="footernote" id="footernote"></textarea>

  
  </div>
  <div class="p-2 g-col-6">  
  <label for="">Payment Details</label> 
  <textarea class="form-control" placeholder="Payment made to employee's bank account" name ="paymentdetails"id="paymentdetails"></textarea>
</div>


<div class="p-2 g-col-6">
    <label for="">Employee Signature text</label>
  <input type="text" class="form-control" name ="employeeSignaturetext" id="EmployeeSignaturetext" placeholder = "employee Signature" aria-describedby="inputGroup-sizing-sm"> 
  </div>


  <div class="p-2 g-col-6">
    <label for="">Employer Signature text</label>
  <input type="text" class="form-control" name ="employerSignaturetext" id = "employerSignaturetext" placeholder = "Employer Signature" aria-describedby="inputGroup-sizing-sm"> 
  </div>




</div>

</div>

<div class="container">

  <label for="">Currency</label>

<select class="form-select" name ="currency">
<option selected value="">AED</option>
<option value="₹">INR</option>
<option value="SR">ر. سSAR</option>
<option value="RS">RUPEES</option>
<option value="$">Dollar</option>
<option value="£">Pound Sterling</option>
</select>
</div>
</div>





<div class="container">

<div class="grid gap-3">
  <div class="p-2 g-col-6">
  <label  >Earning </label>
  <input type="text" class="form-control" name ="earning" id = "earning" placeholder = "Basic Pay" aria-describedby="inputGroup-sizing-sm"> 
  </div>
  <div class="p-2 g-col-6">   
     <label >Amount</label>
  <input type="number" class="form-control" placeholder = "0" name="amount" id="amount" aria-describedby="inputGroup-sizing-sm"> 
</div>
  <div class="p-2 g-col-6">

  <input type = "text" class="form-control" placeholder="Overtime Pay" name ="overtimepay" id="overtimepay" aria-describedby="inputGroup-sizing-sm">

  
  </div>
  <div class="p-2 g-col-6">  
  <input type =   "text" class="form-control" placeholder="0" name ="overtimedetails" id="overtimedetails" aria-describedby="inputGroup-sizing-sm">
</div>


<div class="p-2 g-col-6">
    <label >Decduction</label>
  <input type="text" class="form-control" name ="deduction" id="deduction" placeholder = "Tax" aria-describedby="inputGroup-sizing-sm"> 
  </div>


  <div class="p-2 g-col-6">
    <label >Amount</label>
  <input type="text" class="form-control" name ="taxamount" id = "taxamount" placeholder = "0" aria-describedby="inputGroup-sizing-sm"> 
  </div>

<br>


</div>

</div>




<!--options button-->

<div class="text-center">

<a href = "new.php">   <button type="button" class="btn btn-outline-success">Save</button></a>  
  <a href ="slipprint.php"><button type="button" class="btn btn-success">print</button></a>




<!-- Button trigger modal -->
<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
 Options
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Options</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!--model body-->
        <table class="table">
 
  <tbody>
  <tr>
    <th scope="row">1</th>
      <td>Logo</td>
     <td>
        <input type="checkbox"   name = "checkbox[]" value="Logo" checked >
      </td>
    </tr>
    <tr>
    <th scope="row">2</th>
      <td>Tittle</td>
     <td>
        <input type="checkbox"   name = "checkbox[]" value="Tittle" checked >
      </td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Payslip No</td>
      <td>
        <input type="checkbox"  name = "checkbox[]" value="Payslip No" checked  >
      </td>
      
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>Employer Details</td>
      <td>
        <input type="checkbox"  name = "checkbox[]" value =" Employer Details" checked  >
      </td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td>Employee Details</td>
      <td>
        <input type="checkbox"  name = "checkbox[]" value = "Employee Details" checked  >
      </td>
    </tr>
    <tr>

      <th scope="row">6</th>
      <td>Pay date</td>
      <td>
        <input type="checkbox"  name = "checkbox[]" value = "Pay Date" checked  >
      </td>
    </tr>
    <tr>
      <th scope="row">7</th>
      <td>Pay Period</td>
      <td>
        <input type="checkbox"  name = "checkbox[]" value = "Pay Period" checked  >
      </td>
    </tr>
    
    <tr>
      <th scope="row">8</th>
      <td>Footer Note</td>
      <td>
        <input type="checkbox"  name = "checkbox[]" value ="Footer Note"  checked >
      </td>
    </tr>
    <tr>
      <th scope="row">9</th>
      <td>Earning</td>
      <td>
        <input type="checkbox"  name = "checkbox[]" value ="Earning"  checked >
      </td>
    </tr>
    <tr>
      <th scope="row">10</th>
      <td>Amount</td>
      <td>
        <input type="checkbox"  name = "checkbox[]" value ="Amount"  checked >
      </td>
    </tr>
    
 
    <tr>
      <th scope="row">11</th>
      <td>Deduction</td>
      <td>
        <input type="checkbox"  name = "checkbox[]" value ="Deduction"  checked >
      </td>
    </tr>
    
    <tr>
      <th scope="row">12</th>
      <td>Payment Details</td>
      <td>
        <input type="checkbox"  name = "checkbox[]" value = "Payment Details" checked >
      </td>
    </tr>
    <tr>
      <th scope="row">13</th>
      <td> Signatures </td>
      <td>
        <input type="checkbox"  name = "checkbox[]" value="Signatures" checked  >
      </td>
    </tr>
    <tr>
      <th scope="row">14</th>
      <td>Currency  </td>
      <td>
        <input type="checkbox" name = "checkbox[]" value = "Currency" checked >
      </td>
    </tr>
  </tbody>
</table>

      </div>
      <div class="modal-footer">
       <input type="submit" name="submit" id="submit">
        
        </div>
         
        </div>
      </div>
     </div>
    </div>
  </form>
 <br>   
 <script src="Bootstrap/js/bootstrap.min.js"></script>
 <script src="Boostrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>

