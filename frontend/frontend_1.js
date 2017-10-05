//Frontend 1. task solution
var input=[{'1': ['4', 'Lorem ipsum']},{'3': ['2', 'Lorem ipsum']}];

var output = new Array();

function createJson() {
  
for(var i in input) {
  var object = input[i];
  
  for(var j in object){
        var sub_key = j;
        var sub_val = object[j];
       
        var jsonObject = new Object();
        jsonObject.question_id = sub_key;
        jsonObject.answer_value = sub_val[0];
        jsonObject.comments = sub_val[1];
        output.push(jsonObject);
  }
}
  
  console.log(output);
}

createJson();