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
