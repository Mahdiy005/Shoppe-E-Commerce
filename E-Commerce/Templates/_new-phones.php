<?php shuffle($items)  ?>
         <section id="new-phones">
          <div class="container py-5">
            <h4 class="border-bottom py-3 mb-2 font-size-20 font-rubic">New Phones</h4>
            <!-- carousel new Phones -->
            <div class="owl-carousel owl-theme">
            <?php foreach($product->getData('product') as $item): ?>
                  <div class="item">
                      <div class="product font-rale">
                      <a href="./product.php?id=<?php echo $item['item_id'] ?>"><img src="<?php echo $item['item_image'] ?? '../assets/products/1.png' ?>" alt="product 1" class="img-fluid"></a>
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
            <!-- ! carousel new Phones -->
          </div>
         </section>