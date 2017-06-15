var l_files;
var r_files;

$(document).ready(function() {
    $('#diff').mergely({
        cmsettings: { mode: 'javascript',readOnly: false, lineNumbers: true },
        lhs: function(setValue) {
            setValue('Welcome to my blog, \nand we hope that we can become friends.');
        },
        rhs: function(setValue) {
            setValue('welcome to my blog, \nand we am so happy you can come.');
        }
    });
});

function leftFileSelect(files) {
    l_files = files;
    setLeft(l_files);
}

function rightFileSelect(files) {
    r_files = files;
    setRight(r_files);
}

function setRight(files) {
    f = files[0];
    var reader = new FileReader();
    reader.onload = (function(file) {
        return function(e) {
            $('#diff').mergely("rhs", this.result);
        };
    })(f);
    reader.readAsText(f, $('#r_encode').val());
}

function setLeft(files) {
    f = files[0];
    var f_name = f.name;
    var f_type = f_name.substring(f_name.lastIndexOf("."));
    switch (f_type) {
        case ".js":
            setRender("javascript/javascript.js");
            break;
        case ".css":
            setRender("css/css.js");
            break;
        case ".php":
            setRender("php/php.js");
            break;
        case ".xml":
            setRender("xml/xml.js");
            break;
        case ".html":
            setRender("htmlembedded/htmlembedded.js");
            break;
        case ".vue":
            setRender("vue/vue.js");
            break;
        case ".sass":
            setRender("less/sass.js");
            break;
        case ".sql":
            setRender("plsql/plsql.js");
            break;
            defualt: setRender("jsx/jsx.js");
    }
    var reader = new FileReader();
    reader.onload = (function(file) {
        return function(e) {
            $('#diff').mergely("lhs", this.result);
        };
    })(f);
    reader.readAsText(f, $('#l_encode').val());
}

function setLeftCode() {
    if (null != l_files)
        setLeft(l_files);
}

function setRightCode() {
    if (null != r_files)
        setRight(r_files);
}

function setRender(type) {
    var base_src= ThinkPHP['PLUGINS'] +  "/mergelyDiff/mode/";
    $(".render_js").attr("src",base_src+type);
}
