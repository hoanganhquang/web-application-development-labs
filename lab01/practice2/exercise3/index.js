const res = document.querySelector("#res");
const main = document.getElementById("main");
const equal = document.getElementById("equal");

main.addEventListener("click", (e) => {
  if (e.target.classList.contains("num")) {
    const num = e.target.value;
    res.value += num;
  }

  if (e.target.classList.contains("clear")) {
    res.value = "";
  }
});

equal.addEventListener("click", () => {
  const result = eval(res.value);
  res.value = result;
});
