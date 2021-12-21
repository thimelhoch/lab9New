function validate(){
    var userName = document.getElementById("username").value;
    var passWord = document.getElementById("password").value;
    var earphoneInput = document.getElementById("earphones").value;
    var pencilInput = document.getElementById("pencil").value;
    var notebookInput = document.getElementById("notebook").value;
    var shipping1 = document.getElementById("shipping1");
    var shipping2 = document.getElementById("shipping2");
    var shipping3 = document.getElementById("shipping3");
  
    if(userName == ""  || userName == "" ||!userName.includes("@") || !userName.endsWith(".com")){
       alert("You must fill in a username with the correct atrributes eg. name@domain.com");
       return false;
     }
     if(passWord == ""){
        alert("You must fill in a password.");
        return false;
      }
      if(earphoneInput == ""){
         alert("You must fill in an quanity amount for the item earphone.");
         return false;
       }
      if(pencilInput == ""){
          alert("You must fill in an quanity amount for the item pencils.");
          return false;
        }
      if(notebookInput == ""){
          alert("You must fill in an quanity amount for the item notebook.");
          return false;
        }
        if(!shipping1.checked && !shipping2.checked && !shipping3.checked){
            alert("You must fill in all fields for shipping before continuing.");
            return false;
          }
     if(earphoneInput<0 || pencilInput<0 || notebookInput<0){
       alert("Invalid Input.  Values must be greater than 0.");
       return false;
    }
  }
