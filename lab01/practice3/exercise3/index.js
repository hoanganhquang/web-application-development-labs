// const res = document.querySelector("#res");
// const main = document.getElementById("main");
// const equal = document.getElementById("equal");

$(document).ready(function(){
  $("#main").click(function(e){
    if (e.target.classList.contains("num")) {
      const num = e.target.value;
      $("#res").val($("#res").val() + num);
    }
  
    if (e.target.classList.contains("clear")) {
      $("#res").val() = "";
    }
  })

  $("#equal").click(function(){
    $("#res").val(eval($("#res").val()));
  })
})

