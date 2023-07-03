document.addEventListener("DOMContentLoaded", function () {
  var button = document.getElementById("my-button");
  button.addEventListener("click", function (e) {
    var popup = document.getElementById("my-popup");
    popup.style.display = "flex";
    var checkbox = document.getElementById("checkbox-at");
    checkbox.checked = true;
    var name = document.getElementById("contactName");
    name.value = "";
    var phone = document.getElementById("contactPhone");
    phone.value = "";
    var successMessage = document.getElementById("success-message");
    if (successMessage) {
      successMessage.style.display = "none";
    }
    var failMessage = document.getElementById("fail-message");
    if (failMessage) {
      failMessage.style.display = "none";
    }
  });

  var closeButton = document.getElementById("close-button");
  closeButton.addEventListener("click", function (e) {
    var popup = document.getElementById("my-popup");
    popup.style.display = "none";
    var name = document.getElementById("contactName");
    name.value = "";
    var phone = document.getElementById("contactPhone");
    phone.value = "";
  });
});

jQuery(document).ready(function ($) {
  var form = $("#contactForm");
  var action = form.attr("action");
  var checkbox = document.getElementById("checkbox-at");
  var errorMessage = document.getElementById("fail-message");

  form.on("submit", function (event) {
    event.preventDefault();
    if (checkbox.checked) {
      errorMessage.style.display = "none";
      var formData = {
        contactName: $("#contactName").val(),
        contactPhone: $("#contactPhone").val(),
      };
      $.ajax({
        url: action,
        type: "POST",
        data: formData,
        error: function () {
          var failMessage = document.getElementById("fail-message");
          if (successMessage) {
            failMessage.style.display = "block";
          }
        },
        success: function () {
          var successMessage = document.getElementById("success-message");
          if (successMessage) {
            successMessage.style.display = "block";
          }
        },
      });
    } else {
      errorMessage.style.display = "block";
    }
  });

  [].forEach.call(document.querySelectorAll("#contactPhone"), function (input) {
    var keyCode;
    function mask(event) {
      event.keyCode && (keyCode = event.keyCode);
      var pos = this.selectionStart;
      if (pos < 3) event.preventDefault();
      var matrix = "+7 (___) ___ ____",
        i = 0,
        def = matrix.replace(/\D/g, ""),
        val = this.value.replace(/\D/g, ""),
        new_value = matrix.replace(/[_\d]/g, function (a) {
          return i < val.length ? val.charAt(i++) || def.charAt(i) : a;
        });
      i = new_value.indexOf("_");
      if (i != -1) {
        i < 5 && (i = 3);
        new_value = new_value.slice(0, i);
      }
      var reg = matrix
        .substr(0, this.value.length)
        .replace(/_+/g, function (a) {
          return "\\d{1," + a.length + "}";
        })
        .replace(/[+()]/g, "\\$&");
      reg = new RegExp("^" + reg + "$");
      if (
        !reg.test(this.value) ||
        this.value.length < 5 ||
        (keyCode > 47 && keyCode < 58)
      )
        this.value = new_value;
      if (event.type == "blur" && this.value.length < 5) this.value = "";
    }

    input.addEventListener("input", mask, false);
    input.addEventListener("focus", mask, false);
    input.addEventListener("blur", mask, false);
    input.addEventListener("keydown", mask, false);
  });
});
