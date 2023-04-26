<?php
include('header.php');
include('navbar.php');

include('dbconfig.php');
$sql = "SELECT * FROM products";
$query = $dbConn->prepare($sql);
$query->execute();
$result = $query->fetchAll();
?>
<section class="text-center py-5 productbg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1> Our product</h1>
</div>
</div>
</div>
</section>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#00cba9" fill-opacity="1" d="M0,128L24,154.7C48,181,96,235,144,240C192,245,240,203,288,176C336,149,384,139,432,154.7C480,171,528,213,576,245.3C624,277,672,299,720,282.7C768,267,816,213,864,170.7C912,128,960,96,1008,101.3C1056,107,1104,149,1152,170.7C1200,192,1248,192,1296,170.7C1344,149,1392,107,1416,85.3L1440,64L1440,0L1416,0C1392,0,1344,0,1296,0C1248,0,1200,0,1152,0C1104,0,1056,0,1008,0C960,0,912,0,864,0C816,0,768,0,720,0C672,0,624,0,576,0C528,0,480,0,432,0C384,0,336,0,288,0C240,0,192,0,144,0C96,0,48,0,24,0L0,0Z"></path></svg>

<div class="container">
    <div class="row">
        <div class="col-md-12">
        <div class="row row-cols-1 row-cols-md-4 g-4">

        <?php
                    foreach ($result as $key => $value) {
                ?>
                <div class="col">
                    <div class="class h-100">
                        <img src="images/company.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $value['product_name'];?></h5>
                            <p class="card-text"><?php echo $value['product_description'];?></p>
                            <a href="#" class="btn btn-primary btn-sm">See more</a>
                    </div>
                    </div>
                    </div>
                    <?php } ?>

</div>
    </div>
        </div>
                    </div>
<?php include('footer.php');?>
