<?php $items = $product->getData('product');  shuffle($items)?>
<section class="container py-5" id="top-sale">
    <h4 class="py-3 border-bottom mb-3 font-size-20 font-rubic">Top Sale</h4>
    <!-- start owl carousel -->
    <div class="owl-carousel owl-theme">
    <?php foreach($items as $item): ?>
        <div class="item">
            <div class="product font-rale">
            <a href="#"><img src="<?php echo $item['item_image'] ?? '../assets/products/1.png' ?>" alt="product 1" class="img-fluid"></a>
            <div class="text-center">
                <h6><?php echo $item['item_name'] ?? 'Unknown' ?></h6>
                <div class="rating text-warning font-size-12">
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="far fa-star"></i></span>
                </div>
                <div class="price py-2">
                <span>$<?php echo $item['item_price'] ?? 0 ?></span>
                </div>
                <button class="btn btn-warning font-size-14" type="submit">Add To Cart</button>
            </div>
            </div>
        </div>
    <?php endforeach; ?>
    </div>
    <!-- ! start owl carousel -->
</section>