//
//     // Get the elements with class="column"
//     var elements = document.getElementsByClassName("column");
//
//     // Declare a loop variable
//     var i;
//
//     // List View
//     function listView() {
//     for (i = 0; i < elements.length; i++) {
//     elements[i].style.width = "100%";
// }
// }
//
//     // Grid View
//     function gridView() {
//     for (i = 0; i < elements.length; i++) {
//     elements[i].style.width = "50%";
// }
//     //Maonsary View
//     function masonView(){
//         for (i = 0; i < elements.length; i++){
//             elements[i].style.width = "100%";
//         }
//
//     }
// }
//
//     /* Optional: Add active class to the current button (highlight it) */
//     var container = document.getElementById("btnContainer");
//     var btns = container.getElementsByClassName("btn");
//     for (var i = 0; i < btns.length; i++) {
//     btns[i].addEventListener("click", function() {
//         var current = document.getElementsByClassName("active");
//         current[0].className = current[0].className.replace(" active", "");
//         this.className += " active";
//     });
// }
//

$(document).ready(function () {
    console.log('yeet');

    $(".list-view_btn").click(function(){
        console.log('yeet');
        // removing the grid view when button is clicked
        $(".view-toggle").removeClass("grid-view");
        // removing masonry view when button is clicked
        $(".view-toggle").removeClass("masonry-view");
        // this is adding the list view when the list button is clicked
        $(".view-toggle").addClass("list-view");
    });
    $(".grid-view_btn").click(function(){
        console.log('yeet');
        $(".view-toggle").addClass("grid-view");
        $(".view-toggle").removeClass("masonry-view");
        $(".view-toggle").removeClass("list-view");
    });
    $(".masonry-view_btn").click(function(){
        console.log('yeet');
        $(".view-toggle").removeClass("grid-view");
        $(".view-toggle").addClass("masonry-view");
        $(".view-toggle").removeClass("list-view");
    });

    $(".final-view_btn").click(function(){
        console.log('yeet');
        $(".view-toggle").hide();
        $(".next-view").show();
    });
// when the played button is clicked this will change the view so that it will show the played games and hide the final scores of the games
    $(".played-view_btn").click(function(){
        console.log('yeet');
        $(".view-toggle").hide();
        $(".played-view").show();
    });

// when the show all button is clicked it will show played games and the final results
    $(".showall-view_btn").click(function(){
        console.log('yeet');
        $(".view-toggle").show();

    });
    // $(".played-view_btn").click(function(){
    //     console.log('yeet');
    //     $(".view-toggle").addClass("played-view");
    //     $(".view-toggle").removeClass("grid-view");
    // });

// $('.owl-carousel').owlCarousel({
//     loop:true,
//     margin:10,
//     nav:true,
//     responsive:{
//         0:{
//             items:1
//         },
//         600:{
//             items:3
//         },
//         1000:{
//             items:5
//         }
//     }
// })
    $('.owl-carousel').owlCarousel({
        items: 5,
        loop: true,
        margin: 10,
        autoplay: true,
        slideTransition: 'linear',
        autoplayTimeout: 2000,
        smartSpeed: 2000,
        autoplayHoverPause: true,
        stagePadding: 30,
        center: true,
        dots: false,
    });



})

// $(".list-view_button").click(function(){
//     $(".view-toggle").removeClass("list-view");
//
//     $(".view-toggle").addClass("grid-view");
// });


// $(document).ready(function () {
//     $('#sidebarCollapse').on('click', function () {
//         $('#sidebar').toggleClass('active');
//     });
// });
$('.shop-page-high').click(function () {
    // choosing the wrapper and individual divs to be sorted
    $(' .shop-wrapper .store-item').sort(function (a, b) {
        // compares the two data-price values and sorts with a before b = lowest to highest.
        return $(b).data('price') - $(a).data('price');
        // reapplying the sorted list to the wrapper
    }).appendTo('.shop-wrapper');
});

$('.shop-page-low').click(function () {
    // choosing the wrapper and individual divs to be sorted
    $('.shop-wrapper .store-item').sort(function (b, a) {
        // compares the two data-price values and sorts with a before b = lowest to highest.
        return $(b).data('price') - $(a).data('price');
        // reapplying the sorted list to the wrapper
    }).appendTo('.shop-wrapper');
});

$(document).ready(function () {
    // on release of key on keyboard
    $("#search-bar").on("keyup", function() {
        // turns searched value into lowercase
        let value = $(this).val().toLowerCase();
        // filters the divs within the wrapper
        $(".shop-wrapper .store-item").filter(function() {
            // returns filtered options that match the searched value (returns a value greater than -1)
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
});

$('.shop-page-az').click(function () {
    // declaring my list
    var mylist = $('.shop-wrapper');
    // i am getting the 'children' that have the class store item within 'mylist'
    var listitems = mylist.children('.store-item').get();
    // all of the 'children' that have selected. this is sorting between the 2
    listitems.sort(function (a, b) {
        // returning the value over the text in uppercase comparing a-b
        return $(a).text().toUpperCase().localeCompare($(b).text().toUpperCase());
    })
    // for each one of the items that have been sorted into an order
    $.each(listitems, function (idx, itm) {
        mylist.append(itm);
    });
});
//this is the same as the a-z just inverse
$('.shop-page-za').click(function () {
    var mylist = $('.shop-wrapper');
    var listitems = mylist.children('.store-item').get();
    listitems.sort(function (b, a) {
        return $(a).text().toUpperCase().localeCompare($(b).text().toUpperCase());
    })
    $.each(listitems, function (idx, itm) {
        mylist.append(itm);
    });
});




