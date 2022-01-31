const authorization = document.querySelector('[data-onclick]');
const back = document.querySelector('[data-back]');

authorization.onclick = function (e) {
    var elem = document.querySelector('[data-onclick]');
    if (elem.classList.contains("button-dis")) {
        elem.classList.remove("button-dis");
    } else {
        elem.classList.add("button-dis");
    }
    var element = document.querySelector('[data-onclick-content]');
    if (element.classList.contains("button-show__block")) {
        element.classList.remove("button-show__block");
    } else {
        element.classList.add("button-show__block");
    }
}

back.onclick = function (e) {
    var element = document.querySelector('[data-onclick]');
    (element.classList.remove("button-dis"))
    var el = document.querySelector('[data-onclick-content]');
    (el.classList.remove("button-show__block"))
}
