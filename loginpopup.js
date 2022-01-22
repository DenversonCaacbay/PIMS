function addForm() {
    document.getElementById("addPopup").style.display="block";
  }
function signForm() {
    document.getElementById("signPopup").style.display="block";
  }
 
  function closeForm() {
    document.getElementById("addPopup").style.display= "none";
    document.getElementById("signPopup").style.display= "none";
   
  }
  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function(event) {
    var modal = document.getElementById('addPopup');
    var modal1 = document.getElementById('signPopup');

    if (event.target == modal || event.target == modal1) {
      closeForm();
    }
  }
  