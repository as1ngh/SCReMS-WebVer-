var people = [

]

function addpeople() {
    var ema=document.getElementById("createEmail").value;
    var pass=document.getElementById("createPassword").value;
    var confpass=document.getElementById("createConfirmPassword").value;
    var enroll=document.getElementById("createEnroll").value;
    var check=true;
    if(ema==""){
        console.log("Enter Email");
        check=false;
    }
    else if(pass==""){
        console.log("Enter Pass");
        check=false;
    }
    else if(confpass==""){
        console.log("Enter Confirm Pass");
        check=false;
    }
    else if(enroll==""){
        console.log("Enter Enroll");
        check=false;
    }
    else if(confpass!=pass){
        console.log("Passwords Doesnt match");
        check=false;
    }
    for(var i=0;i<people.length;i++){
        if(enroll==people[i].enrollment || ema==people[i].email){
            check=false;
        }
    }
    if(check){
        people.push({
            enrollment : enroll,
            email : ema,
            password : pass
        });
    }
    else{
        console.log("Already Exist");
    }
    console.log(people);
};

function authorize() {
    var username=document.getElementById("email").value;
    var password=document.getElementById("password").value;
    console.log(username+" "+password+"1");
};