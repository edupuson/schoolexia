<?php

include "inc/header.php"
?>
<style>
    .form-sections {
        width: inherit;
        border: 1px groove #ddd !important;
        padding: 50px 1.4em 1.4em 1.4em !important;


        -webkit-box-shadow: 0px 0px 0px 0px #000;
        box-shadow: 0px 0px 0px 0px #000;
    }

    fieldset {
        display: block;
        margin-left: 2px;
        margin-right: 2px;
        padding-top: 0.35em;
        padding-bottom: 0.625em;
        padding-left: 0.75em;
        padding-right: 0.75em;
        border: 2px groove (internal value);
    }
    
</style>


<body>
    <div class="container-fluid " >
      
        <div class="mt-4 p-5 bg-primary text-white rounded" style="background-color: cadetblue;">
            <h1> SCHOOLEXIA</h1>
            <p>A school management system</p>
        </div>
    </div>

    <div class="container form-sections">
        <div class="row ${1| ,row-cols-2,row-cols-3, auto,justify-content-md-center,|}">
            <div class="col-md" style="border-right: 1px solid lightblue;">
                <form action="#" method="post">
                    <fieldset>
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
                            <input type="text" name="sname" id="sname" class=" form-control" placeholder="Admission Number">
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
                            <label for="adress" class=" form-label">Address:</label>
                            <input type="text" name="address" id="address" class=" form-control" placeholder="Address">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="Location" class=" form-label">Location:</label>
                            <input type="text" name="location" id="loction" class=" form-control" placeholder="location">
                        </div>



                    </fieldset>

                    <fieldset>
                        <legend>Health Details</legend>
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

                </form>
              

            </div>
            <div class="col-md">
                <form action="#" method="post">
                    <fieldset>
                        <legend>Parent/Gaurdian Details</legend>
                        <div class="mb-3 mt-3">
                            <label for="fname" class=" form-label">First Name:</label>
                            <input type="text" name="fname" id="fname" class=" form-control" placeholder="First Name">
                        </div>

                        <div class="mb-3 mt-3">
                            <label for="sname" class=" form-label">Second Name:</label>
                            <input type="text" name="sname" id="sname" class=" form-control" placeholder="Second Name">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="telNo" class=" form-label">Telephone:</label>
                            <input type="text" name="telNo" id="telNo" class=" form-control" placeholder="071267890">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="Nationality">  Nationality:</label>
                            <input type="text" name="nationality" id="nationality" placeholder=" Kenyan" class=" form-control">
                        </div>

                    </fieldset>

                </form>

            </div>
        </div>

    </div>
</body>

</html>