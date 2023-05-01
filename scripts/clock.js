function updateClock() {
    var now = new Date();
    var time = now.toLocaleTimeString();
    var date = now.toLocaleDateString();
    document.getElementsByClassName('clock')[0].innerHTML = date + "<br>";
    document.getElementsByClassName('clock')[0].innerHTML += time;
    setInterval(updateClock, 1000)
  }