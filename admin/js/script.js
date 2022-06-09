function copyText(){
    document.querySelectorAll('button[data-type="copy"]')
        .forEach(function(button){
            button.addEventListener('click', function(){
                let text = this.parentNode.parentNode
                .querySelector('td[data-type="text"]')
                .innerText;
                
                let tmp = document.createElement('textarea');
                    tmp.value = text;
                    tmp.setAttribute('readonly', '');
                    tmp.style.position = 'absolute';
                    tmp.style.left = '-9999px';
                    document.body.appendChild(tmp);
                    tmp.select();
                    document.execCommand('copy');
                    document.body.removeChild(tmp);
                    document.querySelector('button[data-type="copy"]').classList.add('active');
                    window.getSelection().removeAllRanges();
                    setTimeout(()=>{
                        document.querySelector('button[data-type="copy"]').classList.remove('active');
                    }, 2500);
                    console.log(`${text} copied.`);
                    //alert("Đã Copy");
        });
        });
}
