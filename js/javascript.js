//==============================================================================
function showList(str, typeSearch){
  console.log(typeSearch);
  if (str == ""){
    if (window.XMLHttpRequest) {

    } else {
      //Maak code voor IE6 & IE5
    }
    xmlhttp.onreadystatechange = function(){
      if (this.readyState == 4 && this.status == 200) {
     document.getElementById("display").innerHTML = this.responseText;
    }
  }
};
//==============================================================================
function printArray(arr){};
//==============================================================================
function parseArray(result){};
//==============================================================================
