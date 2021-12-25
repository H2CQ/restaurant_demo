function copy_url(){
    const el = document.createElement('textarea');
    el.value = "http://lollipapa.co/";
    document.body.appendChild(el);
    el.select();
    document.execCommand('copy');
    document.body.removeChild(el);
    alert("已複製網站連結，歡迎分享");
}