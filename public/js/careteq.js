$(document).ready(function(){

    //declaring of of the variables called for every funtions
    $("#centimeter").change(function(){

        calculateBMI();
     });
     $("#kg").change(function(){

        calculateBMI();
     });
     $("#kg").change(function(){

        convertionKilogramstoPounds();
     });

     $('#lb').change(function(){
        convertionPoundstoKilogram();
     });
     $('#centimeter').change(function(){
         convertionCentimeterstoInches();
     });
     $('#inch').change(function(){
         convertionInchestoCentimeter();
     });
     $('#lb').change(function(){
        convertionKilogramstoPounds();
     });
     $('#inch').change(function(){
        calculationBMI();
     });
     $('#lb').change(function(){
        calculationBMI();
     });


 //calculation of cm and kg to BMI
 function calculateBMI () {
    var centimeter = $('#centimeter').val();
    var kg = $('#kg').val();
    var convertedbmi = parseFloat((kg/centimeter/centimeter) * 10000).toFixed(2);

     $('#bmi').val(convertedbmi);


}
     //convertion of Centimeter to Inches
     function convertionCentimeterstoInches () {
        var centimeter = $('#centimeter').val();
        var convertedInches = parseFloat (centimeter / 2.54).toFixed(2);

        $('#inch').val(convertedInches, 'inches');
    }

    //convertion of Inches to Centimeter
    function convertionInchestoCentimeter () {
        var inch = $('#inch').val();
        var convertedcm = parseFloat (inch * 2.54 ).toFixed(2);

        $('#centimeter').val(convertedcm);
    }

    //convertion of kilogram to pounds
    function convertionKilogramstoPounds () {
        var kg = $('#kg').val();
        var convertedlb = parseFloat(kg * 2.2046226218).toFixed(2);

        $('#lb').val(convertedlb);

    }

    //convertion of pounds to kilogram
    function convertionPoundstoKilogram () {
        var lb = $('#lb').val();
        var convertedkg = parseFloat(lb / 2.2046226218).toFixed(2);

        $('#kg').val(convertedkg);
    }
    //calcultion of inches and pounds in BMI
    function calculationBMI () {
        var lb = $('#lb').val();
        var inch = $('#inch').val();
        var calculationbmi = parseFloat((lb * 703) / (inch * inch)).toFixed(2);

        $('#bmi').validate(calculationbmi);
      



    }



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
  //Search in a dropdown ID Type
$(document).ready(function(){

    // Initialize select2
    $("#selBrgy").select2();

    // Read selected option
    $('#but_read').click(function(){
      var title = $('#selBrgy option:selected').text();
      var id = $('#selBrgy').val();
      var idno = $('#id_no').val;

      $('#result').html("id : " + id + ", name : " + name);
    //   $('#result').attr("placeholder" + idno_format);



    });
  });

  //Search in a dropdown Member Category
$(document).ready(function(){

    // Initialize select2
    $("#selMemberCategory").select2();

    // Read selected option
    $('#but_read').click(function(){
      var title = $('#selMemberCategory option:selected').text();
      var id = $('#selMemberCategory').val();
      var idno = $('#id_no').val;

      $('#result').html("id : " + id + ", name : " + name);
    //   $('#result').attr("placeholder" + idno_format);



    });
  });
});

///password complexity reg ex
function validate(){
    var pass = document.getElementById('password');
    var upper = document.getElementById('upper');
    var lower = document.getElementById('lower');
    var special_charater = document.getElementById('special_char');
    var num = document.getElementById('number');
    var len = document.getElementById('length');
    var passtck = true;


    //check if pass value contain a uppercase letter
    if (pass.value.match(/[A-Z]/)) {  //match the function which matches a regular expressions
        //password contain A to Z
        upper.style.color = 'green'
        // $("#btnSignUp").attr("disabled", false);

    }
    else {
        //otherwise
        upper.style.color = 'red'
        // $("#btnSignUp").attr("disabled", true);
    }

     //check if pass value contain a lowercase letter
     if (pass.value.match(/[a-z]/)) {  //match the function which matches a regular expressions
        //password contain a to z
        lower.style.color = 'green'
        // $("#btnSignUp").attr("disabled", false);

    }
    else {
        //otherwise
        lower.style.color = 'red'
        // $("#btnSignUp").attr("disabled", true);
    }

     //check if pass value contain a special character or symbol
     if (pass.value.match(/[!\@\$\%\^\&\*\(\)\_\-\?\=\+\<\>\.\,]/)) {  //match the function which matches a regular expressions
        //type all special character which you want to validate
        special_charater.style.color = 'green'
        // $("#btnSignUp").attr("disabled", false);

    }
    else {
        //otherwise
        special_charater.style.color = 'red'
        // $("#btnSignUp").attr("disabled", true);
    }

    //check if pass value contain a number
    if (pass.value.match(/[0-9]/)) {  //match the function which matches a regular expressions
        //password contain 0 to 9 number then
        num.style.color = 'green'
        // $("#btnSignUp").attr("disabled", false);

    }
    else {
        //otherwise
        num.style.color = 'red'
        // $("#btnSignUp").attr("disabled", true);
    }

    //check if the lenght is greater than equal to 8
    if (pass.value.length < 8 ){
        //if the password is less than 8
        len.style.color = 'red'
        // $("#btnSignUp").attr("disabled", true);

    }
    else {
        //if the password is greater than or equal to 8
        len.style.color = 'green'
        // $("#btnSignUp").attr("disabled", false);

    }
}






//enable button for lastname validation
function formValidation(oEvent) {
    oEvent = oEvent || window.event;
    var txtField = oEvent.target || oEvent.srcElement;

    var lastnametck=true;
    var letters = /^[A-Za-z]+$/;
    var msg=" ";
    if(document.getElementById("lastname").value.length > 255  ){ lastnametck=false; }
    if(document.getElementById("lastname").value.match(letters)){ lastnametck=false; }


    //alert(msg + t1ck);

    if(lastnametck){document.getElementById("btnSignUp").disabled = false;
        msg=msg+ " <b> Submit Button is enabled </b>";
    }
    else{document.getElementById("btnSignUp").disabled = true;
        msg=msg+ " <b> Submit Button is disabled </b>";
    }// end of if checking status of t1ck variable
    document.getElementById('my_msg').innerHTML=msg;
    }


    window.onload = function () {

    var btnSignUp = document.getElementById("btnSignUp");
    var btnReset = document.getElementById("btnReset");

    var lastname = document.getElementById("lastname");


    var lastnametck=false;
    document.getElementById("btnSignUp").disabled = true;
    lastname.onkeyup = formValidation;

    }
//enable button for firstname validation
    function formValidation(oEvent) {
        oEvent = oEvent || window.event;
        var txtField = oEvent.target || oEvent.srcElement;

        var firstnametck = true;
        var letters = /^[A-Za-z]+$/;
        var msg=" ";
        if(document.getElementById("firstname").value.length > 255  ){ firstnametck=false; }
        if(document.getElementById("firstname").value.match(letters)  ){ firstnametck=false; }



        //alert(msg + t1ck);

        if(firstnametck){document.getElementById("btnSignUp").disabled = false;
            msg=msg+ " <b> Submit Button is enabled </b>";
        }
        else{document.getElementById("btnSignUp").disabled = true;
            msg=msg+ " <b> Submit Button is disabled </b>";
        }// end of if checking status of t1ck variable
        document.getElementById('my_msg').innerHTML=msg;
        }


        window.onload = function () {

        var btnSignUp = document.getElementById("btnSignUp");
        var btnReset = document.getElementById("btnReset");

        var firstname = document.getElementById("firstname");


        var firstnametck=false;
        document.getElementById("btnSignUp").disabled = true;
        firstname.onkeyup = formValidation;
        }

//enable button for house no and street name validation
    function formValidation(oEvent) {
        oEvent = oEvent || window.event;
        var txtField = oEvent.target || oEvent.srcElement;

        var houseNo_streetNametck = true;
        var letters = /^[A-Za-z]+$/;
        var numbers = /^[0-9]+$/;
        var msg=" ";
        if(document.getElementById("houseNo_streetName").value.length > 255  ){ houseNo_streetNametck=false; }
        if(document.getElementById("houseNo_streetName").value.match(letters) ){ houseNo_streetNametck=false; }
        if(document.getElementById("houseNo_streetName").value.match(numbers)  ){ houseNo_streetNametck=false; }


        //alert(msg + t1ck);

        if(houseNo_streetNametck){document.getElementById("btnSignUp").disabled = false;
            msg=msg+ " <b> Submit Button is enabled </b>";
        }
        else{document.getElementById("btnSignUp").disabled = true;
            msg=msg+ " <b> Submit Button is disabled </b>";
        }// end of if checking status of t1ck variable
        document.getElementById('my_msg').innerHTML=msg;
        }


        window.onload = function () {

        var btnSignUp = document.getElementById("btnSignUp");

        var houseNo_streetName = document.getElementById("houseNo_streetName");


        var houseNo_streetNametck=false;
        document.getElementById("btnSignUp").disabled = true;
        houseNo_streetName.onkeyup = formValidation;
        }



            //enable button for zip code validation
    function formValidation(oEvent) {
        oEvent = oEvent || window.event;
        var txtField = oEvent.target || oEvent.srcElement;

        var numbers = /^[0-9]+$/;
        var zip_codetck = true;
        var msg=" ";
        if(document.getElementById("zip_code").value.match(numbers)){ zip_codetck=false; }


        //alert(msg + t1ck);

        if(zip_codetck){document.getElementById("btnSignUp").disabled = false;
            msg=msg+ " <b> Submit Button is enabled </b>";
        }
        else{document.getElementById("btnSignUp").disabled = true;
            msg=msg+ " <b> Submit Button is disabled </b>";
        }// end of if checking status of t1ck variable
        document.getElementById('my_msg').innerHTML=msg;
        }


        window.onload = function () {

        var btnSignUp = document.getElementById("btnSignUp");

        var zip_code = document.getElementById("zip_code");


        var zip_codetck=false;
        document.getElementById("btnSignUp").disabled = true;
        zip_code.onkeyup = formValidation;
        }



         //enable button for id_no validation
    function formValidation(oEvent) {
        oEvent = oEvent || window.event;
        var txtField = oEvent.target || oEvent.srcElement;

        var numbers = /^[0-9]+$/;
        var idno_tck = true;
        var msg=" ";
        if(document.getElementById("id_no").value.match(numbers)){ idno_tck=true; }


        //alert(msg + t1ck);

        if(idno_tck){document.getElementById("btnSignUp").disabled = false;
            msg=msg+ " <b> Submit Button is enabled </b>";
        }
        else{document.getElementById("btnSignUp").disabled = true;
            msg=msg+ " <b> Submit Button is disabled </b>";
        }// end of if checking status of t1ck variable
        document.getElementById('my_msg').innerHTML=msg;
        }


        window.onload = function () {

        var btnSignUp = document.getElementById("btnSignUp");

        var id_no = document.getElementById("id_no");


        var idno_tck=false;
        document.getElementById("btnSignUp").disabled = true;
        id_no.onkeyup = formValidation;
        }

        $(function(){
            $("#selID_Type").change(function(){
                var duplicate = $("#selID_Type option:selected").text();
                $("#selID_Type1").val(duplicate);
                $("#id_no").attr('placeholder', duplicate);

            })
        });
