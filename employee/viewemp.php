<?php
session_start();
include 'connection.php';

?>
<div class="col-lg-12">
<div class="row">
  <!-- Default Table -->
  <table class="table">
   <thead>
     <tr>
     
      
       <th scope="col">name</th>
       <th scope="col">email</th>
       <th scope="col">password</th>
       <th scope="col">phone</th>
       <th scope="col">aadhar_num</th>
       <th scope="col">address</th>
    
     </tr>
   </thead>
   <tbody>
      <?php
$sql=mysqli_query($con,"select * from employee_reg order by emp_id desc");
while($result=mysqli_fetch_array($sql))
{ ?>
    
     <tr>
    
      
       <td><?php echo $result['name']; ?></td>
       <td><?php echo $result['email']; ?></td>
       <td><?php echo $result['password']; ?></td>
       <td><?php echo $result['phone']; ?></td>
       <td><?php echo $result['aadhar_num']; ?></td>
       <td><?php echo $result['address']; ?></td>
      
     </tr>
     <?php } ?>
   </tbody>
 </table>
 <!-- End Default Table Example -->


 
</section>
</div>

</div>