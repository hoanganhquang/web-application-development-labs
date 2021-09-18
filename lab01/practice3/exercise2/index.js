// const vowel = document.querySelector("#vowel");
// const btnFind = document.querySelector("#find");
// const number = document.querySelector("#number");
// const btnReverse = document.querySelector("#reverse");

$(document).ready(function () {
  $("#find").click(function () {
    const arr = ["a", "i", "e", "o", "u"];
    let input = $("#vowel").val();
    let n = 0;

    for (const i of input) {
      for (const j of arr) {
        if (i === j) {
          alert(
            `Left most vowel of hello is at location ${input.indexOf(i) + 1}`
          );
          n = 1;
          break;
        }
      }

      if (n === 1) {
        break;
      }
    }

    if (n === 0) {
      alert("No data found");
    }
  });

  $("#reverse").click(function () {
    const input = $("#number").val();
    if (Number(input)) {
      const inputReverse = input.split("").reverse().join("");

      alert(`Reverse of num ${input} is ${inputReverse}`);
    } else {
      alert("Data must be numeric");
    }
  });
});
