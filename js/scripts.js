jQuery(function() {
  jQuery("#mobile-menu-handle").on("click", function() {
    jQuery('#mobile-menu-body').toggle("slow");
  });
});

// SCROLL OUT
// ScrollOut({
//   targets: ".features",  
//   threshold: .9,
//   onShown(el) {
//     el.classList.remove("animated", "pulse");
//     void el.offsetWidth;
//     el.classList.add("animated", "pulse");
//   }
// });