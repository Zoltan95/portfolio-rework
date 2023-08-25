//Declare Err Obj
let err = {};

//Declare Pass Through
let myobj = {
    fname : false,
    lname : false,
    email : false,
    subject : false,
    enquiry : false,
};

const checkbox = document.querySelector("#submit");
checkbox.addEventListener("click", check_err, false);

    function check_err(){
        chk();
        if (myobj.fname === false || myobj.lname === false || myobj.email === false || myobj.subject === false || myobj.enquiry === false ) {
            $('#err').removeClass('open');
            $('#err').css('height', '90px');
            $("#submit").css("background-color", "#FF3131");
            $("#submit").css("border-color", "#FF3131");
            $("#submit").attr("disabled", true);
            err.isEmpty = "Please fill out all the fields";
            Object.values(err).forEach(val => {
                if (val != "") {
                $("#err-list").append(`<li class='msg--error'>${val}</li>`);
            }});
            return false
        }
        else if (myobj.fname === true && myobj.lname === true && myobj.email === true && myobj.subject === true && myobj.enquiry === true )
        {
            $('#err').css('height', '0px');
            $("#submit").css("background-color", "#5271FF");
            $("#submit").css("border-color", "white");
            $("#submit").attr("disabled", false);
            return true;
        }
    }

    function chk() {
        if (Object.keys(err).length > 0) {
            $('.msg--error').remove();
            $('.msg--success').remove();
        }
    }

    //Check First Name
    $('#fname').on('input', function() {
        
        var input = $(this).val();
        let re = /^[a-zA-Z]+(([\'\,\.\-][a-zA-Z])?[a-zA-Z]*)*$/;
        var is_name = re.test(input);
        $('#fname').css('border', '1px solid #797e83');
        if (input === "")
        {
            //console.log("ERR");
            err.isFnameEmpty = "You must provide your First Name";
            $('#fname').css('border', '1px solid #FF3131');
            myobj.fname = false;
            check_err();
        }
        else if (!is_name)
        {
            err.isFname = "Please provide a valid First Name";
            $('#fname').css('border', '1px solid #FF3131');
            myobj.fname = false;
            check_err();
        }
        else
        {
            err.isFnameEmpty = "";
            err.isFname = "";
            //console.log("First Name Success");
            myobj.fname = true;
            check_err();
        }
    });

    //Check Last Name
    $('#lname').on('input', function() {
        var input = $(this).val();
        let re = /^[a-zA-Z]+(([\'\,\.\-][a-zA-Z])?[a-zA-Z]*)*$/;
        var is_name = re.test(input);
        $('#lname').css('border', '1px solid #797e83');
        if (input === "")
        {
            err.isLnameEmpty = "You must provide your Last Name";
            $('#lname').css('border', '1px solid #FF3131');
            myobj.lname = false;
            check_err();
        }
        else if (!is_name)
        {
            err.isLname = "Please provide a valid Last Name";
            $('#lname').css('border', '1px solid #FF3131');
            myobj.lname = false;
            check_err();
        }
        else
        {
            err.isLnameEmpty = "";
            err.isLname = "";
            //console.log("Last Name Success");
            myobj.lname = true;
            check_err();
        }
    });

    //Check Email
    $('#email').on('input', function() {
        var input = $(this).val();
        let re = /^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
        var is_name = re.test(input);
        $('#email').css('border', '1px solid #797e83');
        if (input === "")
        {
            err.isEmailEmpty = "You must provide an Email Address";
            $('#email').css('border', '1px solid #FF3131');
            myobj.email = false;
            check_err();
        }
        else if (!is_name)
        {
            err.isEmail = "Please provide a valid Email Address";
            $('#email').css('border', '1px solid #FF3131');
            myobj.email = false;
            check_err();
        }
        else
        {
            err.isEmailEmpty = "";
            err.isEmail = "";
            //console.log("Email Success");
            myobj.email = true;
            check_err();
        }
    });

    $('#subject').on('input', function() {
        var input = $(this).val();
        var is_name = input;
        $('#subject').css('border', '1px solid #797e83');
        if (is_name === "")
        {
            err.isSubjectEmpty = "Please provide the Subject";
            $('#subject').css('border', '1px solid #FF3131');
            myobj.subject = false;
            check_err();
        }
        else
        {
            err.isSubjectEmpty = "";
            //console.log("Subject Success");
            myobj.subject = true;
            check_err();
        }
    });

    $('#message').on('input', function() {
        var input = $(this).val();
        var is_name = input;
        $('#message').css('border', '1px solid #797e83');
        if (is_name === "")
        {
            err.isEnquiryEmpty = "Please provide some information about your Enquiry";
            $('#message').css('border', '1px solid #FF3131');
            myobj.enquiry = false;
            check_err();
        }
        else
        {
            err.isEnquiryEmpty = "";
            myobj.enquiry = true;
            check_err();
        }
    });

    $(document).ready(function() {
        //Detect that a user has started entering their name itno the name input
        Object.values(err).forEach(val => {
            if (val != "") {
            $("#err-list").append(`<li class='msg--error'>${val}</li>`);
        }});
    });