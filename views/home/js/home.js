$(document).ready(function () {
  const URLBASE = "http://localhost/StageApp/"
  $(document).on('click', '#button', function () {
    var nom = $('#nom').val();
    if (nom == "") {
      alert('entrer les nom');
    } else {
      $.ajax({
        url: `${URLBASE}/home`,
        method: 'post',
        data: { nom: nom },
        success: function (data) {
          if (data) {
            load("inscription_special.php")
          }
        }
      })
    }
  })

  

})
