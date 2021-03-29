function isEmpty(input, text)
{
	if(!input.value)
	{
		input.focus();
		alert(text);

		return true;
	}
	else
	{
		return false;
	}
}