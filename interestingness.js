$(document).ready(() => {
  $("body *:not(#frontPage, h1, #start img, #start, header, header *)").toggle();
  $("#invalid-warning").toggle();

  // $(document).keypress(function(e) => {
  //   if(e.which == 13){
  //     if($(".proceed").css("display") != "none") {
  //       $(".proceed").click();
  //     }
  //   }
  // });

  $("#start").click((event) => {
    $("#frontPage, #frontPage *").toggle();
    $("form").toggle();
    $(".first, .first .sectionStart, .first .sectionStart *").fadeToggle("fast");
  });

  $(".proceed").click((event) => {
    let target = $(event.currentTarget);
    $(target).parent().children().toggle();
    $(target).parent().children().children().toggle();
    $(target).parent().children().children().children().toggle();
    $(target).parent().children().children().children().children().toggle();
    $(target).parent().toggle();
    $(target).parent().next().fadeToggle("fast");
    $(target).parent().next().children().fadeToggle("fast");
    $(target).parent().next().children().children().fadeToggle("fast");
    $(target).parent().next().children().children().children().fadeToggle("fast");
    $(target).parent().next().children().children().children().children().fadeToggle("fast");
    $(target).parent().next().children().children().children().children().children().fadeToggle("fast");
  });

  $(".back").click((event) => {
    let target = $(event.currentTarget);
    $(target).parent().children().toggle();
    $(target).parent().children().children().toggle();
    $(target).parent().children().children().children().toggle();
    $(target).parent().children().children().children().children().toggle();
    $(target).parent().fadeToggle("fast");
    $(target).parent().prev().fadeToggle("fast");
    $(target).parent().prev().children().fadeToggle("fast");
    $(target).parent().prev().children().children().fadeToggle("fast");
    $(target).parent().prev().children().children().children().fadeToggle("fast");
    $(target).parent().prev().children().children().children().children().fadeToggle("fast");
  });

  $(".backToStart").click((event) => {
    $(".first #basicInfo, .first #basicInfo *, .first, form").toggle();
    $("#frontPage, #frontPage *").fadeToggle("fast");
  });

  $(".sectionEnd").click((event) => {
    $(".first, #last, #last *").toggle();
    $("#second, #second .sectionStart, #second .sectionStart *").fadeToggle("fast");
  });

  $(".backSection").click((event) => {
    $("#second, #second .sectionStart, #second .sectionStart *").toggle();
    $(".first, #last, #last *").fadeToggle("fast");
  });

  $("input, textarea").on("invalid", (event) => {
    $("#invalid-warning").toggle();
  });

});
