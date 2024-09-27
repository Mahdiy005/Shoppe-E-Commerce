// active owl-carouser
$(document).ready(function(){
    // banner owl carousel
    $('#banner-area .owl-carousel').owlCarousel({
        dots: true,
        items: 1
    });

    // top sale owl carousel
    $('#top-sale .owl-carousel').owlCarousel({
        loop: true,
        nav: true,
        dots: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 5
            }
        }
    });

    // isotope to filter data
    let $grid = $('.grid').isotope({
        itemSelector: '.grid-item',
        layoutMode: 'fitRows'
    });
    $('#filters').on('click', 'button', function (){
        let valueClass = $(this).attr('data-filter');
        $grid.isotope({
            filter: valueClass
        });
    });

    // new phone owl carousel
    $('#new-phones .owl-carousel').owlCarousel({
        loop: true,
        dots: true,
        nav: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 5
            }
        }
    });

    // Blogs owl carousel
    $('#blogs .owl-carousel').owlCarousel({
        loop: false,
        dots: true,
        nav: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    });

    // handle incease and decease qty
    let btnUp    = $('.qty-up');
    let btnDown  = $('.qty-down');
    btnUp.on('click', function(){        
        let qtyInput = $(`.qty_input[data-id='${$(this).data("id")}']`);
        console.log(qtyInput);
        
        if(qtyInput.val() >= 1 && qtyInput.val() <= 9)
        {
            qtyInput.val(function (i, oldValue) {
                return ++oldValue;
            });
        }
    });
    btnDown.on('click', function(){
        let qtyInput = $(`.qty_input[data-id='${$(this).data("id")}']`);
        console.log(qtyInput);
        if(qtyInput.val() > 1)
        {
            qtyInput.val(function(i, oldValue){
                return --oldValue;
            })
        }
    }); 
});