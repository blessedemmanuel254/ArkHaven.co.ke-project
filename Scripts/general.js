function toggleSideBar() {
  const popupbar = document.getElementById('sidebar');
  const overlay = document.getElementById('overlay');
  popupbar.classList.toggle('active');
  overlay.classList.toggle('active');
}

function toggleWhatsAppChat() {
  var box = document.getElementById("whatsapp-chat-box");
  box.style.display = box.style.display === "block" ? "none" : "block";
}

function sendWhatsAppMessage() {
  var message = document.getElementById("userMessage").value.trim();
  if (message !== "") {
    var phoneNumber = "254708670396";
    var url = "https://wa.me/" + phoneNumber + "?text=" + encodeURIComponent(message);
    window.open(url, "_blank");
  }
}

document.addEventListener("keydown", function(event) {
  if (event.key === "Escape") {
    var box = document.getElementById("whatsapp-chat-box");
    if (box && box.style.display === "block") {
      box.style.display = "none";
    }

    // Optional: also close sidebar if it's open
    const sidebar = document.getElementById('sidebar');
    const overlay = document.getElementById('overlay');
    if (sidebar.classList.contains('active')) {
      sidebar.classList.remove('active');
    }
    if (overlay.classList.contains('active')) {
      overlay.classList.remove('active');
    }
  }
});


// Home image slider
const track = document.querySelector('.slider-track');
const slides = document.querySelectorAll('.slider-track img');
const totalSlides = slides.length;
let index = 0;

function nextSlide() {
  index++;
  track.style.transition = 'transform 1s ease-in-out';
  track.style.transform = `translateX(-${index * 100}vw)`;

  if (index === totalSlides - 1) {
    setTimeout(() => {
      track.style.transition = 'none';
      track.style.transform = `translateX(0vw)`;
      index = 0;
    }, 1000);
  }
}

setInterval(nextSlide, 3000);


const minRange = document.getElementById('minRange');
const maxRange = document.getElementById('maxRange');
const minVal = document.getElementById('minVal');
const maxVal = document.getElementById('maxVal');

function updateValues() {
  let minValue = parseInt(minRange.value);
  let maxValue = parseInt(maxRange.value);

  if (minValue > maxValue) {
    // Prevent crossing
    if (event.target.id === "minRange") {
      minRange.value = maxValue;
      minValue = maxValue;
    } else {
      maxRange.value = minValue;
      maxValue = minValue;
    }
  }

  minVal.textContent = minValue.toLocaleString();
  maxVal.textContent = maxValue.toLocaleString();
}

minRange.addEventListener('input', updateValues);
maxRange.addEventListener('input', updateValues);

updateValues(); // Initialize