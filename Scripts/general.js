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

function showMessage() {
  // Show typing first
  const chatContainer = document.querySelector(".chat-container");
  const typing = document.createElement("div");
  typing.classList.add("chat-bubble");
  typing.setAttribute("id", "typingIndicator");
  typing.innerHTML = `
    <div class="sender">Ark Harven</div>
    <div class="typing-indicator">
      <span></span><span></span><span></span>
    </div>
  `;
  chatContainer.appendChild(typing);

  // After 2 seconds, remove typing and show actual message
  setTimeout(() => {
    typing.remove();
    const message = document.createElement("div");
    message.classList.add("chat-bubble");
    message.innerHTML = `
      <div class="sender">Ark Harven</div>
      <div class="message">
        Welcome! 😊 <br>
        How can I help you?
      </div>
      <div class="time">11:31 PM</div>
    `;
    chatContainer.appendChild(message);
  }, 2000);
}

// Call it when opening chat
showMessage();


// Home image slider
const track = document.querySelector('.slider-track');
const slides = document.querySelectorAll('.slider-track img');
const totalSlides = slides.length;
const heading = document.getElementById('main-heading');
const labels = Array.from(slides).map(slide => slide.dataset.label);
const finalMessage = "Your search<br>ends here.";
let index = 0;

// Typing text inside a specific element (used for both span and final h1)
function typeTextInElement(element, text, callback) {
  element.innerHTML = '';
  let charIndex = 0;

  const typeInterval = setInterval(() => {
    element.innerHTML += text.charAt(charIndex);
    charIndex++;
    if (charIndex === text.length) {
      clearInterval(typeInterval);
      if (callback) setTimeout(callback, 1500); // pause before deleting
    }
  }, 100);
}

function deleteTextInElement(element, callback) {
  let text = element.innerHTML;
  let charIndex = text.length;

  const deleteInterval = setInterval(() => {
    element.innerHTML = text.substring(0, charIndex - 1);
    charIndex--;
    if (charIndex === 0) {
      clearInterval(deleteInterval);
      if (callback) callback();
    }
  }, 60);
}

function restoreInitialHeading() {
  heading.classList.remove('typing');
  heading.innerHTML = `
    <span>Your search for<br></span>
    <span id="typing-text"></span><br>
    <span> ends&nbsp;here.</span>
  `;
  typeTextInElement(document.getElementById('typing-text'), labels[0]);
}

function showFinalTypedHeading(callback) {
  heading.innerHTML = '';
  heading.classList.add('typing');
  const message = finalMessage.replace(/<br>/g, '\n'); // treat <br> as line break during typing
  let container = document.createElement('div');
  heading.appendChild(container);

  typeTextInElement(container, message, () => {
    deleteTextInElement(container, () => {
      heading.classList.remove('typing');
      if (callback) callback();
    });
  });
}

function nextSlide() {
  const span = document.getElementById('typing-text');
  if (!span) return; // fallback
  deleteTextInElement(span, () => {
    index++;

    if (index === totalSlides - 1) {
      // Final slide
      track.style.transition = 'transform 1s ease-in-out';
      track.style.transform = `translateX(-${index * 100}vw)`;

      setTimeout(() => {
        showFinalTypedHeading(() => {
          track.style.transition = 'none';
          track.style.transform = `translateX(0vw)`;
          index = 0;
          restoreInitialHeading();
        });
      }, 0);
    } else {
      // Regular slide
      track.style.transition = 'transform 1s ease-in-out';
      track.style.transform = `translateX(-${index * 100}vw)`;
      typeTextInElement(span, labels[index]);
    }
  });
}

// Start
typeTextInElement(document.getElementById('typing-text'), labels[0]);
setInterval(nextSlide, 5000);

/* Price Specify */
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