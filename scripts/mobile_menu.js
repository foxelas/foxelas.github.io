document.addEventListener(
  "DOMContentLoaded",
  function () {
    // $(".certItem div.certContents").hide();

    $(".certItem button").click(function (e) {
      e.preventDefault();
      var $this = $(this).parent().find("div.certContents");
      $(".certItem div.certContents").not($this).hide();

      $this.toggle();
    });
  },
  false
);

function openNav() {
  document.getElementById("mobileNav").style.width = "100%";
}

function closeNav() {
  document.getElementById("mobileNav").style.width = "0%";
}
