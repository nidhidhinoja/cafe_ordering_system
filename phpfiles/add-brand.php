<?php include('./constant/layout/head.php');?>
<?php include('./constant/layout/header.php');?>

<?php include('./constant/layout/sidebar.php');?>   
 
        <div class="page-wrapper">
            
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Add Menu-Items </h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Add Menu-Items</li>
                    </ol>
                </div>
            </div>
            
            
            <div class="container-fluid">
                
                
                
                <div class="row">
                    <div class="col-lg-8" style="    margin-left: 10%;">
                        <div class="card">
                            <div class="card-title">
                               
                            </div>
                            <div id="add-brand-messages"></div>
                            <div class="card-body">
                                <div class="input-states">
                                    <form class="form-horizontal" method="POST"  id="submitBrandForm" action="php_action/createBrand.php" enctype="multipart/form-data">

                                   <input type="hidden" name="currnt_date" class="form-control">

                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">Item Name</label>
                                                <div class="col-sm-9">
                                                  <input type="text"  class="form-control"id="brandName" placeholder="Item Name" name="brandName"  required="" pattern="^[a-zA-z]+$"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">Category Name</label>
                                                <div class="col-sm-9">
                                                  <select type="text" class="form-control" id="categoryName" placeholder="Product Name" name="categoryName" >
                                                    <option value="">~~SELECT~~</option>
                                                    <?php 
                                                    $sql = "SELECT categories_id, categories_name, categories_active, categories_status FROM categories WHERE categories_status = 1 AND categories_active = 1";
                                                            $result = $connect->query($sql);

                                                            while($row = $result->fetch_array()) {
                                                                echo "<option value='".$row[0]."'>".$row[1]."</option>";
                                                            } // while
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">Category Id</label>
                                                <div class="col-sm-9">
                                                  <select type="text" class="form-control" id="categoryName" placeholder="Product Name" name="categoryName" >
                                                    <option value="">~~SELECT~~</option>
                                                    <?php 
                                                    $sql = "SELECT categories_id, categories_name, categories_active, categories_status FROM categories WHERE categories_status = 1 AND categories_active = 1";
                                                            $result = $connect->query($sql);

                                                            while($row = $result->fetch_array()) {
                                                                echo "<option value='".$row[1]."'>".$row[0]."</option>";
                                                            } // while
                                                    ?>
                                                </select>
                                                
                                            </div>
                                        </div>
                                    </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">Status</label>
                                                <div class="col-sm-9">
                                                     <select class="form-control" id="brandStatus" name="brandStatus">
                                                    <option value="">~~SELECT~~</option>
                                                    <option value="1">Available</option>
                                                    <option value="2">Not Available</option>
                                                </select>
                                                </div>
                                            </div>
                                        </div>


                                        <button type="submit" name="create" id="createBrandBtn" class="btn btn-primary btn-flat m-b-30 m-t-30">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                  
                </div>
                
               


<?php include('./constant/layout/footer.php');?>

