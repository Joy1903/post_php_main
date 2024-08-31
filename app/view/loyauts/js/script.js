function getXmlHttp() {
  var xmlhttp;
  try {
    xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
  } catch (e) {
    try {
      xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    } catch (E) {
      xmlhttp = false;
    }
  }
  if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
    xmlhttp = new XMLHttpRequest();
  }
  return xmlhttp;
}

function delete_by_id(id){
  const xhttp = getXmlHttp();
  xhttp.onload = function() {
    document.getElementById("delete_item").innerHTML =
    this.responseText;
  }
  xhttp.open("GET", "/delete?id="+id);
  xhttp.send();
}



//  for from registrate

const from = document.getElementById("fromSingIn1");
const definition_of_value = document.getElementById("inputGroupPrepend123");
const input_login = document.getElementById("validationCustomUsername1");
const password_input_value = document.getElementById("password_input_value");
const password_input_value_check = document.getElementById("password_input_value_check");


password_input_value_check.addEventListener("keyup", function(){
    password_input_value_check.classList.remove('check-flase');
    password_input_value_check.classList.remove('check-true');
    password_input_value.classList.remove('check-flase');
    password_input_value.classList.remove('check-true');
  if((password_input_value_check.value.length > 0) && (password_input_value.value.length > 0)){
    if(password_input_value.value != password_input_value_check.value){
      password_input_value_check.style.display = "block";
      password_input_value_check.classList.add('check-flase');
      password_input_value_check.classList.remove('check-true');
      password_input_value.classList.add('check-flase');
      password_input_value.classList.remove('check-true');
    } else {
      password_input_value.style.display = "block";
      password_input_value_check.classList.remove('check-flase');
      password_input_value_check.classList.add('check-true');
      password_input_value.classList.remove('check-flase');
      password_input_value.classList.add('check-true');
    }
  }
})


from.addEventListener("submit", function(event){
  if((document.getElementById("validationCustomUsername1").getAttribute("data-check-login") == "1") && (password_input_value.value != password_input_value_check.value)){
    event.preventDefault();
  }
})


function check_Logine(logine){
    definition_of_value.innerHTML = "@";
    input_login.setAttribute("data-check-login", "0");
    input_login.classList.remove("check-flase");
    input_login.classList.remove("check-true");
    const xhttp = getXmlHttp();
    xhttp.open('POST', '/check_login', true); 
    xhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded'); 
    xhttp.send("login=" + encodeURIComponent(logine)); 
    xhttp.onreadystatechange = function() { 
        if (xhttp.readyState == 4) { 
          if(xhttp.status == 200) { 
            if (xhttp.responseText){
                definition_of_value.innerHTML = "@";
                console.log(logine)
                if(logine.length){
                  definition_of_value.innerHTML = "❌";
                  definition_of_value.setAttribute("title", "login busy")
                  input_login.classList.add("check-flase");
                  input_login.classList.remove("check-true");
                  input_login.setAttribute("data-check-login", "0");
                }
            } else {
              definition_of_value.innerHTML = "@";
                if(logine.length){
                  definition_of_value.innerHTML = "✔️";
                  definition_of_value.setAttribute("title", "login not busy")
                  input_login.classList.remove("check-flase");
                  input_login.classList.add("check-true");
                  input_login.setAttribute("data-check-login", "1");
                }
            }
          }
        }
    }  
}
