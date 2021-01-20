<?php 
foreach($products as $product):
?>
        <div class="col s6">
                        <div class="entry">
                            <img src="img/store1.png" alt="">
                            <h6><a href="#"><?php echo $product->name; ?></a></h6>
                            <div class="rating">
                                <span class="active"><i class="fa fa-star"></i></span>
                                <span class="active"><i class="fa fa-star"></i></span>
                                <span class="active"><i class="fa fa-star"></i></span>
                                <span class="active"><i class="fa fa-star"></i></span>
                                <span class=""><i class="fa fa-star"></i></span>
                            </div>
                            <div class="price">
                                <h5> <?php echo $product->price; ?></h5>
                            </div>

                            <a href="customerinfo.html?id=<?php echo $product->id ?>&medicine_name=<?php echo $product->name; ?>&price=<?php echo $product->price; ?>&store_id=<?php echo $product->store_id; ?>" class="btn btn-info font-weight-bold text-uppercase">Buy</a></td>
                        </div>
                    </div>
                    
<?php  endforeach; ?>