<?php 
require_once __DIR__."/autoload/autoload.php";

$category = $db->fetchAll("category");
	if(!isset($_SESSION['login'])){
		header('location:login.php');
	}


?>
<?php  require_once __DIR__. "/layouts/header.php"; ?>
             <main>
             	  <div class="row">
        <div class="container-fluid">
            
        <h1 class="text-center">Cửa hàng đồ ăn nhanh Fast Food</h1>
  
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item">Bảng Điều Khiển</a></li>
            <li class="breadcrumb-item">Chào Mừng</li>
        </ol>
        
        <span>Địa chỉ : </span>
         <div><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3834.717154447188!2d108.20712741433626!3d16.02823284479396!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3142198c348d0327%3A0x599ee8b73422f0dd!2zazEyMywgMTQgxJDhu5cgVGjDumMgVOG7i25oLCBLaHXDqiBUcnVuZywgQ-G6qW0gTOG7hywgxJDDoCBO4bq1bmcgNTUwMDAwLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1610269978118!5m2!1svi!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></div>
</div>

</div> </main>
                       
 <?php  require_once __DIR__. "/layouts/footer.php"; ?>
                     
             