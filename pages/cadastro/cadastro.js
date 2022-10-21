$(document).ready(function () {
  $(document).on("click", "#enviar_cadastro", function () {
    var retorno = ValidarForm();
    if (retorno == "") {
      var dados = $("#cadastroForm_id").serialize();
      jQuery.ajax({
        type: "POST",
        url: "incluiCadastro.php",
        data: dados,
        success: function (data) {
          var exp = data.split("_?_");

          var status = exp[0];
          var mensagem = exp[1];

          if (status == 1) {
            Swal.fire({
              //title: "Logado com sucesso!",
              icon: "success",
              html: mensagem,
            }).then(() => {
              location.href = "../login/login.php";
            });
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

////////// MASCARA FONE
var behavior = function (val) {
    return val.replace(/\D/g, "").length === 11
      ? "(00) 00000-0000"
      : "(00) 0000-00009";
  },
  options = {
    onKeyPress: function (val, e, field, options) {
      field.mask(behavior.apply({}, arguments), options);
    },
  };

$(".phone").mask(behavior, options);


///////////////////MASCARA CPF/CNPJ
var setCpfCnpjFormat = (el) => {
	var masks = ['000.000.000-000', '00.000.000/0000-00'];

	var val = el.val();

	var valn = val.replaceAll('.', '').replaceAll('-', '').replaceAll('/', '');

	// el.unmask();
	el.mask((valn.length > 11) ? masks[1] : masks[0], {
		onKeyPress: function (cpf, ev, el, op) {
			setCpfCnpjFormat(el);
			return false;
		}
	});
};

$('.cpfCnpj').each(function () {
	var el = $(this);
	setCpfCnpjFormat(el);
});

var options2 = {
	onKeyPress: function (cpf, ev, el, op) {
		$('.formatCnpj').mask('00.000.000/0000-00');
		return false;
	}
}

$('.formatCnpj').mask('00.000.000/0000-00', options2)