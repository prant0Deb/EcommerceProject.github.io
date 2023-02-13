<?php
// session_start : user login cheak
if (session_status() === PHP_SESSION_NONE) {
   session_start();
};
// check admin
require "include/cheak-admin.php";
require "../include/config.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Add Sub. Category</title>
   <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css" />
   <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css" />
   <link href="../assets/css/font-awesome.min.css" rel="stylesheet" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <link href="../assets/css/style.css" rel="stylesheet" />
   <link href="../assets/css/responsive.css" rel="stylesheet" />
   <link href="../assets/css/newNavbar.css" rel="stylesheet" />
</head>

<body>
   <!-- hero_area start -->
   <div class="hero_area">
     <!-- navber start -->
     <?php include "include/navbarNew.php"; ?>
        <!-- navber end -->

      <section class="inner_page_head">
         <div class="container_fuild">
            <div class="row">
               <div class="col-md-12">
                  <div class="full">
                     <h3>Add Sub.Category</h3>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end title -->

         <section class="why_section layout_padding">
            <div class="container">
               <div class="row">
                  <div class="col-lg-5 offset-lg-2 m-auto">
                     <div class="full">
                        <form class="formshadow" action="include/add-subcategory.php" method="post" enctype="multipart/form-data">
                           <fieldset>
                              <select id="category_id" name="category_id" class="form-control form-select mb-3" aria-label="">
                                 <option value="-1">Category Select...</option>
                                 <!-- database to category -->
                                 <?php
                                 $q = "select id,name from categories where 1";
                                 $qr = $conn->query($q);
                                 while ($row = $qr->fetch_assoc()) {
                                    echo '<option value="' . $row['id'] . '">' . $row['name'] . '</option>';
                                 }
                                 ?>
                                 <!--  -->
                              </select>
                              <input type="text" class="form-control" name="name" id="name" placeholder="Sub.Category Name">
                              <textarea id="description" name="description" placeholder="Sub.Category Description"></textarea>
                              <input type="file" name="images" id="images" required />
                              <input type="submit" value="Add Sub.Category" name="AddSubCat" id="AddSubCat" />
                              <p class="text-center mt-4">View Sub.Category <a href="include/viewsubcategory.php">Go</a></p>
                           </fieldset>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </section>
   </div>
   <!-- hero-area end -->

    <!-- footer start -->
    <?php include "include/footer.php"; ?>
    <!-- footer end -->

   <!-- jQery js-->
   <script src="../assets/js/jquery-3.6.3.min.js"></script>
   <!-- bootstrap js -->
   <script src="../assets/js/bootstrap.js"></script>
   <script src="../assets/js/bootstrap.bundle.min.js"></script>
   <!-- owl-carousel custom-->
   <script src="../assets/js/owl-carousel.js"></script>
</body>

</html>