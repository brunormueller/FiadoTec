$('.cpf_cnpj').blur(function () {
    let elemento = $(this);
    let valor = elemento.val();

    setTimeout(() => {
        let validarDocumento = true;

        if (validarDocumento) {
            let valido = validarValor(valor);
    
            if (valido)
            {
                valido = validaCPF(valor) || validarCNPJ(valor);
            }
    
            if (!valido && valor != '') {
                elemento.val('Valor Inválido');
    
                let element = elemento[0];
    
                element.style.backgroundColor = '#ffcccb';

                setTimeout(() => {
                    elemento.val('');
                    element.style.backgroundColor = '#fff';
                }, 1500);
            }
        }
    }, 100);
});

function validarValor(valor)
{
	let strValor = valor.replace(/[^\d]+/g, '');
	let arrValor = Array.from(strValor);
	let tamanho = arrValor.length;

	if (tamanho <= 0)
		return false;

	let valido = false;

	for (let index = 0; index < tamanho; index++) {
		let valorAtual = arrValor[index];

		if (valorAtual != arrValor[0])
		{
			valido = true;
		}
	}

	return valido;
}

function validaCPF(strCPF) {
	strCPF = strCPF.replace(/[^\d]+/g, '');

	var Soma;
	var Resto;
	Soma = 0;
	if (strCPF == "00000000000") return false;

	for (i = 1; i <= 9; i++) Soma = Soma + parseInt(strCPF.substring(i - 1, i)) * (11 - i);
	Resto = (Soma * 10) % 11;

	if ((Resto == 10) || (Resto == 11)) Resto = 0;
	if (Resto != parseInt(strCPF.substring(9, 10))) return false;

	Soma = 0;
	for (i = 1; i <= 10; i++) Soma = Soma + parseInt(strCPF.substring(i - 1, i)) * (12 - i);
	Resto = (Soma * 10) % 11;

	if ((Resto == 10) || (Resto == 11)) Resto = 0;
	if (Resto != parseInt(strCPF.substring(10, 11))) return false;
	return true;
}

function validarCNPJ(cnpj) {

	cnpj = cnpj.replace(/[^\d]+/g, '');

	if (cnpj == '') return false;

	if (cnpj.length != 14)
		return false;

	// Elimina CNPJs invalidos conhecidos
	if (cnpj == "00000000000000" ||
		cnpj == "11111111111111" ||
		cnpj == "22222222222222" ||
		cnpj == "33333333333333" ||
		cnpj == "44444444444444" ||
		cnpj == "55555555555555" ||
		cnpj == "66666666666666" ||
		cnpj == "77777777777777" ||
		cnpj == "88888888888888" ||
		cnpj == "99999999999999")
		return false;

	// Valida DVs
	tamanho = cnpj.length - 2
	numeros = cnpj.substring(0, tamanho);
	digitos = cnpj.substring(tamanho);
	soma = 0;
	pos = tamanho - 7;
	for (i = tamanho; i >= 1; i--) {
		soma += numeros.charAt(tamanho - i) * pos--;
		if (pos < 2)
			pos = 9;
	}
	resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
	if (resultado != digitos.charAt(0))
		return false;

	tamanho = tamanho + 1;
	numeros = cnpj.substring(0, tamanho);
	soma = 0;
	pos = tamanho - 7;
	for (i = tamanho; i >= 1; i--) {
		soma += numeros.charAt(tamanho - i) * pos--;
		if (pos < 2)
			pos = 9;
	}
	resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
	if (resultado != digitos.charAt(1))
		return false;

	return true;

}