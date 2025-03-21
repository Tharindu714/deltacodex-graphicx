function ADsignout() {
  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if (request.readyState == 4) {
      var text5 = request.responseText;
      if (text5 == "success") {
        window.location = "adminsigning.php";
      } else {
        alert(text5);
      }
    }
  };

  request.open("GET", "ADSignoutProcess.php", true);
  request.send();
}

function UpdatePortfolio() {
  var customer = document.getElementById("cus");
  var totalexp = document.getElementById("totalexp");
  var uiexp = document.getElementById("uiexp");
  var uicount = document.getElementById("uicount");
  var graphicworks = document.getElementById("graphicworks");

  var form = new FormData();
  form.append("cus", customer.value);
  form.append("totalexp", totalexp.value);
  form.append("uiexp", uiexp.value);
  form.append("uicount", uicount.value);
  form.append("graphicworks", graphicworks.value);

  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if (request.readyState == 4) {
      var text6 = request.responseText;
      if (text6 == "success") {
        window.location.reload();
      } else {
        window.location.reload();
      }
    }
  };

  request.open("POST", "UpdatePortfolio.php", true);
  request.send(form);
}


function skilladding() {
  var lang = document.getElementById("lang");
  var percentage = document.getElementById("percentage");

  var form = new FormData();
  form.append("lang", lang.value);
  form.append("percentage", percentage.value);

  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if (request.readyState == 4) {
      var text6 = request.responseText;
      if (text6 == "Submitted Successfully") {
        window.location.reload();
      } else {
      }
    }
  };

  request.open("POST", "skillProcess.php", true);
  request.send(form);
}

function feedbackpro() {
  var feedname = document.getElementById("feedname");
  var designation = document.getElementById("designation");
  var feedbackpro = document.getElementById("feedbackpro");

  var form = new FormData();
  form.append("feedname", feedname.value);
  form.append("designation", designation.value);
  form.append("feedbackpro", feedbackpro.value);

  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if (request.readyState == 4) {
      var text10 = request.responseText;

      if (text10 == "Successfully") {
        window.location.reload();
      } else {
        alert(text10);
      }
    }
  };
  request.open("POST", "feedbackProcess.php", true);
  request.send(form);
}

function signIn() {
  var email = document.getElementById("email2");
  var password = document.getElementById("password2");

  var form = new FormData();
  form.append("email2", email.value);
  form.append("pass2", password.value);

  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if (request.readyState == 4) {
      var text2 = request.responseText;
      if (text2 == "success") {
        window.location = "portfolio.php";
      } else {
        alert(text2);
      }
    }
  };

  request.open("POST", "signInProcess.php", true);
  request.send(form);
}

function signout() {
  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if (request.readyState == 4) {
      var text5 = request.responseText;
      if (text5 == "success") {
        window.location.reload();
      } else {
        alert(text5);
      }
    }
  };

  request.open("GET", "SignoutProcess.php", true);
  request.send();
}

function addProtfolio() {
  var image = document.getElementById("imageuploder");
  var name = document.getElementById("proj_name");
  var proj = document.getElementById("proj_title");

  var form = new FormData();
  form.append("proj_name", name.value);
  form.append("proj_title", proj.value);

  var file_count = image.files.length;

  for (var x = 0; x < file_count; x++) {
    form.append("img" + x, image.files[x]);
  }

  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if (request.readyState == 4) {
      var text20 = request.responseText;

      if (text20 == "Image Saved Successfully") {
        window.location.reload();
      } else {
        alert(text20);
      }
    }
  };
  request.open("POST", "addProtfolio.php", true);
  request.send(form);
}

function skillUP() {
  var upercentage = document.getElementById("upercentage");
  var ulang = document.getElementById("ulang");

  var form = new FormData();
  form.append("upercentage", upercentage.value);
  form.append("ulang", ulang.value);

  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if (request.readyState == 4) {
      var text16 = request.responseText;
      if (text16 == "success") {
        window.location.reload();
      } else {
        alert(text16);
      }
    }
  };

  request.open("POST", "updateskill.php", true);
  request.send(form);
}

function changeProductimg() {
  var image = document.getElementById("imageuploder");

  image.onchange = function () {
    var file_count = image.files.length;

    if (file_count <= 1) {
      for (var x = 0; x < file_count; x++) {
        var file = this.files[x];
        var url = window.URL.createObjectURL(file);

        document.getElementById("i" + x).src = url;
      }
    } else {
      alert("Please Select a image ");
    }
  };
}
