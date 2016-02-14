function markdownEditorChanged() {
 var editor = document.getElementById("markdown");
 if (tinyMCE.activeEditor) {
  tinyMCE.activeEditor.setContent(marked(editor.value));
 }
}

function previewMarkdown() {
 var editor = document.getElementById("markdown");
 myWindow=window.open('','','width=200,height=100')
 myWindow.document.write("This is 'myWindow'")
 myWindow.focus()
 myWindow.opener.document.write("This is the parent window")
}
