document.addEventListener("DOMContentLoaded", () => {
  function rem2px(rem) {    
    return rem * parseFloat(getComputedStyle(document.documentElement).fontSize);
  }
  function randInt(max) {
    return Math.floor(Math.random() * max)
  }

  const sky = document.getElementById('sky')
  const screenWidth = window.innerWidth - rem2px(4)
  const screenHeight = window.innerHeight - rem2px(4.5 + 4)

  const ratio = Math.floor((screenWidth / screenHeight) * 50)
  
  const starAnimation = [
    { transform: "scale(1)" },
    { transform: "scale(0.5)" },
  ]
  
  const starTiming1 = {
    duration: 1200,
    iterations: Infinity,
    direction: 'alternate',
  }
  const starTiming2 = {
    duration: 800,
    iterations: Infinity,
    direction: 'alternate',
  }
  const starTiming3 = {
    duration: 1600,
    iterations: Infinity,
    direction: 'alternate',
  }
  for (let i = 0; i < ratio; i++) {
    const star = document.createElement('img')
    star.src = imageUrl
    star.classList.add('star')
    star.style.top = `${rem2px(6.5) + randInt(screenHeight)}px`
    star.style.left = `${rem2px(2) + randInt(screenWidth)}px`
    switch (i) {
      case i%3:
        star.animate(starAnimation, starTiming3)
        break;
      case i%2:
        star.animate(starAnimation, starTiming2)
        break;
      default:
        star.animate(starAnimation, starTiming1)
        break;
    }
    sky.appendChild(star)
  }
})
