<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" rel="stylesheet" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link href="./css/style.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="./js/form_validation.js"></script>
    <script src="./js/ajax_events.js"></script>
    <title>Comment system PHP MYSQL</title>
</head>
<body>

<form id="frm" action="./db/db_add_comment.php" method="post">

    <div class="container">

        <div class="row mt-5">
            <div class="col-md-2 mt-2">
                <label for="email">Email*</label>
            </div>

            <div class="col-sm-12 col-md-5">
                <input name="email" style="width: 100%" type="text" id="email">
            </div>

            <div class="col-md-1 mt-2">
                <label for="name">Name*</label>
            </div>

            <div class="col-sm-12 col-md-4">
                <input name="name" style="width: 100%" type="text" id="name">
            </div>
        </div>

        <div class="row">
            <div class="col-md-2 mt-2">
                <label for="message">Message*</label>
            </div>

            <div class="col-sm-12 col-md-10">
                <textarea name="message" id="message" rows="3" cols="40"></textarea>
                <button type="button" id='validate' class="btn btn-default pd-3">Submit</button>
                <h5 class="mt-2" id='result'></h5>
            </div>
        </div>
     
    </div>

</form>

<div class="container">
    <h1 id="comquant" class="mt-4 pb-3"></h1>
    <div id="comments"></div>
</div>

<script>
    $(document).ready(() => {
        $("#validate").on("click", () => {
        if(validate(false)) { 
          addComment(false, 0);  
        }
        });
        reloadComments();
    });
</script>

</body>
</html>