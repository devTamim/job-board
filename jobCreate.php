
<?php
include_once "partial/function.php";
require_once "partial/db.php";


$errors=[];
$title ='';
$description ='';
$category ='';
$type ='';
$sallary ='';
$gender ='';
$exprience ='';
$city ='';
$post_code ='';
$company_address ='';





if($_SERVER['REQUEST_METHOD']==='POST'){
 $title = $_POST['title'];
 $description = $_POST['description'];
 $category = $_POST['category'];
 $type = $_POST['type'];
 $sallary = $_POST['sallary'];
 $gender = $_POST['gender'];
 $exprience = $_POST['exprience'];
 $city = $_POST['city'];
 $post_code = $_POST['post_code'];
 $company_address = $_POST['company_address'];




  if(! $title ){
    $errors[]="Job title is required";

  }

  if(! $description ){
    $errors[]="Job description is required";

  }
  if(! $category ){
    $errors[]="Job Category is required";

  }
  if(! $type ){
    $errors[]="Job type is required";

  }
  if(! $sallary ){
    $errors[]="Offer Sallary is required";

  }
  if(! $gender ){
    $errors[]="Gender is required";

  }
  if(! $exprience ){
    $errors[]="Exprience is required";

  }
  if(! $city ){
    $errors[]="City price is required";

  }
  if(! $post_code ){
    $errors[]="Post code is required";

  }
  if(! $company_address ){
    $errors[]="Comapny address is required";

  }

  


  if(!is_dir('image')){
    mkdir('image');
  }

  if(empty($errors)){
    $image = $_FILES['image'] ?? null;

    $imagePath = '';
    if($image && $image['tmp_name']){

      $imagePath='image/'.randomString(8).'/'.$image['name'];

      mkdir(dirname($imagePath));
      
      move_uploaded_file($image['tmp_name'],$imagePath);
    } 
  }
  





  if(empty($errors)){
  $statement = $pdo->prepare("INSERT INTO posts (user_id,category_id,title,description,type,sallary,gender,exprience,city,post_code,company_address,image)
 
            VALUES(:user_id, :category_id, :title, :description, :type, :sallary, :gender, :exprience, :city, :post_code, :company_address, :image)");
  $statement->bindValue(':user_id',1);
  $statement->bindValue(':category_id',1);
  $statement->bindValue(':title',$title);
  $statement->bindValue(':description',$description);
  $statement->bindValue(':type',$type);
  $statement->bindValue(':sallary',$sallary);
  $statement->bindValue(':gender',$gender);
  $statement->bindValue(':exprience',$exprience);
  $statement->bindValue(':city',$city);
  $statement->bindValue(':post_code',$post_code);
  $statement->bindValue(':company_address',$company_address);
  $statement->bindValue(':image',$imagePath);

  $statement->execute();
  header('Location:index.php');

  

  }
  

  }
  


?>

<?php include_once "include/header.php"?>
    <!--End Main Header -->

    <!-- Sidebar Backdrop -->
    <div class="sidebar-backdrop"></div>

    <!-- User Sidebar -->
    <?php include_once "include/sidebar.php"?>
    <!-- End User Sidebar -->

    <!-- Dashboard -->
    <section class="user-dashboard">
    <?php if(!empty($errors)): ?>
    <div class="alert alert-danger">
      <?php foreach ($errors as $key => $error): ?>
         <div><?php echo $error ?></div>

        <?php endforeach; ?>
    </div>
    <?php endif; ?>
     <h1 class="m-5">Post a New Job</h1>

    <div class="m-5">
    <form action="" method="POST" enctype="multipart/form-data">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Job Title</label>
    <input type="text" class="form-control" name="title">

  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Job Description</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="description"></textarea>
  </div>
   <div class="row">
   <div class="mb-3 col-md-6">
            <label for="exampleInputEmail1" class="form-label">Categories</label>
        <select class="form-select" aria-label="Default select example" name="category">
            <option selected>Open this select menu</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
        </select>
    </div>
  <div class="mb-3 col-md-6">
    <label for="exampleInputEmail1" class="form-label">Job Type</label>

    <input type="text" class="form-control" name="type" >
  </div>
   </div>
   <div class="row">
   <div class="mb-3 col-md-6">
    <label for="exampleInputEmail1" class="form-label">Offer Sallary</label>

    <input type="text" class="form-control" name="sallary" >
  </div>
  <div class="mb-3 col-md-6">
            <label for="exampleInputEmail1" class="form-label">Gender</label>
        <select class="form-select" aria-label="Default select example" name="gender">
            <option selected>Open this select menu</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
        </select>
    </div>
   </div>
     <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Exprience</label>

    <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="exprience"></textarea>

    <div class="row">
    <div class="mb-3 col-md-6">
            <label for="exampleInputEmail1" class="form-label">City</label>
            <input type="text" class="form-control" name="city" >

    </div>
    <div class="mb-3 col-md-6">
            <label for="exampleInputEmail1" class="form-label">Post Code</label>
            <input type="number" class="form-control" name="post_code">

    </div>
    <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Company Address</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="company_address"></textarea>

    </div>
    <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Company Logo</label>
            <input type="file" class="form-control" id="image" name="image">

    </div>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
    </section>
  







  <script src="../asset/bootstrap/js/bootstrap.min.js"></script>


</body>



</html>