const draggable_list = document.getElementById('draggable-list');
const check = document.getElementById('check');

// Store listitems
const listItems = [];

var input = document.getElementById("files");

let dragStartIndex;

let formData = new FormData();

var lisofFiles = [];

let hiddenArray = document.getElementById('hideArray').value;

let posN = document.getElementsByName('postNumber')[0].value;



//console.log("Post number" + posN);



let hidden_arr = hiddenArray.split(',');
if(hidden_arr == ""){
  hidden_arr = 0;
}

//console.log(hidden_arr);

createArray();

function createArray(){


  //Create an array of each file the was picked, appends to the array on each upload click

  for (var i = 0; i < hidden_arr.length; i++) {
    //Ensures no duplicates
    if(lisofFiles.includes(hidden_arr[i]) == false){
      lisofFiles.push(hidden_arr[i])
    }
  }

  for (var i = 0; i < input.files.length; i++) {
    //Ensures no duplicates
    if(lisofFiles.includes(input.files[i].name) == false){
      lisofFiles.push(input.files[i].name)
    }else{
      console.log("Error duplicate file name");

    }
  }

  console.log(lisofFiles);
  //Create the visual list
  createList();
}

// Insert list items into DOM
function createList() {
  //Clear draggable list
  while(draggable_list.firstChild){
    draggable_list.removeChild(draggable_list.firstChild);
  }

  //Length of the number of files in the created array
  let leng = lisofFiles.length;

  while(listItems.length > 0) {
    listItems.pop();
  }

  //For each file that is in the lisofFiles array
  for (var i = 0; i < leng; i++) {
      const listItem = document.createElement('li');

      listItem.setAttribute('data-index', i);

      //File names that is in each row
      fies = lisofFiles[i];

      //Creates the individual sections in the list comprision of numner, data, and grip lines
        listItem.innerHTML = `
        <span class="number">${i + 1}</span>
        <div class="draggable" draggable="true">
          <p name="fnme" class="nme" >${fies}</p>
          <i class="fas fa-grip-lines"></i>
          <button class="Trashbttn" onclick="trash(`+i+`)">
            <i class="fa fa-trash"></i>
          </button>
        </div>
        `

      //Adds each individual item to the list
      listItems.push(listItem);
      
      //Adds li elemts to ul list 
      draggable_list.appendChild(listItem);

      //Uploads files to temporary folder on server
      formData.append("files", input.files[i]);
      fetch('/process.php', {
        method: 'POST',
        body: formData,
      }).then((response) => {
        //console.log(response)
      });

  }
  
  addEventListeners();
}

function trash(d) {
  // console.log('Event: ', 'dragstart');
  alert('Trash ' + d);
  var de = draggable_list.removeChild(draggable_list.childNodes[d]);
  //var deleted = listItems.splice(d, 1);
  //alert(deleted);
  //console.log(document.getElementsByName("fnme")[d].innerHTML);
  var deleted = de.querySelector('p').innerHTML

  for( var i = 0; i < lisofFiles.length; i++){ 
    
    if ( lisofFiles[i] == deleted) { 

      lisofFiles.splice(i, 1); 
    }

  
  }

  var fileInput = document.getElementById('files');

  //Delete listview array

      //Deletes file
      formData.append("text", deleted);
      formData.append("order", hiddenArray)
      formData.append("postN", posN)

      fetch('/del.php', {
        method: 'POST',
        body: formData,
      }).then((response) => {
        //console.log(response)
      });

  //console.log(deleted);

    //Clear draggable list
  while(draggable_list.firstChild){
    draggable_list.removeChild(draggable_list.firstChild);
  }
  createList();
  checkOrder();
  fileInput.value = '';


}

function dragStart() {
  // console.log('Event: ', 'dragstart');
  dragStartIndex = +this.closest('li').getAttribute('data-index');
}

function dragEnter() {
  // console.log('Event: ', 'dragenter');
  this.classList.add('over');
}

function dragLeave() {
  // console.log('Event: ', 'dragleave');
  this.classList.remove('over');
}

function dragOver(e) {
  // console.log('Event: ', 'dragover');
  e.preventDefault();
}

function dragDrop() {
  // console.log('Event: ', 'drop');
  const dragEndIndex = +this.getAttribute('data-index');
  swapItems(dragStartIndex, dragEndIndex);

  this.classList.remove('over');
  checkOrder();
  //lisofFiles aaray gets changed to match 
  var arr_change = []
  listItems.forEach((listItem, i) => {
    const mediaName = listItem.querySelector('.draggable').innerText.trim();

    //Create an array of the uploaded media in the ordered sorted
    arr_change.push(mediaName)

  });
  //console.log("lisofFiles " + lisofFiles)
  console.log(typeof(arr_change));
  lisofFiles = arr_change;
  createArray();
}

// Swap list items that are drag and drop
function swapItems(fromIndex, toIndex) {
  const itemOne = listItems[fromIndex].querySelector('.draggable');
  const itemTwo = listItems[toIndex].querySelector('.draggable');

  listItems[fromIndex].appendChild(itemTwo);
  listItems[toIndex].appendChild(itemOne);
}


// Check the order of list items
function checkOrder() {

  hiddenArray = document.getElementById('hideArray');
  hiddenArray.value = "";
  arrayofUploads = []

  listItems.forEach((listItem, i) => {
    const mediaName = listItem.querySelector('.draggable').innerText.trim();

    //Create an array of the uploaded media in the ordered sorted
    arrayofUploads.push(mediaName)

  });
  //console.log(arrayofUploads);
  
  hiddenArray.value = arrayofUploads;
  

}

function addEventListeners() {
  const draggables = document.querySelectorAll('.draggable');
  const dragListItems = document.querySelectorAll('.draggable-list li');

  draggables.forEach(draggable => {
    draggable.addEventListener('dragstart', dragStart);
  });

  dragListItems.forEach(item => {
    item.addEventListener('dragover', dragOver);
    item.addEventListener('drop', dragDrop);
    item.addEventListener('dragenter', dragEnter);
    item.addEventListener('dragleave', dragLeave);
  });
}

check.addEventListener('click', checkOrder);
