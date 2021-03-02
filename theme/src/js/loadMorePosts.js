import $ from "jquery";

var ajax_url = ajax_object.ajax_url;

$(function () {
  var $loadMoreButton = $("button");

  $("button").on("click", function () {
    $.post(ajax_url, { action: "load_more_posts" }, function (data) {
      $(".posts").append(data);
      $loadMoreButton.remove();
    });
  });
});
