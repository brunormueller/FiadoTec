$(document).ready(function () {
  $(document).on("click", "#enviar_Login", function () {
    var retorno = ValidarForm();
    if (retorno == "") {
      var dados = $("#loginForm_id").serialize();
      jQuery.ajax({
        type: "POST",
        url: "verificaLogin.php",
        data: dados,
        success: function (data) {
          var exp = data.split("_?_");

          var status = exp[0];
          var mensagem = exp[1];

          if (status == 1) {
            $("#loginForm_id").empty();
            $("#loginForm_id").html(
              '<img class="btn-load" style="width: 250px; height: 250px;" src="../../img/aguarde.gif" />'
            );
            setTimeout(() => {
              location.href = "../home.php";
              
    ////////////////////load-normal//////////////////////////////////////
              // $(".btn-load").empty();
            //$(".btn-load").html(
            //  '<img class="btn-load" style="width: 250px; height: 250px;" src="../../img/aguarde.gif" />'
           // );
////////////////////////////////////////////////////////////////////////////
            }, 2000);
            
          } else {
            Swal.fire({
              icon: "error",
              html: mensagem,
            });
          }

          return false;
        },
      });
    } else {
      var campo_retorno = retorno;
      $("#" + campo_retorno).focus();
      return false;
    }

    return false;
  });
  return false;
});
function ValidarForm() {
  var forms = document.getElementsByClassName("needs-validation");
  let obrigatorios = true;
  var campo = "";

  $(".obrigatorios").each(function () {
    if ($(this).val() == "") {
      if (campo == "") {
        campo = $(this).attr("id");
      }
      obrigatorios = false;
      return;
    }
  });
  var validation = Array.prototype.filter.call(forms, function (form) {
    form.classList.add("was-validated");
  });

  return campo;
}

