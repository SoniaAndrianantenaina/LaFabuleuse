
document.addEventListener("mousemove", function(event) {
    const star = document.createElement("div");
    star.classList.add("star");
    star.style.top = event.clientY + "px";
    star.style.left = event.clientX + "px";
    document.body.appendChild(star);

    setTimeout(function() {
      star.remove();
    }, 200);
  });
