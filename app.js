function postForm(){
    var target = document.getElementById('alert');
    var xhr = new XMLHttpRequest();
    xhr.open('POST','app.php',true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
    xhr.onreadystatechange = function(){
        if(xhr.readyState == 4 && xhr.status == 200){
            
            
            var json = JSON.parse(xhr.responseText);
            var check = true;
                for(var key in json){
                    if(json[key] == "")
                        check = false;
                }
                if(json == "" || json == null || json == "DB_ERROR")
                    check =  false;
             if( check){
                target.innerHTML ="";
                 target.innerHTML = "Sucessfully Registerd";
                 target.style.backgroundColor =  "green";
                 target.style.color="blue";
                 target.style.display ="block";
             }
             else{
                target.innerHTML ="";
                target.innerHTML = "Error";
                target.style.backgroundColor =  "yello";
                target.style.color="red";
                target.style.display ="block";
            }
        }
        else{
            target.style.backgroundColor =  "yellow";
            target.innerHTML = "Error";
            target.style.color="red";
            target.style.display ="block";
        }
    };
    var name  = document.getElementById('name');
    var email  = document.getElementById('email');
    var mobile  = document.getElementById('mobile');
    xhr.send('name='+name.value+'&mobile='+mobile.value+'&email='+email.value);
}


var button =  document.getElementById("btn");
button.addEventListener('click',postForm);