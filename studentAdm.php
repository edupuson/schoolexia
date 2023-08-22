<?php

include "inc/header.php";
include "inc/snippet.php";

//Clean the input before adding to the database
if(isset($_POST["submit"])){
    $name = sanitize(trim($_POST['fname']));
    $secondName= sanitize(trim($_POST['sname']));
    $admNumber = sanitize(trim($_POST['admNum']));
    $dateOfBirth = sanitize(trim($_POST['dob']));
    $address = sanitize(trim($_POST['address']));
    $location = sanitize(trim($_POST['location']));
    $allergy = sanitize(trim($_POST['allergy']));
    $height = sanitize(trim($_POST['height']));
    $weight = sanitize(trim($_POST['weight']));
    $disabled = sanitize(trim($_POST['disabled']));
    $parentFname = sanitize(trim($_POST['pFname']));
    $parentSname= sanitize(trim($_POST['pSname']));
    $telNumber = sanitize(trim($_POST['telNo']));
    $nationality = sanitize(trim($_POST['nationality']));

}


?>
<style>
    .col-1{
        transform: translate(30px);

transition: opacity 1s ease-in-out, transform 0.5s ease-in-out

    }

    .col-2{
        transform: translate(50px);

transition: opacity 1s ease-in-out, transform 0.5s ease-in-out

    }
  

.col-md{
 
  background-color: #556962;
  opacity: 0.9;
 

}
.col-1:hover{

    opacity: 1;
  transform: translate(10px);

}
.col-2:hover{
    opacity: 1;
    transform: translate(20px);

}


    
</style>

<body background="backimg.jpg">
  
    <div class="container-fluid">

        <div class="mt-4 p-5   rounded" style="background-color: #16473c;">
        

            <h1> SCHOOLEXIA</h1>
            <p style="font-size: 20px;">A school management system</p>
        </div>
    </div>

    <div class="container form-sections scroll">
        <div class="row ${1| ,row-cols-2,row-cols-3, auto,justify-content-md-center,|}">
            <div class="col-md col-1" style="border-right: 1px solid lightblue;">
                <form action="studentAdm.php" method="post" class=" needs-validation" id="studentForm">
                    <fieldset class="student">
                        <legend>Student Details</legend>

                        <div class="mb-3 mt-3">
                            <label for="fname" class=" form-label">First Name:</label>
                            <input type="text" name="fname" id="fname" class=" form-control" placeholder="First Name">
                        </div>

                        <div class="mb-3 mt-3">
                            <label for="sname" class=" form-label">Second Name:</label>
                            <input type="text" name="sname" id="sname" class=" form-control" placeholder="Second Name">
                        </div>

                        <div class="mb-3 mt-3">
                            <label for="admNum" class=" form-label">Admssion Number:</label>
                            <input type="text" name="admNum" id="admNum" class=" form-control" placeholder="Admission Number">
                        </div>

                        <div class="mb-3 mt-3">
                            <label for="dob" class=" form-label">Date of Birth:</label>
                            <input type="date" name="dob" id="dob" class=" form-control" placeholder="Date of birth">
                        </div>

                        <div class="mb-3 mt-3">
                            <label for="adress" class=" form-label">Address:</label>
                            <input type="text" name="address" id="address" class=" form-control" placeholder="Address">
                        </div>
                       
                        <div class="mb-3 mt-3">
                            <label for="Location" class=" form-label">Location:</label>
                            <input type="text" name="location" id="loction" class=" form-control" placeholder="location">
                        </div>



                    </fieldset>

                    <fieldset>
                        <legend>Medical Details</legend>
                        <div class="mb-3 mt-3">
                            <label for="allergy" class=" form-label">Known Allergy:</label>
                            <input type="text" name="allergy" id="allergy" class=" form-control" placeholder="Known Allergens">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="Height" class=" form-label">Height(feet) :</label>
                            <input type="text" name="height" id="height" class=" form-control" placeholder="height">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="weight" class=" form-label">Weight(kg):</label>
                            <input type="text" name="weight" id="weight" class=" form-control" placeholder="weight">
                        </div>

                        <div class="mb-3 mt-3">
                            <label for="section">Disabled</label> <br>
                            <input type="radio" id="yes" name="disabled" value="yes">
                            <label for="yes">YES</label><br>
                            <input type="radio" id="no" name="disabled" value="no">
                            <label for="no">NO</label><br>
                            <input type="radio" id="other" name="disabled" value="other">
                            <label for="other">Other</label>
                        </div>
                    

                    </fieldset>               

                 

               


            </div>
            <div class="col-md col-2">
               
                    <fieldset>
                        <legend>Parent/Gaurdian Details</legend>
                        <div class="mb-3 mt-3">
                            <label for="pFname" class=" form-label">First Name:</label>
                            <input type="text" name="pFname" id="pFname" class=" form-control" placeholder="First Name">
                        </div>

                        <div class="mb-3 mt-3">
                            <label for="pSname" class=" form-label">Second Name:</label>
                            <input type="text" name="pSname" id="pSname" class=" form-control" placeholder="Second Name">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="telNo" class=" form-label">Telephone:</label>
                            <input type="text" name="telNo" id="telNo" class=" form-control" placeholder="071267890">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="Nationality"> Nationality:</label>
                            <input type="text" name="nationality" id="nationality" placeholder=" Kenyan" class=" form-control">
                        </div>

                    </fieldset>
                    <fieldset>
                        <legend>Requirements:</legend>
                        

                        <div class="mb-3 mt-3">
                            <label for="section">School Requirements</label> <br>
                            <input type="checkbox" id="yes" name="disabled" value="yes">
                            <label for="yes">Fee Paid</label><br>
                            <input type="checkbox" id="no" name="disabled" value="no">
                            <label for="no">Rim of Paper</label><br>
                            <input type="checkbox" id="other" name="disabled" value="other">
                            <label for="other">Other</label>
                        </div>
                    </fieldset>
                    <div class="mb-3 mt-3">
                        <input type="submit" class=" form-group-sm btn btn-primary" value="ADD STUDENT">
                    </div>

                </form>

            </div>
        </div>

    </div>
</body>



</html>