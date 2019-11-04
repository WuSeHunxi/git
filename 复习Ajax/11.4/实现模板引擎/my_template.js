
// 模板引擎的封装

function my_template(id, data) {
    var str = document.querySelector('#' + id).innerHTML;
    var reg = /{{(\w)}}/;
    var result = reg.exec(str);
    while (result) {
        str = str.replace(result[0], data[result[1]]);
        result = reg.exec(str);
    }
    return str;
}