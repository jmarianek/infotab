async function show_panel() {
    let panelbody = await fetch('panel/index.html');
    let text = await panelbody.text();
    document.write(text)
}
document.createElement