// This function will be executed after the page is loaded
window.addEventListener('load', function () {
  // Set a timeout to hide the loading screen after 1 second (1000 milliseconds)
  setTimeout(function () {
      document.getElementById('loading-screen').style.display = 'none';
  }, 1000);
});