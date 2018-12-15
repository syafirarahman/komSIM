var i=1;
function newButton() {
      var div1 = document.createElement('div');
      var div2 = document.createElement('div');
      var div3 = document.createElement('div');
      var button = document.createElement('a');
      var my_loc = "admin/aktifitas";
      div1.id="div1"+i;
      div2.id="div2"+i;
      div3.id="div3"+i;
    button.setAttribute("href",my_loc);
    button.innerHTML = '<i class="fa fa-fw fa-folder">{}</i> Kegiatan '+i; // kata yang ditampilkan
    button.id="buttonNew"+i;
  console.log(i); 
  document.getElementById("kegiatan").appendChild(div1);
  document.getElementById("div1"+i).setAttribute("class", "col-md-3"); 
  document.getElementById("div1"+i).appendChild(div2);
  document.getElementById("div2"+i).setAttribute("class", "box box-primary");
  document.getElementById("div2"+i).appendChild(div3);
  document.getElementById("div3"+i).appendChild(button);
  document.getElementById("buttonNew"+i).setAttribute("class", "btn btn-block btn-default btn-lg");
  i=i+1;
    }
    