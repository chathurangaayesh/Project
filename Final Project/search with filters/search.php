<?php 
include ("connection.php");
session_start();
 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

   <!--  -->
    
    <link href="css/main.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  </head>
  <body>

<div class="topnav">
  <div class="nav-links">
  <a id="back"  href="../Login_page.php"><i class="fa fa-arrow-left"></i></a>

  
  </div>
  <div class="logo"><a href="admin_page.html"><h2>Southern Province Engineering Services</h2></a></div>

</div>


    <div class="s010">
      <form action ="search.php" method="POST">
        <div class="inner-form">
            <div class="basic-search">
               <div class="input-field">
                      <input id="search" type="text" placeholder="Type Keywords" name="Keywords" />
               </div>
             </div>
          <div class="row">
           <div class="advance-search">
            <div align="center">
                  <span class="desc">ADVANCED SEARCH</span>
              
                <div class="input-field">
                    <div class="input-select">
                      
                        <select    name="Selected_option"  >
                          <!-- <option class="option" >Select Option</option> -->
                          <option class="option" value="name">BY First Name</option>
                          <option class="option" value="nic">By nic</option>
                          <!-- <option class="option" value="WOD">BY WOD</option> -->
                          <option class="option" value="Telephone">By Telephone Number</option>
                        </select>
                        
                    </div>
                </div>

                <div class="input-field">
                  <div class="group-btn">
                    <div align="center">
                        <button class="btn-search"  name="search">SEARCH</button>
                        <button class="btn-delete" id="delete">RESET</button>
                    </div>
                  </div>
                </div>

            </div>
            <div class="search-table"  align="center" >
               
        
      
   
<?php
  if(isset($_POST['search'])){
     echo "<table class='table table-bordered'>
      <thead>
      <tr><th>Fullname</th>
      <th>nic</th>
      <th>Mobile Number</th>
      <th>More</th>
      </tr>
        </thead>
      <tbody>";
   $Keywords=mysqli_real_escape_string($conn,$_POST["Keywords"]);
     if($Keywords=="")
     {
        echo "<script type='text/javascript'>alert('Search Faild!  Empty Keywords        Please Enter Keyword')</script>";
      }else   {
              // echo $Keywords=mysqli_real_escape_string($conn,$_POST["Keywords"]);
              
      $Selected_option=mysqli_real_escape_string($conn,$_POST["Selected_option"]);
        if($Selected_option=='name'){
            $sql="SELECT*FROM employee_personal_detail WHERE (f_name LIKE '%".$Keywords."%') OR (l_name LIKE '%".$Keywords."%')";
            $result=mysqli_query($conn,$sql);
              if( mysqli_num_rows($result)>0){
                  while ($result_set=mysqli_fetch_assoc($result)) {
                    $nic=$result_set['nic'];
                    $_SESSION['emp_name']=$result_set['f_name']." ".$result_set['l_name'];
                    echo "<td>".$result_set['f_name']." ".$result_set['l_name']."</td>";
                      echo "<td>".$result_set['nic']."</td>";
                        echo "<td>".$result_set['mobile']."</td>";
                        echo "<td>
                          <a href='more_emp.php?nic=$nic'>More</a></td></tr>";
                    }
              }
              else{
                echo "<script type='text/javascript'>alert('no match data For This name!')</script>";
                  }    
          }
          elseif ($Selected_option=='nic'){
                    
            $sql1="SELECT*FROM employee_personal_detail WHERE nic='$Keywords' ";
              $result1=mysqli_query($conn,$sql1);
                if( mysqli_num_rows($result1)>0){ 
                  while ($result_set1=mysqli_fetch_assoc($result1)) {
                    $nic=$result_set1['nic'];
                    echo "<td>".$result_set1['f_name']." ".$result_set1['l_name']."</td>";
                    echo "<td>".$result_set1['nic']."</td>";
                    echo "<td>".$result_set1['mobile']."</td>";
                    echo "<td>
                          <a href='more_emp.php?nic=$nic'>More</a></td></tr>";
                       }  
                }
                else{
                   echo "<script type='text/javascript'>alert('no match data For This nic!')</script>";
                }
             }elseif($Selected_option=='Telephone'){

                  $sql2="SELECT*FROM employee_personal_detail WHERE mobile= '$Keywords' ";
                   $result2=mysqli_query($conn,$sql2);
                if( mysqli_num_rows($result2)>0){ 
                  while ($result_set2=mysqli_fetch_assoc($result2)) {
                    $nic=$result_set2['nic'];
                     echo "<td>".$result_set2['f_name']." ".$result_set2['l_name']."</td>";
                     echo "<td>".$result_set2['nic']."</td>";
                     echo "<td>".$result_set2['mobile']."</td>";
                    echo "<td>
                          <a href='more_emp.php?nic=$nic'>More</a></td></tr>";;
                       }  
                     }
                      else{
                    echo "<script type='text/javascript'>alert('no match data For This Telephone Number!')</script>";
               }


               }

               else{
                echo "<script type='text/javascript'>alert('no match data!')</script>";
              }

             }
             
                    

                // if(isset($_POST["Keywords"])){
                //     $Keywords=mysqli_real_escape_string($conn,$_POST["Keywords"]);
                //     $sql="SELECT*FROM employee_personal_detail WHERE  (nic='$Keywords') OR (f_name='$Keywords') OR (l_name='$Keywords') OR (mobile='$Keywords')  ";
                //       $result=mysqli_query($conn,$sql);
                //       $result_set=mysqli_fetch_assoc($result);

                //       echo "<tr><td>".$result_set['nic'];
                // }
                // elseif (isset($_POST["Selected_option"])) {
                //       $Selected_option=mysqli_real_escape_string($conn,$_POST["Selected_option"]);
                //        $sql1="SELECT*FROM employee_personal_detail WHERE f_name LIKE '%".$Keywords."%' OR l_name LIKE '%".$Keywords."%' ";
                //       $result1=mysqli_query($conn,$sql1);
                //       $result_set1=mysqli_fetch_assoc($result1);
                // }
                // else
                // {
                //   echo "<script type='text/javascript'>alert('Search  Failed!  Enter Keyword and Try again')</script>";
                // }
            
                  
                echo " </tbody>
                      </table>";   
        } ?>  
          </div>  
          </div>

        </div>
      </div>
      </form>


    </div> <!--  -->
   
  </body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
