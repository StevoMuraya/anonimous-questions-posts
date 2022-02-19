const section = document.getElementById("counter_section");
window.onscroll = function () {
  fun_calculate();
};
if (checkVisible(section)) {
  const counters = document.querySelectorAll(".count");
  const speed = 200;

  counters.forEach((counter) => {
    const updateCount = () => {
      const target = parseInt(counter.getAttribute("data-target"));
      const count = parseInt(counter.innerText);
      let increment = 1;
      if (target > 200) {
        increment = Math.trunc(target / speed);
      }

      if (count < target) {
        counter.innerText = count + increment;
        setTimeout(updateCount, 1);
      } else {
        counter.innerText = target + "+";
      }
    };
    //   updateCount();
  });
}

function fun_calculate() {
  if (window.pageYOffset > section) {
    checkVisible(section);
  } else {
    console.log("not yet");
  }
}

function checkVisible(elm) {
  var rect = elm.getBoundingClientRect();
  var viewHeight = Math.max(
    document.documentElement.clientHeight,
    window.innerHeight
  );
  console.log(!(rect.bottom < 0 || rect.top - viewHeight >= 0));
}
