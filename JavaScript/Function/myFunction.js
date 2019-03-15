/**
 *
 * 获取浏览器 头部距离 和 左边距离
 * 用法：scroll().top
 *      scroll().left
 * @returns {{top: number, left: number}}
 */
function scroll() {
    if (window.pageYOffset !== null) {
        return {
            "top": window.pageYOffset,
            "left": window.pageXOffset
        }
    } else if (document.compatMode == 'CSS1Compat') {
        return {
            top: document.documentElement.scrollTop,
            left: document.documentElement.scrollLeft
        }
    } else {
        return {
            top: document.body.scrollTop,
            left: document.body.scrollLeft
        }
    }

}

/**
 *
 * ID获取对象
 * @param id
 * @returns {any}
 */
function $(id) {
    return typeof id === "string" ? document.getElementById(id) : null;
}

/**
 * OBJ  style.display 显示
 * @param obj
 * @returns {string}
 */
function styleShow(obj) {
    return obj.style.display = 'block'
}

function styleHide(obj) {
    return obj.style.display = 'none'
}

/**
 *
 * 获取屏幕 宽度和高度
 * @returns {{width: number, height: number}}
 */
function client() {
    if (window.innerWidth !== null) {
        return {
            width: window.innerWidth,
            height: window.innerHeight
        }
    } else if (document.compatMode === "CSS1Compat") {
        return {
            width: document.documentElement.clientWidth,
            height:document.documentElement.clientHeight
        }
    }else{
        return {
            width:document.body.clientWidth,
            height:document.body.clientHeight
        }
    }

}

