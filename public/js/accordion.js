// alert('This is inside the JS file!');

// $.('.accordion').click(function() {
//   //.filter(':not:bla');
//   $(this).addClass('is-open');

// }

var accordions = document.getElementsByClassName("accordion");
// accordions.classList.remove('is-open');

for (var i = 0; i < accordions.length; i++) {
  
  accordions[i].onclick = function() {
    this.classList.toggle('is-open');
    var content = this.nextElementSibling;
    
    if (content.style.maxHeight) {
      // accordion is currently open, so close it
      content.style.maxHeight = null;
    } else {
      // accordion is currently closed, so open it
      content.style.maxHeight = content.scrollHeight + "px";
    }
    
    
  }

}
