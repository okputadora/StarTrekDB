var tagsToQ = []
$(document).ready(function(){
  $(".tagList > div").click(function(){
    console.log("Hello");
    id = this.id;
    console.log(id);
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
      console.log(tagsToQ);
    }
  })
  //
  // $("#searchTags").click(function(){
  //   $.ajax({
  //     type: "POST",
  //     url: "tag_search.php",
  //     data: data,
  //
  //   })
})
