$(document).ready(function() {
  console.log(10);
  $('#save-post').click(function() {
    var title = $('#post-title').val();
    var text = $('#new-post').val();
    if(title.length != 0 || text.length != 0) {
      $.post("app.php", {
        'func'    :   "addPost",
        'title'   :   title,
        'text'    :   text
      }, function(data) {
        $('#view-space').prepend(data);
        $('#post-title').val("");
        $('#new-post').val("");
      });
    }
    else {
      alert("Incomplete post!!");
    }
  });
});
