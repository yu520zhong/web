// Define an extended mixed-mode that understands vbscript and
// leaves mustache/handlebars embedded templates in html mode
var mixedMode = {
    name: "htmlmixed",
    scriptTypes: [{
        matches: /\/x-handlebars-template|\/x-mustache/i,
        mode: null
    },
    {
        matches: /(text|application)\/(x-)?vb(a|script)/i,
        mode: "vbscript"
    }]
};
var editor = CodeMirror.fromTextArea(document.getElementById("textareaCode"), {
    mode: mixedMode,
    selectionPointer: true,
    lineNumbers: false,
    matchBrackets: true,
    indentUnit: 4,
    indentWithTabs: true
});

function submitTryit() {
    var text = editor.getValue();
    var patternHtml = /<html[^>]*>((.|[\n\r])*)<\/html>/im
    var patternHead = /<head[^>]*>((.|[\n\r])*)<\/head>/im
    var array_matches_head = patternHead.exec(text);
    var patternBody = /<body[^>]*>((.|[\n\r])*)<\/body>/im;

    var array_matches_body = patternBody.exec(text);
    var basepath_flag = 1;
    var basepath = '';
    if (basepath_flag) {
        basepath = '<base href="//www.runoob.com/try/demo_source/" target="_blank">';
    }
    if (array_matches_head) {
        text = text.replace('<head>', '<head>' + basepath);
    } else if (patternHtml) {
        text = text.replace('<html>', '<head>' + basepath + '</head>');
    } else if (array_matches_body) {
        text = text.replace('<body>', '<body>' + basepath);
    } else {
        text = basepath + text;
    }
    var ifr = document.createElement("iframe");
    ifr.setAttribute("frameborder", "0");
    ifr.setAttribute("id", "iframeResult");
    document.getElementById("iframewrapper").innerHTML = "";
    document.getElementById("iframewrapper").appendChild(ifr);

    var ifrw = (ifr.contentWindow) ? ifr.contentWindow: (ifr.contentDocument.document) ? ifr.contentDocument.document: ifr.contentDocument;
    ifrw.document.open();
    ifrw.document.write(text);
    ifrw.document.close();
}
submitTryit();