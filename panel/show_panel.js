async function show_panel() {
    let panelbody = await fetch('panel/index.html');
    let text = await panelbody.text();
    document.write(text)
}
  // CORS ok
  async function parseXML()
  {
    let rss = await fetch('panel/xml/getrss.php');
    let text = await rss.text();
    //console.log(xml);
    // parser xml
    parser = new DOMParser();
    xml = parser.parseFromString(text, "text/xml");
    
    let items = xml.getElementsByTagName("item");
    for (i = 0; i < items.length & i<4; i++) {
      let item = items[i];
      //console.log(item.innerHTML);
      //console.log(item);
      
      let novinka = (item.getElementsByTagName("title")[0].firstChild.data);
      let div = document.createElement("div");
      let text = document.createTextNode(novinka);
      div.appendChild(text);
      document.getElementById("udalosti").appendChild(div);

      

    }
    
    

  }
parseXML()