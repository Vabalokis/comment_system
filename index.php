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
    <title>Comment system PHP MYSQL</title>
</head>
<body>



<form>

    <div class="container">

        <div class="row mt-5">
            <div class="col-md-2 mt-2">
                <label for="email">Email*</label>
            </div>

            <div class="col-sm-12 col-md-5">
                <input style="width: 100%" type="text" id="email">
            </div>

            <div class="col-md-1 mt-2">
                <label for="name">Name*</label>
            </div>

            <div class="col-sm-12 col-md-4">
                <input style="width: 100%" type="text" id="name">
            </div>
        </div>

        <div class="row">
            <div class="col-md-2 mt-2">
                <label for="message">Message*</label>
            </div>

            <div class="col-sm-12 col-md-10">
                <textarea id="message" rows="3" cols="40"></textarea>
                <button type='button' id='validate' class="btn btn-default pd-3">Submit</button><h5 class="mt-2" id='result'></h5>
            </div>
        </div>
     
    </div>

</form>




<div class="container">

<h1 class="mt-4 pb-3">1 Comment</h1>

<div class="back">
<div class="row pt-4 pl-4 pr-4">

<div class="col">
<b>John Doe</b><span class="ml-2">27 Aug 2018</span>
</div>

<div class="col reply">
<span class="point"><i class="fas fa-reply mr-1"></i>Reply</span>
</div>

</div>

<div class="row p-4">

<div class="col">

<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
when an unknown printer took a galley of type and scrambled it to make a type specimen book.
 It has survived not only five centuries, but also the leap into electronic typesetting, 
 remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset 
 sheets containing Lorem Ipsum passages, 
and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p> 

</div>

</div>

</div>



<div class="back mt-3 ml-5">

<div class="row pt-4 pl-4 pr-4">

<div class="col">
<b>John Doe</b><span class="ml-2">27 Aug 2018</span>
</div>

</div>

<div class="row p-4">

<div class="col">

<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
when an unknown printer took a galley of type and scrambled it to make a type specimen book.
 It has survived not only five centuries, but also the leap into electronic typesetting, 
 remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset 
 sheets containing Lorem Ipsum passages, 
and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p> 

</div>

</div>


</div>




</div>

<script>
    $(document).ready(() => {
        $("#validate").on("click", validate);
       // showComments();
    });
</script>

</body>
</html>