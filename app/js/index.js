const second = 1000,
  minute = second * 60,
  hour = minute * 60,
  day = hour * 24;

const currentDate = new Date();

currentDate.setSeconds(currentDate.getSeconds() + 15);

const countDown = currentDate.getTime();

// pour la démo ont met le compte à rebours jusqu'à la date actuelle + 15sec

const x = setInterval(function() {    

  const now = new Date().getTime(),
        distance = countDown - now;

  let days = Math.floor(distance / day);
  if(Math.floor(days/30) > 0) {
    document.getElementById("months").style.display = "block";
    document.getElementById("months").innerText = Math.floor(days/30);
  } else {
    document.getElementById("months").parentNode.style.display = "none";
  }
  document.getElementById("days").innerText = Math.floor(days%30),
  document.getElementById("hours").innerText = Math.floor((distance % (day)) / (hour)),
  document.getElementById("minutes").innerText = Math.floor((distance % (hour)) / (minute)),
  document.getElementById("seconds").innerText = Math.floor((distance % (minute)) / second);

  if (distance < 0) {
    document.getElementById("headline").innerText = "c'est parti !\nrejoignez-nous au 11 Rue de Nantes, 67100 Strasbourg";
    document.getElementById("countdown").style.display = "none";
    clearInterval(x);
  }

}, 1000)

const readMoreButton = document.querySelector('.manifesto-btn');
const readMoreText = document.querySelector('#read-more');
const readMorePreview = document.querySelector('#read-preview');
const manifestoSection = document.querySelector('.manifesto');

readMoreButton.addEventListener('click', function() {
  if (readMoreText.style.display === 'inline') {
    readMoreText.style.display = 'none';
    readMorePreview.style.display = 'inline';
    readMoreButton.textContent = 'Lire plus';
    manifestoSection.style.height = '650px';
  } else {
    readMoreText.style.display = 'inline';
    readMorePreview.style.display = 'none';
    readMoreButton.textContent = 'Lire moins';
    manifestoSection.style.height = '1200px';
  }
});