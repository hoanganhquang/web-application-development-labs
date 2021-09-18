// const tr = document.querySelector(".tr");
// const tbody = document.querySelector(".tbody");

$(document).ready(function () {
  let range = prompt("Enter the range (Ex: 1-10, 2-7)", "1-10");

  range = range.split("-").map((value) => {
    return parseInt(value);
  });

  for (let i = range[0]; i <= range[1]; i++) {
    const square = Math.pow(i, 2);
    const cube = Math.pow(i, 3);
    const html = `
    <tr>
        <td>${i}</td>
        <td>${square}</td>
        <td>${cube}</td>
    </tr>
    `;
    $(".tbody").append(html);
  }
});
