<?php
    include("connect.php");
?>
    <!-- Page Content -->
    <div class="col-lg-12">
        <h1 class="page-header">all car</h1>
    </div>
    <p><a href="index.php?menu=insert" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i> Post a car</a></p>
</div>
           <?php
                $sql = "SELECT * FROM car WHERE id";
                $result = $conn->query($sql);
                if(!$result){
                    echo "Error during data retrieval";
                }
                else{
                    while($prd=$result->fetch_object()){
                        
                ?> 
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <div class="thumbnail">
                <a href="productdetail.php?pid=<?php echo $prd->id;?>">
                    <img src="pig/<?php echo $prd->carpic?> " alt="">
                    </a>
                    <div class="caption">
                    <h3><?php echo $prd->brand; ?></h3>
                                <p>model : <?php echo $prd->model; ?></p>
                                <p>carType : <?php echo $prd->carType; ?></p>
                                <p>color : <?php echo $prd->color; ?></p>
                                <p>license : <?php echo $prd->license; ?></p>
                                <p>province : <?php echo $prd->province; ?></p>
                                <p>modelYear : <?php echo $prd->modelYear; ?></p>
                                <p>
                                    <strong>Price: <?php echo $prd->price ?></strong>
                                </p>
                                <a href="index.php?menu=edit&pid=<?php echo $prd->id?>" class="btn btn-warning"><i class="glyphicon glyphicon-pencil"></i></a>
                                <a href="deleteproduct.php?pid=<?php echo $prd->id?>" class="btn btn-danger linkDelete"><i class="glyphicon glyphicon-trash"></i></a>
                         </p>
                    </div>
                </div>
           </div>  
                <?php
                     }
                }
                ?>

    </div>
</div>
<script>
$(document).ready(function(){
    $(".linkDelete").click(function(){
        return confirm("Confirm Delete?");
    });
});
</script>  