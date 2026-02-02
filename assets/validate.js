
        function validate() {
            let first_name = document.getElementById("first_name").value;
            if (first_name == "") {
                document.getElementById("first_name_error").innerText = "**Please enter first name";
                return false;
            }
        
            let last_name = document.getElementById("last_name").value;
            if (last_name == "") {
                document.getElementById("last_name_error").innerText = "**Please enter last name";
                return false;
            }
         
       
            let email = document.getElementById("email").value;
            if (email == "") {
                document.getElementById("email_error").innerText = "**Please enter email";
                return false;
            }
            // let email=document.getElementById("email").value;
          
            let emailPattern = /^[a-zaA-Z0-9.%_+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
            if (!emailPattern.test(email)) {
                document.getElementById("email_error").innerText = "**Please enter a valid email address";
                return false;
            }   

       
            let password = document.getElementById("password").value;
            if (password == "") {
                document.getElementById("password_error").innerText = "**Please enter password";
                return false;
            }
            if (password.length < 6) {
                document.getElementById("password_error").innerText = "**Password must be 6 character";
                return false;
            }

        
            let termSelected = document.querySelector('input[name="term"]:checked');
            if (!termSelected || termSelected.value != "1") {
                document.getElementById("term_error").innerText = "**You must accept the terms and conditions";
                return false;
            }
            return true;


        }
  