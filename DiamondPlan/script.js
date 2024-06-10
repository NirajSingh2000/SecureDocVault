const slidePage = document.querySelector(".slide-page");
const nextBtnFirst = document.querySelector(".firstNext");
const prevBtnSec = document.querySelector(".prev-1");
const nextBtnSec = document.querySelector(".next-1");
const prevBtnThird = document.querySelector(".prev-2");
const nextBtnThird = document.querySelector(".next-2");
const prevBtnFourth = document.querySelector(".prev-3");
const submitBtn = document.querySelector(".submit");
const progressText = document.querySelectorAll(".step p");
const progressCheck = document.querySelectorAll(".step .check");
const bullet = document.querySelectorAll(".step .bullet");
let current = 1;

nextBtnFirst.addEventListener("click", function(event) {
  event.preventDefault();
  if (validateStep(1)) {
    slidePage.style.marginLeft = "-25%";
    updateProgress(1);
    current += 1;
  }
});

nextBtnSec.addEventListener("click", function(event) {
  event.preventDefault();
  if (validateStep(2)) {
    slidePage.style.marginLeft = "-50%";
    updateProgress(2);
    current += 1;
  }
});

nextBtnThird.addEventListener("click", function(event) {
  event.preventDefault();
  if (validateStep(3)) {
    slidePage.style.marginLeft = "-75%";
    updateProgress(3);
    current += 1;
  }
});

submitBtn.addEventListener("click", function(event) {
  event.preventDefault();
  if (validateStep(4)) {
    updateProgress(4);
    setTimeout(function() {
      alert("Registered Sucessufully. You will get Username & Password through Registerd Email.");
      window.location.href = "../filesystem/login.php";
    }, 2000);
  }
});

prevBtnSec.addEventListener("click", function(event) {
  event.preventDefault();
  slidePage.style.marginLeft = "0%";
  updateProgress(1);
  current -= 1;
});

prevBtnThird.addEventListener("click", function(event) {
  event.preventDefault();
  slidePage.style.marginLeft = "-25%";
  updateProgress(2);
  current -= 1;
});

prevBtnFourth.addEventListener("click", function(event) {
  event.preventDefault();
  slidePage.style.marginLeft = "-50%";
  updateProgress(3);
  current -= 1;
});

function validateStep(step) {
  const inputs = document.querySelectorAll(`.page:nth-child(${step}) input[required], .page:nth-child(${step}) select[required]`);
  const checkboxes = document.querySelectorAll(`.page:nth-child(${step}) input[type="checkbox"][required]`);
  let isValid = true;

  inputs.forEach(input => {
    if (!input.value.trim()) {
      isValid = false;
      input.classList.add("error");
    } else {
      input.classList.remove("error");
    }
  });

  checkboxes.forEach(checkbox => {
    if (!checkbox.checked) {
      isValid = false;
      checkbox.classList.add("error");
    } else {
      checkbox.classList.remove("error");
    }
  });

  return isValid;
}

function updateProgress(step) {
  for (let i = 0; i < bullet.length; i++) {
    if (i < step) {
      bullet[i].classList.add("active");
      progressCheck[i].classList.add("active");
      progressText[i].classList.add("active");
    } else {
      bullet[i].classList.remove("active");
      progressCheck[i].classList.remove("active");
      progressText[i].classList.remove("active");
    }
  }
}

//mail
const form = document.querySelector('form');
const mailFName = document.getElementById("mailFName");
const mailLName = document.getElementById("mailLName");
const mailEmail = document.getElementById("mailEmail");
const mailContact = document.getElementById("mailContact");
const mailDOB = document.getElementById("mailDOB");
const mailSubject = document.getElementById("mailSubject");

function Send(){
    const bodyMessage = `First Name: ${mailFName.value}<br>Last Name: ${mailLName.value}<br> Email: ${mailEmail.value}<br> Contact: ${mailContact.value}<br>Date of Birth: ${mailDOB.value}`;

    Email.send({
    SecureToken : "efc572cb-e04a-4bd5-8072-1f9577805b32",

    To : 'snirajsingh678@gmail.com',
    From : "snirajsingh567@gmail.com",
    Subject : "CloudValut Subscription of Diamond-Rs.599",
    Body : bodyMessage
    }).then(
     message => {
        if (message == "OK"){
            Swal.fire({
                title: "Success!",
                text: "Registered Successfully! We will send your Userid & Password within 30 minutes via Email. Thank you :)",
                icon: "success"
              });
        }
        else{
            swal("Somthing Wrong", "Your Data is not Received", "error")
        }
     }
    );
}

form.addEventListener("submit", (e) => {
    e.preventDefault();
    sendEmail();
});
