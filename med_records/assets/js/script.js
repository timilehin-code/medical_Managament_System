// login form validation
// const email = document.querySelector('#email');
// const password = document.querySelector('#password');
// const msg = document.querySelector('.msg');
// const msg2 = document.querySelector('.msg2');
// const log = document.querySelector('.log');
// const login = document.querySelector('.login');

// login.addEventListener('click', (e) => {
//     e.preventDefault();
//     if (email.value === "") {
//         email.style.border = "2px solid #ff0000";
//         msg.innerHTML = "email can't be empty";
//         setTimeout(() => {
//             msg.remove();
//         }, 2500);
//     } else if (password.value === "") {
//         password.style.border = "2px solid #ff0000";
//         msg2.innerHTML = "Password can't be empty";
//         setTimeout(() => {
//             msg2.remove();
//         }, 2500);
//     }
// });

// form tabs 
// 

// dashboard side bar adjust
const hambuger = document.querySelector('.fa-bars');
const mainSideNav = document.querySelector('.side-nav')
const smallSideNav = document.querySelector('.mini-side-nav')
const mainDash = document.querySelector('.main-dash');
hambuger.addEventListener('click', () => {
    mainSideNav.classList.toggle('active');
    smallSideNav.classList.toggle('active');
    mainDash.classList.toggle('lage-main-dash')
});

const pBtn = document.querySelector(".p-btn");
const cBtn = document.querySelector(".c-btn");
const bBtn = document.querySelector(".b-btn");
const mBtn = document.querySelector(".m-btn");
const caBtn = document.querySelector(".ca-btn");
const process = document.querySelector(".process");
const com = document.querySelector(".com");
const boo = document.querySelector(".boo");
const miss = document.querySelector(".miss");
const can = document.querySelector(".can");
// const rBtn = document.querySelector(".r-btn");
pBtn.addEventListener("click", ()=>{
    pBtn.classList.add("current");
    cBtn.classList.remove("current");
    bBtn.classList.remove("current");
    mBtn.classList.remove("current");
    caBtn.classList.remove("current");
    process.classList.remove("hide");  
    com.classList.add("hide");  
    boo.classList.add("hide");  
    miss.classList.add("hide");  
    can.classList.add("hide");  
})

cBtn.addEventListener("click", ()=>{
    pBtn.classList.remove("current");
    cBtn.classList.add("current");
    bBtn.classList.remove("current");
    mBtn.classList.remove("current");
    caBtn.classList.remove("current");
    com.classList.remove("hide");  
    process.classList.add("hide");  
    boo.classList.add("hide");  
    miss.classList.add("hide");  
    can.classList.add("hide");  
})

bBtn.addEventListener("click", ()=>{
    pBtn.classList.remove("current");
    cBtn.classList.remove("current");
    bBtn.classList.add("current");
    mBtn.classList.remove("current");
    caBtn.classList.remove("current");
    boo.classList.remove("hide");  
    com.classList.add("hide");  
    process.classList.add("hide");
    miss.classList.add("hide");  
    can.classList.add("hide");  
   
})

mBtn.addEventListener("click", ()=>{
    pBtn.classList.remove("current");
    cBtn.classList.remove("current");
    bBtn.classList.remove("current");
    mBtn.classList.add("current");
    caBtn.classList.remove("current");
    miss.classList.remove("hide");  
    can.classList.add("hide");  
    boo.classList.add("hide");  
    com.classList.add("hide");  
    process.classList.add("hide");
})

caBtn.addEventListener("click", ()=>{
    pBtn.classList.remove("current");
    cBtn.classList.remove("current");
    bBtn.classList.remove("current");
    mBtn.classList.remove("current");
    caBtn.classList.add("current");
    can.classList.remove("hide");      
    miss.classList.add("hide");  
    boo.classList.add("hide");  
    com.classList.add("hide");  
    process.classList.add("hide");
})


// open add  history modal
const historyBtn = document.querySelector('.history');
const historyBg = document.querySelector('.history-bg');
const historyForm = document.querySelector('.h-form');
historyBtn.addEventListener('click', () => {
    historyBg.classList.add('showH');
    historyForm.classList.add('showHF');
}, false)

// close add history modal
const closeH = document.querySelector('.close');
closeH.addEventListener('click', () => {
    historyBg.classList.remove('showH');
    historyForm.classList.remove('showHF');
}, false)

// appointment modal
const book = document.querySelector('.book');
const appointment = document.querySelector('.appointment-modal');
const ok = document.querySelector('.ok')
book.addEventListener('click', () => {
    appointment.classList.add('trigger');
    // setModal();
}, false);

