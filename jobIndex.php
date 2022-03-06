<?php
require_once "partial/db.php";
session_start();

  if(!isset($_SESSION['user'])){
   header('Location:login.php');
   }
   $postStatement = $pdo->prepare('SELECT * FROM posts ORDER BY created_at DESC');

   $postStatement->execute();
   $posts = $postStatement->fetchAll(PDO::FETCH_ASSOC);
?>

<?php include_once "include/header.php"?>

<div class="sidebar-backdrop"></div>

<?php include_once "include/sidebar.php"?>
<section class="user-dashboard">
      <div class="dashboard-outer">
        <div class="upper-title-box">
          <h3>Manage Jobs</h3>
          <div class="text">Ready to jump back in?</div>
        </div>

        <div class="row">
          <div class="col-lg-12">
            <!-- Ls widget -->
            <div class="ls-widget">
              <div class="tabs-box">
                <div class="widget-title">
                  <h4>My Job Listings</h4>

      
                </div>

                <div class="widget-content">
                  <div class="table-outer">
                    <table class="default-table manage-job-table">
                      <thead>
                        <tr>
                          <th>Title</th>
                        
                          <th>Created &amp; Expired</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                      </thead>

                      <tbody>
                      <?php foreach ($posts as $i=> $post) : ?>
                        <tr>
                          <td>
                            <h6><?php echo $post['title']?></h6>
                            <span class="info"><i class="fa fa-location-arrow" aria-hidden="true"></i> <?php echo $post['city']?></span>
                          </td>
                         
                          <td>October 27, 2017 <br>April 25, 2011</td>
                          <td class="status">Active</td>
                          <td>
                            <div class="option-box">
                              <ul class="option-list">
                                <a class="btn btn-primary text-white" href="">Edit</a>
                                <a class="btn btn-danger text-white ms-1" href="">Delete</a>
                               
                              </ul>
                            </div>
                          </td>
                        </tr>
                        <?php  endforeach; ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>


        </div>
      </div>
    </section>



<?php include_once "include/footer.php"?>