const copyText = document.querySelector(".copy-text");
copyText.querySelector("button").addEventListener("click", function(){
    let input = copyText.querySelector("input.text");
    input.ariaSelected();
    Document.execCommand("copy");
    copyText.classList.add("active");
    Window.getSelection().removeAllRanges();
    setTimeout(function(){
        copyText.classList.remove("active");
    }, 2500)
})