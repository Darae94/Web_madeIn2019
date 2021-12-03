const body = document.querySelector("body");

const IMG_NUMBER = 4;

function handleImgLoad() {
    console.log("finished loading");
}

function paintImage(imgNumber) {
    const image = new Image();
    image.src = `images/${imgNumber + 1}.jpg`;
    image.classList.add("bgImage");
    body.appendChild(image);        //이미지를 추가된거 확인!
    // body.addEventListener("loadend", handleImgLoad); 로컬아닌 경우 가능!
}
function genRandom() {
    const number = Math.floor(Math.random() * IMG_NUMBER);
    return number;
}

function init(){
    const randomNumber = genRandom();
    paintImage(randomNumber);
}

init();