let oldid = 0; //Reply form state

const commentSizePlural = size => {
  if (size == 1) {
    return size + " Comment";
  } else return size + " Comments";
};

const reloadComments = () => {
  $.post("./db/db_get_comments.php", all_data => {
    const data = JSON.parse(all_data);
    let comments = "",
        list = $("<ul class='outer-comment'>"),
        item = $("<li>").html(comments);

    $("#comquant").html(commentSizePlural(data.length));

    for (let i = 0; i < data.length; i++) {
      if (data[i]["parent_id"] == "0") {
        comments =
          "<div class='back'>" +
            "<div class='row pt-4 pl-4 pr-4 mt-3'>" +
                "<div class='col'>" +
                    "<b>" + data[i]["name"] + "</b>" +
                    "<span class='ml-2'>" + data[i]["date"] + "</span>" +
                "</div>" +
                "<div class='col reply'>" +
                    "<span onClick='reply(" + data[i]['id'] + ")' class='point'><i class='fas fa-reply mr-1'></i>Reply</span>" + 
                "</div>" + 
            "</div>" + 
            "<div class='row p-4'>" +
                "<div class='col'>" +
                "<p>" + data[i]["message"] + "</p>" + 
            "</div>" + 
          "</div>"+
          "<div class='pt-3' id='replybox" + data[i]["id"] + "'></div>";
        item = $("<li>").append(comments);
        list.append(item);

        let reply_list = $('<ul>');
        item.append(reply_list);
        reloadReplies(data[i]["id"], data, list);
      }
    }
    $("#comments").html(list);
  });
};

const addComment = (isReply , parentid) => {

  if(isReply){
    dat = $("#replyfrm").serialize() + "&parent_id=" + parentid;
  } else {
    dat = $("#frm").serialize();
  }
    
  $.ajax({
    url: "./db/db_add_comment.php",
    data: dat,
    type: "post",
    success: function(response) {
      let result = eval("(" + response + ")");
      if (response) {
        if(isReply){
            $("#namer").val("");
            $("#messager").val("");
            $("#emailr").val("");
        } else {
            $("#name").val("");
            $("#message").val("");
            $("#email").val("");
        }
        reloadComments();
      } else {
        alert("Failed to add comments !");
        return false;
      }
    }
  });
};

const reloadReplies = (id, data, list) => {
    oldid = 0;
    for (let i = 0; (i < data.length); i++)
    {
        if (id == data[i]["parent_id"])
        {
            let comments = 
            "<div class='back mt-3 ml-5'>" +
                "<div class='row pt-4 pl-4 pr-4'>" +
                    "<div class='col'>" +
                        "<b>" + data[i]["name"] + "</b><span class='ml-2'>" + data[i]["date"] + "</span>" +
                    "</div>" +
                "</div>" +
                "<div class='row p-4'>" +
                    "<div class='col'>" +
                        "<p>" + data[i]["message"] + "</p>" +
                    "</div>" +
                "</div>" +
            "</div>";
        
            let item = $("<li>").append(comments),
                reply_list = $('<ul>');
            list.append(item);
            item.append(reply_list);
        }
    }
}


const reply = (id) => {

    const its =  
    "<form class='pt-3' id='replyfrm' action='./db/db_add_comment.php' method='post'>" +
    "<div class='container'>"+
        "<div class='row'>"+
            "<div class='col-md-2 mt-2'>"+
                "<label for='emailr'>Email*</label>"+
            "</div>"+
            "<div class='col-sm-12 col-md-5'>"+
                "<input name='email' style='width: 100%' type='text' id='emailr'>"+
            "</div>"+
            "<div class='col-md-1 mt-2'>"+
                "<label for='namer'>Name*</label>"+
            "</div>"+
            "<div class='col-sm-12 col-md-4'>"+
                "<input name='name' style='width: 100%' type='text' id='namer'>"+
           "</div>"+
        "</div>"+
        "<div class='row'>"+
            "<div class='col-md-2 mt-2'>"+
                "<label for='messager'>Message*</label>"+
            "</div>"+
            "<div class='col-sm-12 col-md-10'>"+
                "<textarea name='message' id='messager' rows='3' cols='40'></textarea>"+
                "<button type='button' id='replybtn' class='btn btn-default pd-3'>Submit</button>" +
                "<h5 class='mt-2' id='resultr'></h5>"+
            "</div>"+
        "</div>"+
    "</div>"+
"</form>";

    if(id != oldid) {
      $("#replybox" + oldid).slideUp();
      $("#replybox" + oldid).empty();
      $("#replybox" + id).append(its).css("display","none");
      $("#replybox" + id).slideDown(); 
    } 
    oldid = id;

    $("#replybtn").on("click", () => {
        if(validate(true)) {
           addComment(true,id);
          }
        
    });
}