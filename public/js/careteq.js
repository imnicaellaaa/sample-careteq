$(document).ready(function(){

    //declaring of of the variables called for every funtions
    //age calculation thru birthday
$('#bday').change(function () {
    var now = new Date();   //Current Date
    var past = new Date($('#bday').val());  //Date of Birth
    if (past > now) {
        alert('Entered Date is Greater than Current Date');
        return false;
    }
    var nowYear = now.getFullYear();  //Get current year
    var pastYear = past.getFullYear();//Get Date of Birth year
    var age = nowYear - pastYear;  //calculate the difference
    $('#age').val(age + " years old");
});

//toggle new and existing patient
$('#new_patient').change(function() {
    if($(this).is(":checked")){
      $('#existing_patient').attr('checked', false);
      $("#patient_id").hide();
      $("#patient_id1").hide();
    }
});

$('#existing_patient').change(function() {
    if($(this).is(":checked")){
      $('#new_patient').attr('checked', false);
      $("#patient_id").toggle();
      $("#patient_id1").toggle();

    }
});
//Search in a dropdown title
$(document).ready(function(){

    // Initialize select2
    $("#selTitle").select2();

    // Read selected option
    $('#but_read').click(function(){
      var title = $('#selTitle option:selected').text();
      var id = $('#selTitle').val();

      $('#result').html("id : " + id + ", name : " + title);

    });
  });

  //Search in a dropdown Gender
  $(document).ready(function(){

    // Initialize select2
    $("#selGender").select2();

    // Read selected option
    $('#but_read').click(function(){
      var title = $('#selGender option:selected').text();
      var id = $('#selGender').val();

      $('#result').html("id : " + id + ", name : " + name);

    });
  });

   //Search in a dropdown Country
   $(document).ready(function(){

    // Initialize select2
    $("#selCountry").select2();

    // Read selected option
    $('#but_read').click(function(){
      var title = $('#selCountry option:selected').text();
      var id = $('#selCountry').val();

      $('#result').html("id : " + id + ", name : " + name);

    });
  });

  //Search in a dropdown Province
  $(document).ready(function(){

    // Initialize select2
    $("#selProvince").select2();

    // Read selected option
    $('#but_read').click(function(){
      var title = $('#selProvince option:selected').text();
      var id = $('#selProvince').val();

      $('#result').html("id : " + id + ", name : " + name);

    });
  });

   //Search in a dropdown Municipality
   $(document).ready(function(){

    // Initialize select2
    $("#selMunicipality").select2();

    // Read selected option
    $('#but_read').click(function(){
      var title = $('#selMunicipality option:selected').text();
      var id = $('#selMunicipality').val();

      $('#result').html("id : " + id + ", name : " + name);

    });
  });

  //Search in a dropdown ID Type
  $(document).ready(function(){

    // Initialize select2
    $("#selID_Type").select2();

    // Read selected option
    $('#but_read').click(function(){
      var title = $('#selID_Type option:selected').text();
      var id = $('#selID_Type').val();

      $('#result').html("id : " + id + ", name : " + name);

    });
  });
});

//password complexity reg ex
function validate(){
    var pass = document.getElementById('password');
    var upper = document.getElementById('upper');
    var lower = document.getElementById('lower');
    var special_charater = document.getElementById('special_char');
    var num = document.getElementById('number');
    var len = document.getElementById('length');


    //check if pass value contain a number
    if (pass.value.match(/[0-9]/)) {  //match the function which matches a regular expressions
        //password contain 0 to 9 number then
        num.style.color = 'green'

    }
    else {
        //otherwise
        num.style.color = 'red'
    }

     //check if pass value contain a uppercase letter
     if (pass.value.match(/[A-Z]/)) {  //match the function which matches a regular expressions
        //password contain A to Z
        upper.style.color = 'green'

    }
    else {
        //otherwise
        upper.style.color = 'red'
    }

    //check if pass value contain a lowercase letter
    if (pass.value.match(/[a-z]/)) {  //match the function which matches a regular expressions
        //password contain a to z
        lower.style.color = 'green'

    }
    else {
        //otherwise
        lower.style.color = 'red'
    }

    //check if pass value contain a special character or symbol
    if (pass.value.match(/[!\@\$\%\^\&\*\(\)\_\-\?\=\+\<\>\.\,]/)) {  //match the function which matches a regular expressions
        //type all special character which you want to validate
        special_charater.style.color = 'green'

    }
    else {
        //otherwise
        special_charater.style.color = 'red'
    }

    //check if the lenght is greater than equal to 8
    if (pass.value.length < 8 ){
        //if the password is less than 8
        len.style.color = 'red'
    }
    else {
        //if the password is greater than or equal to 8
        len.style.color = 'green'
    }
}

