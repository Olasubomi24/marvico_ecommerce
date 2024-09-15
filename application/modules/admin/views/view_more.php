<div class="content mt-3 mx-4">

<div class="animated fadeIn">
                <div class="row">
               

                <div id="print-section">
                    <div class="col-md-12">
                        <div class="card">
                        <div class="card-header bg-primary">
                                <strong class="card-title"> <a class="navbar-brand"> <img class="img-fluid" src="<?php echo base_url('assets/images/logo-white.png'); ?>"  alt="Theme-Logo" width="15%" height="15%"></a></strong>
                            </div>
                            <div class="card-header">
                                <strong class="card-title">Personal History Form</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            
                                            <th>First Name:
                                            <br><p class="text-primary"><?php echo $fetch_user[0]['first_name']; ?></p>
                                            </th>
                                            <th>Middle Name:
                                            <br><p class="text-primary"><?php echo $fetch_user[0]['middle_name']; ?></p>
                                            </th>
                                            <th>Last Name:
                                            <br><p class="text-primary"><?php echo $fetch_user[0]['last_name']; ?></p> 
                                            </th>
                                            <th>Marital Status:
                                            <br><p class="text-primary"><?php echo $fetch_user[0]['marital_status']; ?>
                                            </th>
                                            <th>Nationality:
                                            <br><p class="text-primary"><?php echo $fetch_user[0]['nationality']; ?></p> 
                                            </th>
                                           
                                        </tr>
                                    </thead>

                                    <thead>
                                        <tr>
                                        <th>Address:
                                            <br><p class="text-primary"><?php echo $fetch_user[0]['address']; ?></p> 
                                            </th>
                                            
                                            <th>Country: <br><p class="text-primary"><?php echo $fetch_user[0]['country']; ?></th>
                                            <th> City of birth:<br><p class="text-primary"><?php echo $fetch_user[0]['city_of_birth']; ?></th>
                                            <th>Date of birth:<br><p class="text-primary"><?php echo $fetch_user[0]['date_of_birth']; ?></th>
                                            <th>Sex:<br><p class="text-primary"><?php echo $fetch_user[0]['sex']; ?></th>
                                        </tr>
                                    </thead>
                                    <thead>
                                        <tr>
                                        
                                            <th>Phone no:
                                            <br><p class="text-primary" class="text-primary"><?php echo $fetch_user[0]['phone_no']; ?></p> 
                                            </th>
                                            <th>Other Email:
                                            <br><p class="text-primary" class="text-primary"><?php echo $fetch_user[0]['other_email']; ?></p> 
                                            </th>
         
                                
                                        </tr>
                                    </thead>
</table>
                                    


    </div>
</div>
</div>
    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Next of kin</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                        <th>Name:
                                            <br><p class="text-primary" class="text-primary"><?php echo $fetch_user[0]['next_of_kin_name']; ?></p> 
                                            </th>
                                            <th>Relationship:
                                                <br><p class="text-primary" class="text-primary"><?php echo $fetch_user[0]['next_of_kin_relationship']; ?></p>
                                            </th>
                                            <th>Contact Details:
                                            <br><p class="text-primary" class="text-primary"><?php echo $fetch_user[0]['next_of_kin_contact_details']; ?></p>
                                            </th>
                                            <th>City:
                                            <br><p class="text-primary" class="text-primary"><?php echo $fetch_user[0]['next_of_kin_city']; ?></p>
                                            </th>
                                            <th>Country:
                                            <br><p class="text-primary" class="text-primary"><?php echo $fetch_user[0]['next_of_kin_country']; ?></p> 
                                            </th>
                                            
                                           
                                        </tr>
                                    </thead>
</table>

                                    </div>
</div>
</div>

<div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Medical History</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>$height:
                                                <br><p class="text-primary" class="text-primary"><?php echo $fetch_user[0]['height']; ?></p>
                                            </th>
                                            <th>Weight:
                                            <br><p class="text-primary" class="text-primary"><?php echo $fetch_user[0]['weight']; ?></p>
                                            </th>
                                            <th>blood Group:
                                            <br><p class="text-primary" class="text-primary"><?php echo $fetch_user[0]['blood_group']; ?></p>
                                            </th>
                                           
                    
                                        </tr>
                                    </thead>

                                    <thead>
                                        <tr>
                                            <th>Genotype:
                                                <br><p class="text-primary" class="text-primary"><?php echo $fetch_user[0]['genotype']; ?></p>
                                            </th>
                                            <th>Medical History:
                                            <br><p class="text-primary" class="text-primary"><?php echo $fetch_user[0]['medical_history']; ?></p>
                                            </th>
                                            <th>
                                            <br><p class="text-primary" class="text-primary"></p>
                                            </th>
                                           
                    
                                        </tr>
                                    </thead>
</table>

                                    </div>
</div>
</div>



<div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Knowledge of Language</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                        <th class >Mother Tongue:
                                            <br><p class="text-primary"><?php echo $fetch_user[0]['mother_tongue']; ?></p> 
                                            </th>
                                        </tr>
                                    </thead>

                                    <thead>
                                        <tr>
                                        <th class >OTHER LANGUAGE:
                                        <br><p class="text-primary"><?php echo $fetch_user[0]['mother_tongue']; ?>
                                            
                                        </p> 
                                            </th>

                                            <th class >Understand:
                                        <br><p class="text-primary"><?php echo $fetch_user[0]['mother_tongue']; ?>
                                            
                                        </p> 
                                            </th>
                                            <th class >Speak:
                                        <br><p class="text-primary"><?php echo $fetch_user[0]['mother_tongue']; ?>
                                            
                                        </p> 
                                            </th>

                                            <th class >Read:
                                        <br><p class="text-primary"><?php echo $fetch_user[0]['mother_tongue']; ?>
                                            
                                        </p> 
                                            </th>
                                            <th class >Write:
                                        <br><p class="text-primary"><?php echo $fetch_user[0]['mother_tongue']; ?>
                                            
                                        </p> 
                                            </th>
                                        </tr>
                                    </thead>
                                    <thead>
                                        <tr>
                                        <th class >OTHER LANGUAGE:
                                        <br><p class="text-primary"><?php echo $fetch_user[0]['mother_tongue']; ?>
                                            
                                        </p> 
                                            </th>

                                            <th class >Understand:
                                        <br><p class="text-primary"><?php echo $fetch_user[0]['mother_tongue']; ?>
                                            
                                        </p> 
                                            </th>
                                            <th class >Speak:
                                        <br><p class="text-primary"><?php echo $fetch_user[0]['mother_tongue']; ?>
                                            
                                        </p> 
                                    fetch_user[0]
                                            <th class >Read:
                                        <br><p class="text-primary"><?php echo $fetch_user[0]['mother_tongue']; ?>
                                            
                                        </p> 
                                            </th>
                                            <th class >Write:
                                        <br><p class="text-primary"><?php echo $fetch_user[0]['mother_tongue']; ?>
                                            
                                        </p> 
                                            </th>
                                        </tr>
                                    </thead>
                                    <thead>
                                        <tr>
                                        <th class >OTHER LANGUAGE:
                                        <br><p class="text-primary"><?php echo $fetch_user[0]['mother_tongue']; ?>
                                            
                                        </p> 
                                            </th>

                                            <th class >Understand:
                                        <br><p class="text-primary"><?php echo $fetch_user[0]['mother_tongue']; ?>
                                            
                                        </p> 
                                            </th>
                                            <th class >Speak:
                                        <br><p class="text-primary"><?php echo $fetch_user[0]['mother_tongue']; ?>
                                            
                                        </p> 
                                            </th>

                                            <th class >Read:
                                        <br><p class="text-primary"><?php echo $fetch_user[0]['mother_tongue']; ?>
                                            
                                        </p> 
                                            </th>
                                            <th class >Write:
                                        <br><p class="text-primary"><?php echo $fetch_user[0]['mother_tongue']; ?>
                                            
                                        </p> 
                                            </th>
                                        </tr>
                                    </thead>
</table>

                                    </div>
</div>
</div>


<div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Education</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        <th class= "col-md-4">Name:
                                            <br><p class="text-primary"><?php echo $fetch_user[0]['university_name']; ?></p> 
                                            </th>
                                            <th class= "col-md-4">Place:
                                                <br><p class="text-primary"><?php echo $fetch_user[0]['university_place']; ?></p>
                                            </th class= "col-md-4">
                                            <th>Country:
                                            <br><p class="text-primary"><?php echo $fetch_user[0]['university_country']; ?></p>
                                            </th>
                                          
            
                                        </tr>
                                    </thead>

                                    <thead>
                                    <tr>
                                        <th class= "col-md-4">Started When?:
                                            <br><p class="text-primary"><?php echo $fetch_user[0]['university_started_when']; ?></p> 
                                            </th>
                                            <th class= "col-md-4">Ended When?:
                                                <br><p class="text-primary"><?php echo $fetch_user[0]['university_started_when']; ?></p>
                                            </th>
                                            <th class="col-md-4">Course of study:
                                            <br><p class="text-primary"><?php echo $fetch_user[0]['course_of_study']; ?></p>
                                            </th>
                                          
            
                                        </tr>
                                    </thead>

                                    <thead>
                                    <tr>
                                        <th class= "col-md-4">Degree:
                                            <br><p class="text-primary"><?php echo $fetch_user[0]['degree']; ?></p> 
                                            </th>
                                           
                                          
            
                                        </tr>
                                    </thead>
</table>

                                    </div>
</div>
</div>

<div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">School</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        <th class= "col-md-4">Name:
                                            <br><p class="text-primary"><?php echo $fetch_user[0]['school_name']; ?></p> 
                                            </th>
                                            <th class= "col-md-4">Place:
                                                <br><p class="text-primary"><?php echo $fetch_user[0]['school_place']; ?></p>
                                            </th class= "col-md-4">
                                            <th>Country:
                                            <br><p class="text-primary"><?php echo $fetch_user[0]['school_country']; ?></p>
                                            </th>
                                          
            
                                        </tr>
                                    </thead>

                                    <thead>
                                    <tr>
                                        <th class= "col-md-4">Started When?:
                                            <br><p class="text-primary"><?php echo $fetch_user[0]['school_started_when']; ?></p> 
                                            </th>
                                            <th class= "col-md-4">Ended When?:
                                                <br><p class="text-primary"><?php echo $fetch_user[0]['school_started_when']; ?></p>
                                            </th>
                                            <th class="col-md-4">Type:
                                            <br><p class="text-primary"><?php echo $fetch_user[0]['school_type']; ?></p>
                                            </th>
                                          
            
                                        </tr>
                                    </thead>

                                    <thead>
                                    <tr>
                                        <th class= "col-md-4">Degree:
                                            <br><p class="text-primary"><?php echo $fetch_user[0]['degree']; ?></p> 
                                            </th>
                                           
                                          
            
                                        </tr>
                                    </thead>
</table>

                                    </div>
</div>
</div>

<div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Other School</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        <th class= "col-md-4">Name:
                                            <br><p class="text-primary"><?php echo $fetch_user[0]['other_courses_name']; ?></p> 
                                            </th>
                                            <th class= "col-md-4">Place:
                                                <br><p class="text-primary"><?php echo $fetch_user[0]['other_courses_place']; ?></p>
                                            </th class= "col-md-4">
                                            <th>Country:
                                            <br><p class="text-primary"><?php echo $fetch_user[0]['other_courses_country']; ?></p>
                                            </th>
                                          
            
                                        </tr>
                                    </thead>

                                    <thead>
                                    <tr>
                                        <th class= "col-md-4">Started When?:
                                            <br><p class="text-primary"><?php echo $fetch_user[0]['other_courses_started_when']; ?></p> 
                                            </th>
                                            <th class= "col-md-4">Ended When?:
                                                <br><p class="text-primary"><?php echo $fetch_user[0]['other_courses_started_when']; ?></p>
                                            </th>
                                            <th class="col-md-4">Type:
                                            <br><p class="text-primary"><?php echo $fetch_user[0]['other_courses_type']; ?></p>
                                            </th>
                                          
            
                                        </tr>
                                    </thead>

                                    <thead>
                                    <tr>
                                        <th class= "col-md-4"> Certificate:
                                            <br><p class="text-primary"><?php echo $fetch_user[0]['other_courses_diploma']; ?></p> 
                                            </th>
                                           
                                          
            
                                        </tr>
                                    </thead>
</table>

                                    </div>
</div>
</div>

<div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Employment Details</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        <th class= "col-md-4">Employed From:
                                            <br><p class="text-primary"><?php echo $fetch_user[0]['other_courses_name']; ?></p> 
                                            </th>
                                            <th class= "col-md-4">Employed to:
                                                <br><p class="text-primary"><?php echo $fetch_user[0]['other_courses_place']; ?></p>
                                            </th class= "col-md-4">
                                            <th>Salary Per annum start:
                                            <br><p class="text-primary"><?php echo $fetch_user[0]['salary_per_annum_start']; ?></p>
                                            </th>
                            
            
                                        </tr>
                                    </thead>

                                    <thead>
                                    <tr>
                                    <th class="col-md-4">Salary Per annum final:
                                            <br><p class="text-primary"><?php echo $fetch_user[0]['salary_per_annum_final']; ?></p>
                                            </th>
                                        <th class= "col-md-4">Started When?:
                                            <br><p class="text-primary"><?php echo $fetch_user[0]['other_courses_started_when']; ?></p> 
                                            </th>
                                            <th class= "col-md-4">Ended When?:
                                                <br><p class="text-primary"><?php echo $fetch_user[0]['other_courses_started_when']; ?></p>
                                            </th>
                                           
                                        </tr>
                                    </thead>

                                    <thead>
                                    <tr>
                                        <th class= "col-md-4"> Name of Employer:
                                            <br><p class="text-primary"><?php echo $fetch_user[0]['name_of_employer']; ?></p> 
                                            </th>
                                            <th class= "col-md-4"> Address of Employer:
                                            <br><p class="text-primary"><?php echo $fetch_user[0]['address_of_employer']; ?></p> 
                                            </th>
                                            <th class= "col-md-4"> Type of business:
                                            <br><p class="text-primary"><?php echo $fetch_user[0]['type_of_business']; ?></p> 
                                            </th>
                                          
            
                                        </tr>
                                    </thead>

                                    <thead>
                                    <tr>
                                        <th class= "col-md-4"> Name of Employer:
                                            <br><p class="text-primary"><?php echo $fetch_user[0]['name_of_employer']; ?></p> 
                                            </th>
                                            <th class= "col-md-4">
No and Kinds of Employee supervised by you:
                                            <br><p class="text-primary"><?php echo $fetch_user[0]['no_of_employee']; ?></p> 
                                            </th>
                                            <th class= "col-md-4"> Exact title of post:
                                            <br><p class="text-primary"><?php echo $fetch_user[0]['title_of_post']; ?></p> 
                                            </th>
                                          
            
                                        </tr>
                                    </thead>

                                    <thead>
                                    <tr>
                                        <th class= "col-md-4"> Reason for livng:
                                            <br><p class="text-primary"><?php echo $fetch_user[0]['reason_of_living']; ?></p> 
                                            </th>
                                            <th class= "col-md-4"> Description of duties:
                                            <br><p class="text-primary"><?php echo $fetch_user[0]['duties']; ?></p> 
                                            </th>
                                           
                                          
            
                                        </tr>
                                    </thead>
</table>

                                    </div>
</div>
</div>

</div>
<button onclick="printSection()">Print</button>
<script>
function printSection() {
  var printContent = document.getElementById("print-section").innerHTML;
  var originalContent = document.body.innerHTML;
  var printWindow = window.open('', '', 'height=600,width=800');
  printWindow.document.write('<html><head><title>Print Section</title>');
  printWindow.document.write('<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css" media="print">');
  printWindow.document.write('</head><body>');
  printWindow.document.write(printContent);
  printWindow.document.write('</body></html>');
  printWindow.document.close();
  printWindow.focus();
  printWindow.print();
  printWindow.close();
  document.body.innerHTML = originalContent;
}


  </script>