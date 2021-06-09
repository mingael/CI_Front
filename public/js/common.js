/*
window.addEventListener("DOMContentLoaded", function () {
    codeblock();
});
*/

// input 유효성 검사
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

// 엔터
function enter(next)
{
    if(window.event.keyCode == 13)
    {
        if(next == "end")
        {
            sendit();
        }
        else
        {
            next.focus();
        }
    }
}