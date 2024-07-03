<?php
$PageName="المدارس الأكاديمية";
include 'header.php';
?>
            <br />
            <br />
            <br />
            <br />

            <div class="row">
                <div id="banner" class="container-fluid col-xs-12">
                    <div id="banner-img" style="background-image: url(images/banner-about.jpg);">
                        <div class="overlay">
                            <h3 class="title1 text-center custom-title hidden-sm hidden-md hidden-lg hidden-xl hidden-xxl">
                                <br />
                                التسجيل المدارس
                            </h3>

                            <h2 class="title1 text-center custom-title hidden-xs">
                                التسجيل المدارس
                            </h2>
                        </div>
                    </div>
                </div>
            </div>

            <br />
            <br />
            <br />

            <div class="row">
                <div class="container">
                    <div class="col-xs-12 text-center">
                        <h3>تسجيل</h3>
                        <h3>المدارس الأكاديمية</h3>
                    </div>
                    <div class="col-xs-12 col-md-12">
                        <form action="operations.php" method="post" id="contact-us" class="form">
                            <div class="form-group col-sm-4">
                                <input 
                                 type="text" 
                                 name="SchoolName" 
                                 id="SchoolName" 
                                 autocomplete="off" 
                                 placeholder="إسم المدرسة"  
                                 required 
                                 class="form-control custom-form-control input-lg " />
                            </div>

                            <div class="form-group col-sm-4">
                                <input 
                                 type="text" 
                                 name="SchoolType" 
                                 id="SchoolType" 
                                 autocomplete="off" 
                                 placeholder=" نوع المدرسة"  
                                 required 
                                 class="form-control custom-form-control input-lg " />
                            </div>

                            <div class="form-group col-sm-4">
                                <input 
                                 type="text" 
                                 name="SchoolManager" 
                                 id="SchoolManager" 
                                 autocomplete="off" 
                                 placeholder=" مدير المدرسة"  
                                 required 
                                 class="form-control custom-form-control input-lg " />
                            </div>

                            <div class="form-group col-sm-4">
                                <input 
                                 type="text" 
                                 name="SchoolPhone" 
                                 id="SchoolPhone" 
                                 autocomplete="off" 
                                 placeholder=" هاتف المدرسة"  
                                 required 
                                 class="form-control custom-form-control input-lg " />
                            </div>

                            <div class="form-group col-sm-4">
                                <input 
                                 type="text" 
                                 name="SchoolMobile" 
                                 id="SchoolMobile" 
                                 autocomplete="off" 
                                 placeholder=" جوال المدرسة"  
                                 required 
                                 class="form-control custom-form-control input-lg " />
                            </div>

                            <div class="form-group col-sm-4">
                                <input 
                                 type="text" 
                                 name="SchoolWhatsapp" 
                                 id="SchoolWhatsapp" 
                                 autocomplete="off" 
                                 placeholder=" وأتساب المدرسة"  
                                 required 
                                 class="form-control custom-form-control input-lg " />
                            </div>

                            <div class="form-group col-sm-4">
                                <input 
                                 type="text" 
                                 name="SchoolEmail" 
                                 id="SchoolEmail" 
                                 autocomplete="off" 
                                 placeholder="بريد المدرسة"  
                                 required 
                                 class="form-control custom-form-control input-lg " />
                            </div>

                            <div class="form-group col-sm-4">
                                <input 
                                 type="text" 
                                 name="SchoolRegion" 
                                 id="SchoolRegion" 
                                 autocomplete="off" 
                                 placeholder=" إقليم المدرسة"  
                                 required 
                                 class="form-control custom-form-control input-lg " />
                            </div>

                            <div class="form-group col-sm-4">
                                <input 
                                 type="text" 
                                 name="SchoolCity" 
                                 id="SchoolCity" 
                                 autocomplete="off" 
                                 placeholder="مدينة المدرسة"  
                                 required 
                                 class="form-control custom-form-control input-lg " />
                            </div>

                            <div class="form-group col-sm-4">
                                <input 
                                 type="text" 
                                 name="SchoolDistrict" 
                                 id="SchoolDistrict" 
                                 autocomplete="off" 
                                 placeholder="مديرية المدرسة"  
                                 required 
                                 class="form-control custom-form-control input-lg " />
                            </div>

                            <div class="form-group col-sm-4">
                                <input 
                                 type="text" 
                                 name="SchoolSpecialty" 
                                 id="SchoolSpecialty" 
                                 autocomplete="off" 
                                 placeholder="تخصص المدرسة"  
                                 required 
                                 class="form-control custom-form-control input-lg " />
                            </div>

                            <div class="form-group col-sm-4">
                                <input 
                                 type="text" 
                                 name="SchoolSyllabus" 
                                 id="SchoolSyllabus" 
                                 autocomplete="off" 
                                 placeholder=" منهج المدرسة"  
                                 required 
                                 class="form-control custom-form-control input-lg " />
                            </div>

                            <div class="form-group col-sm-4">
                                <input 
                                 type="text" 
                                 name="RegistrationDate" 
                                 id="RegistrationDate" 
                                 autocomplete="off" 
                                 placeholder="تاريخ التسجيل "  
                                 required 
                                 class="form-control custom-form-control input-lg " />
                            </div>

                            <div class="form-group col-sm-4">
                                <input 
                                 type="text" 
                                 name="StartContract" 
                                 id="StartContract" 
                                 autocomplete="off" 
                                 placeholder="بداية الصفقة "  
                                 required 
                                 class="form-control custom-form-control input-lg " />
                            </div>

                            <div class="form-group col-sm-4">
                                <input 
                                 type="text" 
                                 name="EndContract" 
                                 id="EndContract" 
                                 autocomplete="off" 
                                 placeholder="نهاية الصفقة"  
                                 required 
                                 class="form-control custom-form-control input-lg " />
                            </div>

                            
                          
                            <div class="form-group col-md-12 text-center">
                                <input 
                                type="submit" 
                                name="RegisterSchool"
                                value="التسجيل" 
                                onclick="ValidateEmail(email)" 
                                class="send-btn btn custom-btn btn-primary custom-btn-main" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>


            <div class="text-center">
                <br />
                <br />
                <h3>
                    قائمة 
                </h3>
                <h3>
                    المدارس الأكاديمية
                </h3>
            </div>

            <div style="overflow-x: auto;">
                <br />
                <br />
                <table id="example" class="table table-striped table-bordered" style="width: 100%; border: 4px solid white;">
                    <thead>
                        <tr>
                            
                            <th style="width: 3%;">إسم المدرسة</th>
                            <th style="width: 3%;">نوع المدرسة</th>
                            <th style="width: 3%;">مدير المدرسة</th>
                            <th style="width: 3%;">هاتف المدرسة</th>
                            <th style="width: 3%;">جوال المدرسة</th>
                            <th style="width: 3%;">وأتساب المدرسة</th>
                            <th style="width: 3%;">بريد المدرسة</th>
                            <th style="width: 3%;">إقليم المدرسة</th>
                            <th style="width: 3%;">مدينة المدرسة</th>
                            <th style="width: 3%;">مديرية المدرسة</th>
                            <th style="width: 3%;">تخصص المدرسة</th>
                            <th style="width: 3%;">منهج المدرسة</th>
                            <th style="width: 3%;">تاريخ التسجيل </th>
                            <th style="width: 3%;">بداية الصفقة </th>
                            <th style="width: 3%;">نهاية الصفقة </th>
                            
                        </tr>
                    </thead>
                 <tbody> 
                 <?php
                
           
                    $sql = "SELECT * FROM schools ORDER BY Id ASC  ";
                    $result=$conn->query($sql);
                    if(!$result){
                        exit;
                    }

                    while($row = $result->fetch_assoc()){
                        echo "
                        

                        <tr>
                            <td>$row[SchoolName]</td> 
                            <td>$row[SchoolType]</td> 
                            <td>$row[SchoolManager]</td>
                            <td>$row[SchoolPhone]</td>
                            <td>$row[SchoolMobile]</td>
                            <td>$row[SchoolWhatsapp]</td>
                            <td>$row[SchoolEmail]</td> 
                            <td>$row[SchoolRegion]</td> 
                            <td>$row[SchoolCity]</td>
                            <td>$row[SchoolDistrict]</td>
                            <td>$row[SchoolSpecialty]</td>
                            <td>$row[SchoolSyllabus]</td>
                            <td>$row[RegistrationDate]</td> 
                            <td>$row[StartContract]</td> 
                            <td>$row[EndContract]</td>
                        </tr>
                        ";
                    }

                   
                ?>
                </tbody> 
                </table>
            </div>


            <?php
include 'footer.php';
?>