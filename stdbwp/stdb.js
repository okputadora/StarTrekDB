var tagsToQ = []
$(document).ready(function(){
  $("#taglist > div").click(function(){
    console.log("Hello");
    id = this.id;
    console.log(id);
    $("#" + id).css("background-color", "white");
    $("#" + id).css("color", "#131313");
    tagsToQ.push(id);
  })

  $("#searchTags").click(function(){
    $("#tagResults").html(tagsToQ);
  })
})
