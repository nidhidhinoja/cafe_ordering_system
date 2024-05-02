<?php error_reporting(1); ?>
<?php include('./constant/layout/head.php');?>
<?php include('./constant/layout/header.php');?>

<?php include('./constant/layout/sidebar.php');?>   
<?php 

$sql = "SELECT * FROM product WHERE status = 1";
$query = $connect->query($sql);
$countProduct = $query->num_rows;

$orderSql = "SELECT * FROM orders WHERE order_status = 1";
$orderQuery = $connect->query($orderSql);
$countOrder = $orderQuery->num_rows;

$totalRevenue = 0;

while ($orderResult = $orderQuery->fetch_assoc()) {
    //echo $orderResult['paid'];exit;
    $totalRevenue += $orderResult['paid'];

}

$connect->close();

?>
  
<style type="text/css">
    .ui-datepicker-calendar {
        display: none;
    }
</style>
        
        <div class="page-wrapper">
            
           
            
            
            <div class="container-fluid">
                      <div class="row">
                        
                    <div class="col-md-4">
                        <div class="card bg-primary p-20">
                            <div class="media widget-ten">
                                <div class="media-left meida media-middle">
                                    <span><i class="ti-book f-s-40"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                 
                            
                                    <h2 class="color-white"><?php echo $countProduct; ?></h2>
                                    <a href="product.php"><p class="m-b-0">Total orders</p></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php if(isset($_SESSION['userId']) && $_SESSION['userId']==1) { ?>
                   
                   <?php }?>
                   <?php if(isset($_SESSION['userId']) && $_SESSION['userId']==1) { ?>
                <?php }?>
                </div>  
                <div class="row"> 
                <div class="col-md-4">
                <div class="card" style="background-color:#ffc107;">
                <div class="cardHeader">
                    <h1 style="color:white;"><?php echo date('d'); ?></h1>
                </div>

                <div class="cardContainer">
                    <p style="color:white;"><?php echo date('l') .' '.date('d').', '.date('Y'); ?></p>
                </div>
                </div> 
            <br/>

          <div class="cardContainer">
            <p style="color:white;">Total Revenue</p>
          </div>
        </div> 

    </div>
    <?php if(isset($_SESSION['userId']) && $_SESSION['userId']==1) { ?>
  
            <?php }?>

                
            </div>
        </div>  
    </div>

            
            <?php include ('./constant/layout/footer.php');?>
        <script>
        $(function(){
            $(".preloader").fadeOut();
        })
        </script>