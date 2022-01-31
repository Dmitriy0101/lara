const s = document.querySelector('[data-search-block]');
s.onclick = function (e) {
    var element = document.querySelector('[data-search-block1]');
        element.classList.toggle('active');
}

function getData() {
    // URL на который будем отправлять POST запрос
    const requestURL = '/search';
    const xhr = new XMLHttpRequest();
    xhr.open('POST', requestURL);
    xhr.onload = () => {
        if (xhr.status !== 200) {
            return;
        }
        document.querySelector('#result').innerHTML = xhr.response;
    }
    xhr.send();
}

// при нажатию на кнопку поиска
document.querySelector('#get').addEventListener('click', () => {
    const inp = document.querySelector('[data-search-input]').value;
    if (inp.length < 3) {
        var sum = Number(3) - Number(inp.length);
        sum = 'Вы ввели слишком мало символов введите на ' + sum + ' больше';
        window.alert(sum);
    } else if (inp.length >= 3) {
        getData(sum);
        var elem = document.querySelector('.search__info')
        elem.classList.toggle('none');
    }

});
// при нажатию на кнопку выход
const out = document.querySelector('[data-search-button]');
out.onclick = function (e) {
    var elem = document.querySelector('[data-search-block1]')
        elem.classList.toggle('active');

}
