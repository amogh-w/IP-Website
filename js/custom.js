$(document).ready(() => {
  $("#explore-button").click(function() {
    $([document.documentElement, document.body]).animate(
      {
        scrollTop: $("#explore-scroll").offset().top
      },
      700,
      "linear"
    );
  });
});
