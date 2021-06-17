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

$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})

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