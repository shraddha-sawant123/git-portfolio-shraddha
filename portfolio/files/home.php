<style type="text/css">
	

body {
  font-family: 'Raleway', sans-serif;
  color: #ccc;
  overflow:hidden;
  background: #eeeeee;
}

.container {
  display: flex;
  flex-direction: column;
  justify-content: center;
  height: 100%;
  padding: 0 3rem;
}

h1, h2 {
  font-weight: 200;
  margin: 0.4rem;
}

h1 {
  font-size: 3.5rem;
}

h2 {
  font-size: 2rem;
  color: #aaa;
}

/* Cursor */
.txt-type > .txt {
  border-right: 0.2rem solid #777;
}

@media(min-width: 1200px) {
  h1 {
    font-size: 5rem;
  }
}

@media(max-width: 800px) {
  .container {
    padding: 0 1rem;
  }

  h1 {
    font-size: 3rem;
  }
}

@media(max-width: 500px) {
  h1 {
    font-size: 2.5rem;
  }

  h2 {
    font-size: 1.5rem;
  }
}
</style>
<div style="width: 100%;height: 100%;" id="birdsbackground">
	 <div class="container">
	 <h1>Shraddha  The 
      <span class="txt-type" data-wait="3000" data-words='["Developer", "Designer", "Creator"]'></span>
    </h1>
    <h2>Welcome To My Portfolio</h2>
</div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r120/three.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vanta/0.5.19/vanta.birds.min.js"></script>
<script>
VANTA.BIRDS({
  el: "#birdsbackground",
  mouseControls: true,
  touchControls: true,
  gyroControls: false,
  minHeight: 200.00,
  minWidth: 200.00,
  scale: 1.00,
  scaleMobile: 1.00
})
</script>
<script type="text/javascript">
	// const TypeWriter = function(txtElement, words, wait = 3000) {
//   this.txtElement = txtElement;
//   this.words = words;
//   this.txt = '';
//   this.wordIndex = 0;
//   this.wait = parseInt(wait, 10);
//   this.type();
//   this.isDeleting = false;
// }

// // Type Method
// TypeWriter.prototype.type = function() {
//   // Current index of word
//   const current = this.wordIndex % this.words.length;
//   // Get full text of current word
//   const fullTxt = this.words[current];

//   // Check if deleting
//   if(this.isDeleting) {
//     // Remove char
//     this.txt = fullTxt.substring(0, this.txt.length - 1);
//   } else {
//     // Add char
//     this.txt = fullTxt.substring(0, this.txt.length + 1);
//   }

//   // Insert txt into element
//   this.txtElement.innerHTML = `<span class="txt">${this.txt}</span>`;

//   // Initial Type Speed
//   let typeSpeed = 300;

//   if(this.isDeleting) {
//     typeSpeed /= 2;
//   }

//   // If word is complete
//   if(!this.isDeleting && this.txt === fullTxt) {
//     // Make pause at end
//     typeSpeed = this.wait;
//     // Set delete to true
//     this.isDeleting = true;
//   } else if(this.isDeleting && this.txt === '') {
//     this.isDeleting = false;
//     // Move to next word
//     this.wordIndex++;
//     // Pause before start typing
//     typeSpeed = 500;
//   }

//   setTimeout(() => this.type(), typeSpeed);
// }


// ES6 Class
class TypeWriter {
  constructor(txtElement, words, wait = 3000) {
    this.txtElement = txtElement;
    this.words = words;
    this.txt = '';
    this.wordIndex = 0;
    this.wait = parseInt(wait, 10);
    this.type();
    this.isDeleting = false;
  }

  type() {
    // Current index of word
    const current = this.wordIndex % this.words.length;
    // Get full text of current word
    const fullTxt = this.words[current];

    // Check if deleting
    if(this.isDeleting) {
      // Remove char
      this.txt = fullTxt.substring(0, this.txt.length - 1);
    } else {
      // Add char
      this.txt = fullTxt.substring(0, this.txt.length + 1);
    }

    // Insert txt into element
    this.txtElement.innerHTML = `<span class="txt">${this.txt}</span>`;

    // Initial Type Speed
    let typeSpeed = 300;

    if(this.isDeleting) {
      typeSpeed /= 2;
    }

    // If word is complete
    if(!this.isDeleting && this.txt === fullTxt) {
      // Make pause at end
      typeSpeed = this.wait;
      // Set delete to true
      this.isDeleting = true;
    } else if(this.isDeleting && this.txt === '') {
      this.isDeleting = false;
      // Move to next word
      this.wordIndex++;
      // Pause before start typing
      typeSpeed = 500;
    }

    setTimeout(() => this.type(), typeSpeed);
  }
}


// Init On DOM Load
document.addEventListener('DOMContentLoaded', init);

// Init App
function init() {
  const txtElement = document.querySelector('.txt-type');
  const words = JSON.parse(txtElement.getAttribute('data-words'));
  const wait = txtElement.getAttribute('data-wait');
  // Init TypeWriter
  new TypeWriter(txtElement, words, wait);
}
</script>