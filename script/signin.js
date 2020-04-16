/*firebase.auth().onAuthStateChanged(function(user) {
  if (user) {
    // User is signed in.
   
    document.getElementById("user_att").style.visibility = "visible";
    document.getElementById("login_att").style.visibility = "hidden";;
    

    var user = firebase.auth().currentUser;
    
   /* if(user != null){

      var email_id = user.email;
      document.getElementById("user_para").innerHTML = "Welcome User : " + email_id;

    }

  } else {
    // No user is signed in.
    document.getElementById("user_att").style.display = "none";
    document.getElementById("login_att").style.display= "visible";
    

  }
  $('.Cart').click(function(){
      if(user){
      window.location.href="cart.php";     
        }
      else{
         window.location.href="signin.php"; 
      }  
    });
});
$(document).ready(function() {
  $('#search').click(function () {
    $('#search-results').css({'display': 'inline-block', "background-color":"white", "width": "408px", 'height': 'auto', 'position': 'absolute', 'left': '240px', 'top': '65px', 'z-index': '1'});
  });
});

window.onload = function() {
  var hidediv = document.getElementById('search-results');
  document.onclick=function(div) {
    if(div.target.id !== 'search'){
      hidediv.style.display = 'none';
    }
  };
};

function googlelogin(){

  var provider = new firebase.auth.GoogleAuthProvider();
  firebase.auth().signInWithRedirect(provider);
firebase.auth().getRedirectResult().then(function(result) {
  if (result.credential) {
    // This gives you a Google Access Token. You can use it to access the Google API.
    var token = result.credential.accessToken;
    // ...
  }
  // The signed-in user info.
  var user = result.user;
}).catch(function(error) {
  // Handle Errors here.
  var errorCode = error.code;
  var errorMessage = error.message;
  // The email of the user's account used.
  var email = error.email;
  // The firebase.auth.AuthCredential type that was used.
  var credential = error.credential;
  // ...
});
}

function logout(){
  firebase.auth().signOut();
  window.location.href="index.php"; 

}


function login(){

  var userEmail = document.getElementById("email").value;
  var userPass = document.getElementById("password").value;

  firebase.auth().signInWithEmailAndPassword(userEmail, userPass).catch(function(error) {
    // Handle Errors here.
    var errorCode = error.code;
    var errorMessage = error.message;

    window.alert("Error : " + errorMessage);

    // ...
  }
  );
  window.location.href="index.php"; 

}
*/
firebase.auth().onAuthStateChanged(function(user) {
  if (user) {
    // User is signed in.

    document.getElementById("user_att").style.visibility = "visible";
    document.getElementById("login_att").style.visibility = "hidden";;


    var user = firebase.auth().currentUser;

   /* if(user != null){

      var email_id = user.email;
      document.getElementById("user_para").innerHTML = "Welcome User : " + email_id;

    }*/

  } else {
    // No user is signed in.
    document.getElementById("user_att").style.display = "none";
    document.getElementById("login_att").style.display= "visible";


  }
  $('.Cart').click(function(){
      if(user){
      window.location.href="cart.php";
        }
      else{
         window.location.href="signin.php";
      }
    });
});

$(document).ready(function() {
  $('#search').click(function () {
    $('#search-results').css({'display': 'flex', "background-color":"white", "width": "1016px", 'height': 'auto', 'position': 'absolute', 'left': '215px', 'top': '65px', 'z-index': '1' ,'margin-top':'10px;'});
  });
});

window.onload = function() {
  var hidediv = document.getElementById('search-results');
  document.onclick=function(div) {
    if(div.target.id !== 'search'){
      hidediv.style.display = 'none';
    }
  };
};

function googlelogin(){

  var provider = new firebase.auth.GoogleAuthProvider();
  firebase.auth().signInWithRedirect(provider);
firebase.auth().getRedirectResult().then(function(result) {
  if (result.credential) {
    // This gives you a Google Access Token. You can use it to access the Google API.
    var token = result.credential.accessToken;
    // ...
  }
  // The signed-in user info.
  var user = result.user;
}).catch(function(error) {
  // Handle Errors here.
  var errorCode = error.code;
  var errorMessage = error.message;
  // The email of the user's account used.
  var email = error.email;
  // The firebase.auth.AuthCredential type that was used.
  var credential = error.credential;
  // ...
});
}

function logout(){
  firebase.auth().signOut();
  window.location.href="index.php";

}


function login(){

  var userEmail = document.getElementById("email").value;
  var userPass = document.getElementById("password").value;

  firebase.auth().signInWithEmailAndPassword(userEmail, userPass).catch(function(error) {
    // Handle Errors here.
    var errorCode = error.code;
    var errorMessage = error.message;

    window.alert("Error : " + errorMessage);

    // ...
  }
  );
  window.location.href="index.php";

}




