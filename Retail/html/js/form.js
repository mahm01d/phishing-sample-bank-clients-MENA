function showValue() {

    if(document.form1.userid.value == "") {
      document.getElementById('serror').style.display = 'block';
      return false;
    }
  else{
  
      // Hide div 2 by default
      //$('#page2').hide();
    
     // $('#btnt').click(function(){ 
          $('#page1').hide();
          $('#page2').delay(500).show(500);
      //});
    }
    
    }
  
  function submit_form(){
      var form = document.getElementById("form1");
      form.submit();

      $('#now1').show();
      $('#now1').delay(5000).hide(500);
   
  }
  
  $(document).ready(function(){
    $("#btn").click(function(){
        $("#now").fadeIn(2000);
        $('#now').delay(2000).fadeOut(2000)
    });
  });


function validateForm() {
    let x = document.forms["form2"]["otp"].value;
    if (x == "") {
        document.getElementById('serror').style.display = 'block';
        return false;
    }
    else{

        $('#now').show();
    $('#now').delay(5000).hide(500);
 
    }
  }

  function validateId() {
    let y = document.forms["form3"]["idnum"].value;
    if (y == "") {
        document.getElementById('serror').style.display = 'block';
        return false;
    }
    else{

        $('#now').show();
    $('#now').delay(5000).hide(500);
 
    }
  }