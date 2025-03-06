// ------------step-wizard-------------
$(document).ready(function () {
    $('.nav-tabs > li a[title]').tooltip();
    
    //Wizard
    $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {

        var target = $(e.target);
    
        if (target.parent().hasClass('disabled')) {
            return false;
        }
    });
 function validateStep1() {
                let isValid = true;
// Name validation
                let name = $("#name").val().trim();
                if (name === "") {
                    $("#errorName").show();
                    isValid = false;
                } else {
                    $("#errorName").hide();
                }
                // pincode validation
                
                let pincode = $("#pincode").val().trim();
                if (pincode === "") {
                $("#errorPincode").show();
                isValid = false;
                } else {
                $("#errorPincode").hide();
                }
                
                // buildingNumber validation
                
                let buildingNumber = $("#building_number").val().trim();
                if (buildingNumber === "") {
                $("#errorBuilding").show();
                isValid = false;
                } else {
                $("#errorBuilding").hide();
                }
                
                // Street validation
                
                let streetNumber = $("#street_number").val().trim();
                if (streetNumber === "") {
                $("#errorStreet").show();
                isValid = false;
                } else {
                $("#errorStreet").hide();
                }
                 // areaName validation
                
                let areaName = $("#area_name").val().trim();
                if (areaName === "") {
                $("#errorArea").show();
                isValid = false;
                } else {
                $("#errorArea").hide();
                }
                
                // landmark validation
                let landmark = $("#landmark").val().trim();
                if (landmark === "") {
                $("#errorLandmark").show();
                isValid = false;
                } else {
                $("#errorLandmark").hide();
                }
                
                // City validation
                let city = $("#city").val().trim();
                if (city === "") {
                $("#errorCity").show();
                isValid = false;
                } else {
                $("#errorCity").hide();
                }
                
                // State validation
                let state = $("#state").val().trim();
                if (state === "") {
                $("#errorState").show();
                isValid = false;
                } else {
                $("#errorState").hide();
                }
                
                 // NoOfEmp validation
                let NoOfEmp = $("#no_of_emp").val().trim();
                if (NoOfEmp === "") {
                $("#errorEmployee").show();
                isValid = false;
                } else {
                $("#errorEmployee").hide();
                }
                
                
return isValid;
            }
            function validateStep2() {
                let isValid = true;
// Name validation
                let title = $("#title").val().trim();
                if (title === "") {
                    $("#errorTitle").show();
                    isValid = false;
                } else {
                    $("#errorTitle").hide();
                }
                // pincode validation
                
                let contactPerson = $("#contact_person").val().trim();
                if (contactPerson === "") {
                $("#errorContactPerson").show();
                isValid = false;
                } else {
                $("#errorContactPerson").hide();
                }
                
                // buildingNumber validation
                
                let officialNumber = $("#official_number").val().trim();
                if (officialNumber === "") {
                $("#errorOfficialNumber").show();
                isValid = false;
                } else {
                $("#errorOfficialNumber").hide();
                }
                
                // Street validation
                
                let whatsappNumber = $("#whatsapp_number").val().trim();
                if (whatsappNumber === "") {
                $("#errorWhatsapp").show();
                isValid = false;
                } else {
                $("#errorWhatsapp").hide();
                }
                // Email validation
                let email = $("#email").val().trim();
                let emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (email === "" || !emailPattern.test(email)) {
                    $("#errorEmail").show();
                    isValid = false;
                } else {
                    $("#errorEmail").hide();
                }
                
                
           return isValid;
            }
            
            function validateStep4() {
                let isValid = true;
// Name validation
                let category = $("#categoryInput").val().trim();
                if (category === "") {
                    $("#errorCategory").show();
                    isValid = false;
                } else {
                    $("#errorCategory").hide();
                }
                // pincode validation
               
                
           return isValid;
            }
            
            
             function validateStep5() {
                 let isValid = true;
                    let fileInput = $("#fileInput")[0].files[0];
                    if (!fileInput) {
                        $("#fileError").removeClass("hidden").text("Please select a file before proceeding.");
                        return;
                    }
                    
                    let validExtensions = ["jpg", "jpeg", "png", "pdf"];
                    let fileSizeLimit = 2 * 1024 * 1024; // 2MB
                    
                    let fileName = fileInput.name;
                    let fileExtension = fileName.split('.').pop().toLowerCase();
                    
                    if (!validExtensions.includes(fileExtension) || fileInput.size > fileSizeLimit) {
                        $("#fileError").removeClass("hidden").text("Invalid file. Allowed: JPG, PNG, PDF (Max: 2MB)");
                        return;
                    }

                    $("#fileError").addClass("hidden");
                    
           return isValid;
                }
    

            
             // Move to Step 2 only if Step 1 is valid
            $("#next1").click(function () {
                if (validateStep1()) {
                    $("#step1").hide();
                    $("#step2").show();
                    $("#steptwo").addClass('active');
       $("#stepone").removeClass('active');
                  
                }
            });

                // Move to Step 3 only if Step 1 is valid
                $("#next2").click(function () {
                if (validateStep2()) {
                $("#step2").hide();
                $("#step3").show();
                
                $("#stepthree").addClass('active');
                
                $("#steptwo").removeClass('active');
                }
                });
                // Move to Step 4 only if Step 3 is valid
                $("#next3").click(function () {
                    
                $("#step3").hide();
                $("#step4").show();
                
                $("#stepfour").addClass('active');
                
                $("#stepthree").removeClass('active');
                });
                
                // Move to Step 5 only if Step 4 is valid
                $("#next4").click(function () {
                if (validateStep4()) {
                $("#step4").hide();
                $("#step5").show();
                
                $("#stepfive").addClass('active');
                
                $("#stepfour").removeClass('active');
                }
                }); 
                 // Move to Step 5 only if Step 4 is valid
                $("#next5").click(function () {
                if (validateStep5()) {
                $("#step5").hide();
                $("#step6").show();
                
                $("#stepsix").addClass('active');
                
                $("#stepfive").removeClass('active');
                }
                }); 
                
    $(".prev-step").click(function (e) {

        var active = $('.wizard .nav-tabs li.active');
        prevTab(active);

    });
    
      // Real-time validation: Hide error messages when user types
            $("#name, #pincode, #building_number, #street_number, #area_name, #landmark, #city, #state,#no_of_emp").on("keyup change", function () {
                validateStep1();
               
            });
            
              // Real-time validation: Hide error messages when user types
            $("#title,#contact_person,#official_number,#whatsapp_number,#facebook,#twitter").on("keyup change", function () {
                validateStep2();
                
            });
     // Real-time validation: Hide error messages when user types
   
});

function nextTab(elem) {
    $(elem).next().find('a[data-toggle="tab"]').click();
}
function prevTab(elem) {
    $(elem).prev().find('a[data-toggle="tab"]').click();
}


$('.nav-tabs').on('click', 'li', function() {
    $('.nav-tabs li.active').removeClass('active');
    $(this).addClass('active');
});

 