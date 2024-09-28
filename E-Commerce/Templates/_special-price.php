<?php 
shuffle($items);
$brands = array_unique(array_map(function ($item) { return $item['item_brand']; }, $items));

sort($brands);

?>
<section id="special-price">
    <div class="container">
        <h4 class="font-rubic font-size-20">Special Price</h4>
        <div id="filters" class="button-group text-right font-baloo font-size-16">
            <button class="btn is-checked" data-filter="*">All Brands</button>
            <?php foreach($brands as $brand): ?>
                <button class="btn" data-filter=".<?php echo $brand ?>"><?php echo $brand ?></button>
            <?php endforeach; ?>
        </div>

        <div class="grid gap-2">
            <?php foreach($items as $item): ?>
                <div class="grid-item <?php echo $item['item_brand'] ?> border">
                    <div class="item py-2 " style="width: 200px; ">
                    <div class="product font-rale">
                        <a href="#"><img src="<?php echo $item['item_image'] ?>" alt="product 13" class="img-fluid"></a>
                        <div class="text-center">
                        <h6><?php echo $item['item_name'] ?></h6>
                        <div class="rating text-warning font-size-12">
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                        </div>
                        <div class="price py-2">
                            <span>$<?php echo $item['item_price'] ?></span>
                        </div>
                        <button class="btn btn-warning font-size-14" type="submit">Add To Cart</button>
                        </div>
                    </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>