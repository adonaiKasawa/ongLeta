$(document).ready(function () {
  const URLBASE = "http://localhost/StageApp/";

  //create cours 
  $(function () {
    $.validator.setDefaults({
      submitHandler: function () {
        $(document).on('submit', '#button', function (e) {
          e.preventDefault();
        });
        $yourUsername = $("#yourUsername").val();
        $yourPassword = $("#yourPassword").val();
        $.ajax({
          url: URLBASE + "authatication/handleAuthUser",
          method: "POST",
          data: {
            pseudo: $yourUsername,
            pass: $yourPassword,
            action: "qwdfzx53sad4fgs6d5se4r65r3dcs4d85"
          },
          success: function (data) {
            alert(data);
            console.log(data);
            switch (data) {
              case 400:
                
                break;
              case 401:

                break;
              case 200:

                break;
              case 500:

                break;
              default:
                break;
            }
          }, error: async function (e) {
            console.log(e);
          }
        });

      }
    });

    $('.needs-validation').validate
      ({
        rules: {
          username:
          {
            required: true
          },
          password:
          {
            required: true
          },
        },
        messages: {
          username: {
            required: "Veuillez saisir le nom d'utilisateur s'il vous plait !"
          },
          password: {
            required: "Veuillez saisir le mot de paase s'il vous plait !"
          },
        },
        errorElement: 'span',
        errorPlacement: function (error, element) {
          error.addClass('invalid-feedback');
          element.closest('.form-group').append(error);
        },
        highlight: function (element, errorClass, validClass) {
          $(element).addClass('is-invalid');
        },
        unhighlight: function (element, errorClass, validClass) {
          $(element).removeClass('is-invalid');
        }
      });
  });
});

