function menuDropdown() {
    document.getElementById("myDropdown").classList.toggle("show");
  }

    // Close the dropdown if the user clicks outside of it
    window.onclick = function(event) {
        if (!event.target.matches('.dropbtn')) {
            var dropdowns = document.getElementsByClassName("dropdown-content");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                }
            }
        }
    }
   
 //     SCROLL HEADING in NAV MENU 
    //Get the header
   
    var title2 = document.getElementById("slide");
    var slidetext = document.getElementById("slidetext");

    
    var heroheight = 350;


    document.addEventListener(
        'scroll',
        (event) => {
            if (window.pageYOffset > heroheight) {
                title2.classList.add("anamation");
                slidetext.classList.add("visable");

            } else {
                title2.classList.remove("anamation");
                slidetext.classList.remove("visable");
            }

        }, {
            passive: true
        }
    );

    //On Contact Form; Set fields if remember me was used previously
    if (localStorage.remember == 'true') {
            document.getElementById('name').value = localStorage.name;
            document.getElementById('email').value = localStorage.email;
           document.getElementById('mobile').value = localStorage.mobile;
            document.getElementById('subject').value = localStorage.subject;
           document.getElementById('message').value = localStorage.message;
            document.getElementById('remember').value = localStorage.remember;
           
}  
    //Save to local storage on submit
    function setstorage(){
        
          if (document.getElementById("remember").checked){
            
            localStorage.setItem('name',document.getElementById("name").value);
            localStorage.setItem('email',document.getElementById("email").value);
            localStorage.setItem('mobile',document.getElementById("mobile").value);
            localStorage.setItem('subject',document.getElementById("subject").value);
            localStorage.setItem('message',document.getElementById("message").value);
            localStorage.setItem('remember',document.getElementById("remember").checked);
            localStorage.setItem('novalidate',document.getElementById("novalidate").checked);
            
        }else{
        localStorage.clear();}
    }
    

var pattern = /^\s*$/g;
function validate() {
    var val = document.getElementById('message').value;

    if (pattern.test(val)) {
        alert('Wrong content!');
    }
    
}

//Not being used        
function validateForm() {
    
  var x = document.getElementById("message").value;
  if (x.trim == "") {
    alert("Message must be filled out");
    return false;
  }
    alert("submitted")
}