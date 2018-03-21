//console.log("Hoi");
//
let dir = 'DESC';

function sort(){
  //console.log("ja hoor hij doet het");

  let groups = [];

  let list = document.getElementsByClassName("group");

  for (var i = 0; i < list.length; i++){
    groups.push(list[i]);

  }
  console.log(list);

  // sort by title
  groups.sort(function(a, b) {
    var titleA = a.title.toUpperCase(); // ignore upper and lowercase
    var titleB = b.title.toUpperCase(); // ignore upper and lowercase

    if (dir == 'ASC') {
      console.log("ASC if");
      if (titleA < titleB) {
        console.log("ASC if");
        return -1;
      }
      if (titleA > titleB) {
        console.log("ASC if");
        return 1;

      }

    }

    if(dir == 'DESC') {
      console.log("DESC if");

      if (titleB < titleA) {
        return -1;
      }
      if (titleB > titleA) {
        return 1;
      }


    }

      // names must be equal
      return 0;

    });

    let newHtml = "";

    for (let i = 0; i < groups.length; i++) {

      //let x = document.getElementsByClassName("group");
    //  console.log(groups[i]);
      newHtml += groups[i].outerHTML;


    }
    //console.log(newHtml);
  //  console.log(groups);
    document.getElementById("sortSection").innerHTML = newHtml;
    if (dir == "DESC") {
      dir = "ASC";
    }
    else {
      dir = "DESC";
    }
    //groups = [];
    list = [];
    //console.log(dir);
    //console.log(groups);
    //console.log(list);



}
