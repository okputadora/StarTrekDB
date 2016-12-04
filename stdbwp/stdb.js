var tagsToQ = []
$(document).ready(function(){
  $(".tagList > div").click(function(){
    id = this.id;
    $("#" + id).toggleClass("select");
    var tagDuplicate = false;
    for (var i in tagsToQ){
      if (id === tagsToQ[i]){
        tagsToQ.splice(i, 1);
        tagDuplicate = true;
      }
    }
    if (tagDuplicate === false){
      tagsToQ.push(id);
    }
  })


  $("#searchTags").click(function(){
    var searchQ = tagsToQ.toString();
    var data = "search=" + searchQ;
    console.log(data);
    $.ajax({
      type: "POST",
      url: "tag_search.php",
      data: data,
      success: function(html){
        console.log("Success");
        console.log(html);
      }
    })
  });
})
