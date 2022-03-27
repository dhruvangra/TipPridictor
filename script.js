//Calculate Tip
function calculateTip() {
  var billAmt = document.getElementById("billamt").value;
  var serviceQual = document.getElementById("serviceQual").value;
  var numOfPeople = document.getElementById("peopleamt").value;

  //validate input
  if (billAmt === "" || serviceQual == 0) {
    alert("Please enter values");
    return;
  }
  //Check to see if this input is empty or less than or equal to 1
  if (numOfPeople === "" || numOfPeople <= 1) {
    numOfPeople = 1;
    document.getElementById("each").style.display = "block";
  } else {
    document.getElementById("each").style.display = "block";
  }

  //Calculate tip
  var total = (billAmt * (serviceQual/100)) / numOfPeople;
  //round to two decimal places
  total = Math.round(total * 100) / 100;
  //next line allows us to always have two digits after decimal point
  total = total.toFixed(2);
  //Display the tip
  document.getElementById("totalTip").style.display = "block";
  document.getElementById("tip").innerHTML = total;

}

//Hide the tip amount on load
document.getElementById("totalTip").style.display = "none";
document.getElementById("each").style.display = "none";

//click to call function
document.getElementById("calculate").onclick = function() {
  calculateTip();

};

    $(document).ready(function() {
        <!--#todb grabs the form id-->
        $("#todb").submit(function(e) {
            e.preventDefault();
            $.ajax( {
                <!--insert.php calls the PHP file-->
                url: "insert.php",
                method: "post",
                data: $("form").serialize(),
              /* dataType: "text",
                success: function(strMessage) {
                    $("#message").text(strMessage);
                  //  $("#todb")[0].reset(); // for reset the content of input
                }*/
            });
        });
    });

    $(document).ready(function() {
        <!--#js grabs the form id-->
        $("#todb").submit(function(e) {
            e.preventDefault();
            $.ajax( {
                <!--insert.php calls the PHP file-->
                url: "address.php",
                method: "post",
                data: $("form").serialize(),
               dataType: "text",
                success: function(strMessage) {
                    $("#addressmess").text(strMessage);
                 //   $("#todb")[0].reset();
                }
            });
        });
    });

    $(document).ready(function() {
        <!--#js grabs the form id-->
        $("#todb").submit(function(e) {
            e.preventDefault();
            $.ajax( {
                <!--insert.php calls the PHP file-->
                url: "pincode.php",
                method: "post",
                data: $("form").serialize(),
               dataType: "text",
                success: function(strMessage) {
                    $("#pincodemess").text(strMessage);
                 //   $("#todb")[0].reset();
                }
            });
        });
    });

    $(document).ready(function() {
        <!--#js grabs the form id-->
        $("#todb").submit(function(e) {
            e.preventDefault();
            $.ajax( {
                <!--insert.php calls the PHP file-->
                url: "country.php",
                method: "post",
                data: $("form").serialize(),
               dataType: "text",
                success: function(strMessage) {
                    $("#countrymess").text(strMessage);
              //      $("#todb")[0].reset();
                }
            });
        });
    });
