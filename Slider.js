let slider = document.querySelector('.slider .list');
let dots = document.querySelectorAll('.dots li');
let index = 0;

function moveSlider() {
  slider.style.transform = `translateX(-${index * 100}%)`;
  document.querySelector('.dots li.active').classList.remove('active');
  dots[index].classList.add('active');
}

dots.forEach((dot, i) => {
  dot.addEventListener('click', function () {
    index = i;
    moveSlider();
  });
});

function autoPlay() {
  index++;
  if (index >= dots.length) {
    index = 0;
  }
  moveSlider();
}

setInterval(autoPlay, 3000);

const cards = document.querySelectorAll('.card');
const preview = document.getElementById('hoverPreview');
let hoverTimer;

cards.forEach(card => {
  const imgSrc = card.querySelector('img').src;
  const title = card.querySelector('h3').innerText;
  const desc = card.querySelector('p').innerText;

  card.addEventListener('mouseenter', (e) => {
    hoverTimer = setTimeout(() => {
      preview.style.display = 'flex';
      preview.querySelector('img').src = imgSrc;
      preview.querySelector('.hover-text').innerHTML = `<strong>${title}</strong><br>${desc}`;
    }, 1000); // delay 0.6 detik
  });

  card.addEventListener('mousemove', (e) => {
    preview.style.top = e.clientY + 20 + 'px';
    preview.style.left = e.clientX + 20 + 'px';
  });

  card.addEventListener('mouseleave', () => {
    clearTimeout(hoverTimer);
    preview.style.display = 'none';
  });
});