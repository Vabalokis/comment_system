const validateEmail = email => {
  let re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(email);
};

const validate = () => {
  let $result = $("#result"),
    email = $("#email").val(),
    name = $("#name").val(),
    message = $("#message").val();

  $result.text("");

  if (email == "" || name == "" || message == "") {
    $result.text("All of the text fields must be filled");
    $result.css("color", "red");
  } else if (!validateEmail(email)) {
    $result.text(email + " is not a valid email adress");
    $result.css("color", "red");
  } else {
    return true;
  }
  return false;
};

