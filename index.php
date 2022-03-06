<?php

require_once "partial/db.php";

// $search = $_GET['search'] ?? null;
// if($search){
//   $statement = $pdo->prepare('SELECT * FROM products WHERE title LIKE :title ORDER BY create_date DESC');
//   $statement -> bindValue(':title',"%$search%");

// } 
// else{
//  
// }
$statement = $pdo->prepare('SELECT * FROM categories ORDER BY created_at DESC');

$statement->execute();
$products = $statement->fetchAll(PDO::FETCH_ASSOC);

$postStatement = $pdo->prepare('SELECT * FROM posts ORDER BY created_at DESC');

$postStatement->execute();
$posts = $postStatement->fetchAll(PDO::FETCH_ASSOC);

	// $supported_image = array('gif','jpg','jpeg','png');

  //  $src_file_name = 'abskwlfd.png';

  //  $ext = strtolower(pathinfo($src_file_name, PATHINFO_EXTENSION));

  //     //echo $ext; 
	// // Using strtolower to overcome case sensitive

	// if (in_array($ext, $supported_image))

	//  {

	//    echo "it's image";

	//  }

	// else 

	// {

	//    echo 'not image';

	// }


?>

<?php include_once "partial/header.php"?>

      <!-- nav end  -->

      <!-- hero Section start-->
      <section class="hero">
        <div class="container">
          <div class="row">
            <div class="col-md-8 hero-title d-flex align-items-center">
              <div>
                <h1 class="display-4 fw-normal">
                  There Are <span class="text-primary">93,178</span> Postings
                  Here For you!
                </h1>
                <p class="text-muted my-4">
                  Find Jobs, Employment & Career Opportunities
                </p>
                <div class="bg-light p-3 rounded-3 mt-5">
                  <div class="input-group">
                    <input
                      type="text"
                      aria-label="First name"
                      class="form-control bg-transparent border-0 border-end"
                      placeholder="Job title, keywords,or company"
                    />
                    <input
                      type="text"
                      aria-label="Last name"
                      class="form-control bg-transparent border-0"
                      placeholder="city or Post code"
                    />
                    <span class="btn btn-primary rounded-3 p-3">Find Jobs</span>
                  </div>
                </div>
                <p class="text-muted mt-3">
                  Popular Searches : Designer, Developer, Web, IOS, PHP, Senior,
                  Engineer,
                </p>
              </div>
            </div>
            <div class="col-md-4 d-flex align-items-center">
              <img src="media/images/hero.png" alt="" class="img-fluid" />
            </div>
          </div>
        </div>
      </section>

      <!-- hero section end -->
   
    <!-- Main section -->
    <!-- Categories section start -->
    <section class="container py-5 mb-5">
      <h3 class="text-center mt-5">Popular Job Categories</h3>
      <p class="text-center">2020 jobs live - 293 added today.</p>
      <div class="row mt-5 gy-3 justify-content-center">
      <?php foreach ($products as $i=> $product) : ?>
        <div class="col-md-3 d-flex border border-2 pt-2 mx-3 ps-4 rounded">
          <span class="fs-1"
            ><i class="fa fa-user-md" aria-hidden="true"></i
          ></span>
          <div class="ms-4">
            <h5 class="fw-normal">
              <a href="" class="text-decoration-none text-dark category-title"
                >Accounting / Finance</a
              >
            </h5>
            <p>(2 open positions)</p>
          </div>
        </div>
        <?php  endforeach; ?>
      </div>
    </section>
       <!-- Categories section end -->

       <!-- Featured Jobs start -->
       <section class="container pt-5 border-0 border-top">
         <h3 class="text-center mt-5">Featured Jobs</h3>
         <p class="text-center text-muted">Know your worth and find the job that qualify your life</p>
         <div class="row mt-5 g-4 justify-content-center">
         <?php foreach ($posts as $i=> $posts) : ?>
           <div class="col-md-5 d-flex border rounded pt-4 me-5">
             <div class="shadow-lg p-3 mb-5 bg-white rounded" style="height: 80px;width: 100px;">
             <img src="media/images/logo.png" alt="" class="img-fluid">
             </div>
             <div class="ps-3">
             <h5 class="fw-normal">Software Engineer (Android), Libraries</h5>
             <p class="">        
               <span>
                 <i class="fa fa-briefcase" aria-hidden="true"></i>
              </span>
              <span class="pe-3 text-muted">Segment</span>
               <span>
               <i class="fa fa-map-marker" aria-hidden="true"></i>

              </span>
              <span class="pe-3 text-muted">London,UK</span>
               <span>
               <i class="fa fa-clock-o" aria-hidden="true"></i>

              </span>
              <span class="pe-3 text-muted">11 hours ago</span>
               <span>
               <i class="fa fa-money" aria-hidden="true"></i>

             </span>
              <span class="pe-3 text-muted">$35k- $45k</span></p>
              <p class="tag d-inline text-primary px-2 py-1 rounded me-3">Full time</p>
              <p class="tag1 d-inline text-success px-2 py-1 rounded me-3">Private</p>
              <p class="tag2 d-inline text-warning px-2 py-1 rounded">Urgent</p>
             </div>

    
           
           </div>
           <?php  endforeach; ?>
         </div>
       
       </section>
       <!-- Featured Jobs end -->


    <!-- Main section end -->

