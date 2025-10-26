const eventDate = new Date("2025-11-11T16:00:00").getTime();
const daysEl = document.getElementById("days");
const hoursEl = document.getElementById("hours");
const minutesEl = document.getElementById("minutes");
const secondsEl = document.getElementById("seconds");

function updateCountdown() {
  const now = new Date().getTime();
  const diff = eventDate - now;

  if (diff <= 0) {
    document.querySelector(".countdown-container").innerHTML = "<h1>🎉 Event Started! 🎉</h1>";
    return;
  }

  const days = Math.floor(diff / (1000 * 60 * 60 * 24));
  const hours = Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  const minutes = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
  const seconds = Math.floor((diff % (1000 * 60)) / 1000);

  daysEl.textContent = days.toString().padStart(2, "0");
  hoursEl.textContent = hours.toString().padStart(2, "0");
  minutesEl.textContent = minutes.toString().padStart(2, "0");
  secondsEl.textContent = seconds.toString().padStart(2, "0");
}

setInterval(updateCountdown, 1000);
updateCountdown();

window.addEventListener("load", () => {
  document.body.style.display = "block";

  const elements = document.getElementsByClassName("auto-width");
  const wd = window.innerWidth + "px";

  for (const el of elements) {
    el.style.width = wd; 
  }
});