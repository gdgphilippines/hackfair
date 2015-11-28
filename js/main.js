function formatCurrencyInput(inputBox) {
	inputBox.value = formatCurrency(inputBox.value);
}

function formatCurrency(num) {
	if(!num) {
		return "0.00";
	}
	
	num = convertCurrencyToNumber(num);
	sign = (num == (num = Math.abs(num)));
	num = Math.floor(num * 100 + 0.50000000001);
	cents = num % 100;
	num = Math.floor(num / 100).toString();
	if (cents < 10)
		cents = "0" + cents;
	for (var i = 0; i < Math.floor((num.length - (1 + i)) / 3); i++)
		num = num.substring(0, num.length - (4 * i + 3)) + ','
				+ num.substring(num.length - (4 * i + 3));
	return (((sign) ? '' : '-') + num + '.' + cents);
}

function convertCurrencyToNumber(currency) {
	var formattedCurrency = currency.toString().replace(/\$|\,| /g, '');
	if (isNaN(formattedCurrency)) {
		formattedCurrency = "0";
	}
	return formattedCurrency;
}

function formatTextAsDecimal(text) {
	return parseFloat(convertCurrencyToNumber(text)) || 0;
}
