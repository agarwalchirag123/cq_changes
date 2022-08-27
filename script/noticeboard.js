let width = window.innerWidth;
const radioButton1 = document.getElementById("slide1");
const radioButton2 = document.getElementById("slide2");
const noticeBoard = document.getElementById("noticeboard-slider");
const img1 = document.getElementById("img1");
const noticeboard_button = document.querySelector("#notice_button1");
const content = document.querySelector(".content");
const otherImgs = document.getElementsByClassName("img-others");
const radioButtons = [radioButton1, radioButton2];
const close = document.querySelectorAll(".close__noticeboard");


const currElement = 0;
let i = currElement;
const noticeBoardAuto = function () {
  radioButtons[i].checked = false;
  i++;
  if (i > 1) {
    i = 0;
  }
  radioButtons[i].checked = true;
};

noticeBoardInterval = setInterval(noticeBoardAuto, 5000);
radioButtons.forEach((radioButton) =>
  radioButton.addEventListener("click", function (e) {
    console.log(e.target);
    i = e.target.dataset.number - 1;
    clearInterval(noticeBoardInterval);
    noticeBoardInterval = setInterval(noticeBoardAuto, 5000);
  })
);
let noticeBoard_visible = true;
const noticeboardToggle = function () {
  noticeBoard.classList.toggle("noticeBoard-fadeout");
  noticeboard_button.classList.toggle("notice_button1");
  
  noticeBoard.classList.toggle("noticeBoard-fadein");
  noticeBoard_visible = !noticeBoard_visible;
  if (
    document.documentElement.scrollTop > 545 &&
    noticeBoard_visible === true
  ) {
    document.documentElement.scrollTop = 0;
    
  }
};
close.forEach((el) => el.addEventListener("click", noticeboardToggle));

setInterval(buttonBlink, 1000);
function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  }
}


