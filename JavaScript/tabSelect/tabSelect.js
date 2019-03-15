window.onload = function () {
    /*获取标签*/
    var allList = $('tab_header').getElementsByTagName('li')
    var allDom = $('tab_content').getElementsByClassName('dom');
    // console.log(allList);
    console.log(allDom);

    /*遍历监听*/
    for (var i=0;i<allList.length;i++){
        var list=allList[i]
        list.index=i;
        list.onmouseover=function () {
            for (var j=0;j<allList.length;j++){
                allList[j].className='';
                allDom[j].style.display='none'
            }
            this.className='selected';
            for (var k=0;k<allDom.length;k++){

            }
            allDom[this.index].style.display='block';

        }
    }

}

function $(id) {
    return typeof id === "string" ? document.getElementById(id) : null;

}