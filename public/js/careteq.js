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
     $('#errorBtnOkay').click(function(){
        errorBtnOkay();
     });
     $('#sucessBtnOkay').click(function(){
        sucessBtnOkay();
     });

      //Close Success Dialog by clicking the okay button
      function sucessBtnOkay(){
        $('#successDialog').hide();
        window.location.href = "/profileinfo";
      }

     //Close Error Dialog by clicking the okay button
     function errorBtnOkay(){
       $('#errorDialog').hide();
     }

    //Automatic close the Dialog by 6 seconds
    //  window.setTimeout(function() {
    //     $(".alert").fadeTo(6000, 500).slideUp(1000, function(){
    //         $(this).remove();
    //     });
    // }, 2000);

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
        // var roundedCentimeter = centimeter.toFixed(2);

        $('#inch').val(convertedInches, 'inches');
        // $('#centimeter').val(roundedCentimeter);
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

        $('#bmi').val(calculationbmi);



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
      $("#patient_id").show();
      $("#patient_id1").show();

    }
    else{
        $("#patient_id").hide();
      $("#patient_id1").hide();
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
    $("#country").select2();

    // Read selected option
    $('#but_read').click(function(){
      var title = $('#country option:selected').text();
      var id = $('#country').val();

      $('#result').html("id : " + id + ", name : " + name);

    });
  });

  //Search in a dropdown Province
  $(document).ready(function(){

    // Initialize select2
    $("#province").select2();

    // Read selected option
    $('#but_read').click(function(){
      var title = $('#province option:selected').text();
      var id = $('#province').val();

      $('#result').html("id : " + id + ", name : " + name);

    });
  });

   //Search in a dropdown Municipality
   $(document).ready(function(){

    // Initialize select2
    $("#municipality").select2();

    // Read selected option
    $('#but_read').click(function(){
      var title = $('#municipality option:selected').text();
      var id = $('#municipality').val();

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
    $("#barangay").select2();

    // Read selected option
    $('#but_read').click(function(){
      var title = $('#barangay option:selected').text();
      var id = $('#barangay').val();
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









        $(function(){
            $("#selID_Type").change(function(){
                var duplicate = $("#selID_Type option:selected").text();

                // $("#selID_Type1").val(duplicate);
                $("#id_no").attr('placeholder', duplicate);

            })
        });

        //province start
$(document).ready(function() {
    $('#country').on('change', function()
    {
       var country = $(this).val();
       if(country) {
              //alert(country); return false;
              var url = window.location.origin+'/getprovinces/'+country;
              //alert(url); return false;
              $.ajaxSetup
              ({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
              });
                $.ajax({
                    url: url,
                    method: 'get',
                    data: { 'country_code': country }, // prefer use serialize method
                    success:function(data)
                    {
                        //alert (data); return false;
                      if(data){
                         //alert (data); return false;
                         $("#province").empty();
                         $("#province").append('<option value=" ">Select Province</option>');
                        for(var n=0; n<data.length; n++) {
                           $("#province").append('<option>'+data[n]['province']+'</option>');
                        }
                        $("#municipality").empty();
                        $("#barangay").empty();
                        $("#zip_code").val('');
                      }

                        else
                        {
                          $('#province').empty();
                        }
                      }
              });
            }
    });
    //province end

    // municipality start
    $('#province').on('change', function()
    {
       var province = $(this).val();
       //alert(province); return false;
       if(province) {
              //alert(province); return false;
              var url = window.location.origin+'/getmunicipality/'+province;
              //alert(url); return false;
              $.ajaxSetup
              ({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
              });
                $.ajax({
                    url: url,
                    method: 'get',
                    data: { 'province': province }, // prefer use serialize method
                    success:function(data)
                    {
                        //alert (data); return false;
                      if(data){
                         //alert (data); return false;
                         $("#municipality").append('<option value=" ">Select Municipality</option>');
                        for(var n=0; n<data.length; n++) {
                           $("#municipality").append('<option>'+data[n]['municipality']+'</option>');
                        }
                      }

                        else
                        {
                          $('#municipality').empty();
                        }
                      }
              });
            }
    });
    //municipality end


     // barangay start
     $('#municipality').on('change', function()
     {
        var municipality = $(this).val();
        //alert(province); return false;
        if(municipality) {
               //alert(province); return false;
               var url = window.location.origin+'/getbarangays/'+province;
               //alert(url); return false;
               $.ajaxSetup
               ({
                   headers: {
                       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
               }
               });
                 $.ajax({
                     url: url,
                     method: 'get',
                     data: { 'municipality': municipality }, // prefer use serialize method
                     success:function(data)
                     {
                         //alert (data); return false;
                       if(data){
                          //alert (data); return false;
                          $("#barangay").append('<option value=" ">Select Barangay</option>');
                         for(var n=0; n<data.length; n++) {
                            $("#barangay").append('<option>'+data[n]['barangay']+'</option>');

                         }
                       }

                         else
                         {
                           $('#barangay').empty();
                         }
                       }
               });
             }
     });
     //barangay end

     //zip code start
      $('#barangay').on('change', function()
     {
        var barangay = $(this).val();
        var province = $('#province').val();
        //alert(barangay); return false;
        if(barangay) {
               //alert(barangay); return false;
               var url = window.location.origin+'/getzipcode/'+barangay;
               //alert(url); return false;
               $.ajaxSetup
               ({
                   headers: {
                       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
               }
               });
                 $.ajax({
                     url: url,
                     method: 'get',
                     data: { 'barangay': barangay, 'province': province }, // prefer use serialize method
                     success:function(data)
                     {
                         //alert (data); return false;
                       if(data){
                          //alert (data); return false;
                          $('#zip_code').val(data[0]['zip_code']);

                       }

                         else
                         {
                           $('#barangay').empty();
                         }
                       }
               });
             }
     });


    })
    //DATE PICKER
    $(document).ready(function () {
        $('.datepicker').datepicker({
            dateFormat: 'mm/dd/yy',
            changeMonth: true,
            changeYear: true,
            autoclose: true,
            yearRange: "1800:2080"

        });
    });

    // $(document).ready(function (){
    //     $('#centimeter').on('click', function (){
    //         var centimeter = $('#centimeter').val();

    //         $('#centimeter').val(centimeter).toFixed(2);
    //     })
    // })


