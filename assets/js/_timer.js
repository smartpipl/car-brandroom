function startCountdown(targetDate) {
  const timerInterval = setInterval(updateTimer, 1000);

  function updateTimer() {
    const now = new Date();
    const timeDiff = targetDate - now;

    if (timeDiff <= 0) {
      clearInterval(timerInterval);
      document.querySelector(".timer__countdown").innerHTML = "<h2>Время вышло!</h2>";
      return;
    }

    const months = Math.floor(timeDiff / (1000 * 60 * 60 * 24 * 30));
    const days = Math.floor((timeDiff % (1000 * 60 * 60 * 24 * 30)) / (1000 * 60 * 60 * 24));
    const hours = Math.floor((timeDiff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    const minutes = Math.floor((timeDiff % (1000 * 60 * 60)) / (1000 * 60));
    const seconds = Math.floor((timeDiff % (1000 * 60)) / 1000);

    document.getElementById("months").textContent = String(months).padStart(2, "0");
    document.getElementById("days").textContent = String(days).padStart(2, "0");
    document.getElementById("hours").textContent = String(hours).padStart(2, "0");
    document.getElementById("minutes").textContent = String(minutes).padStart(2, "0");
    document.getElementById("seconds").textContent = String(seconds).padStart(2, "0");
  }

  updateTimer();
}

const targetDate = new Date("2025-04-01T00:00:00");
startCountdown(targetDate);
