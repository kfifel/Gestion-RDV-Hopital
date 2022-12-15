function show_modal(e)
{
    let element =e;
    document.querySelector('#'+element).removeAttribute("style");
}
function hide_modal(e)
{
    let element =e;
    document.querySelector('#'+element).setAttribute("style","display:none;");
}

