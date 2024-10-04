 const aspireImage = document.getElementById('aspire-image');
 const totalElement = document.getElementById('total');
 
 function incrementTotal(touches) {
     let currentTotal = parseInt(totalElement.innerText);
     currentTotal += touches;
      totalElement.innerText = currentTotal;
 
       showAnimation(touches);
 }
 
 function showAnimation(value) {
     const animationElement = document.createElement('div');
     animationElement.classList.add('increment-animation');
     animationElement.innerText = `+${value}`;
     document.body.appendChild(animationElement);
 
      const aspireImageRect = aspireImage.getBoundingClientRect();
     animationElement.style.left = aspireImageRect.left + aspireImageRect.width / 2 + 'px';
     animationElement.style.top = aspireImageRect.top + aspireImageRect.height / 2 + 'px';
 
     setTimeout(() => {
         animationElement.remove();
     }, 1000);
 }
 
 aspireImage.addEventListener('click', function() {
     incrementTotal(1);
 });
 
 aspireImage.addEventListener('touchstart', function(event) {
     const numberOfTouches = event.touches.length;
     incrementTotal(numberOfTouches);
 });



 const image = document.getElementById('aspire-image'); 
    const progressBar = document.getElementById('progressBar');
    const progressText = document.getElementById('progressText');
    let progress = localStorage.getItem('progress') ? parseInt(localStorage.getItem('progress')) : 100;
    let interval;

    function updateProgress() {
        if (progress < 100) {
            progress++;
            updateProgressBar();
            localStorage.setItem('100/', progress); 
        }
    }

    function decreaseProgress() {
        if (progress > 0) {
            progress--;
            updateProgressBar();
            localStorage.setItem('100/', progress); 

            if (progress === 0) {
                image.style.pointerEvents = 'none';             }
        }
    }

    function updateProgressBar() {
        progressBar.style.width = progress + '%';
        progressText.innerText = '100/ ' + progress;

        // Ranglarni o'zgartirish
        if (progress > 66) {
            progressBar.style.backgroundColor = '#4caf50';
        } else if (progress > 33) {
            progressBar.style.backgroundColor = '#ffeb3b';
        } else {
            progressBar.style.backgroundColor = '#f44336'; 
        }
    }

    image.addEventListener('click', () => {
        if (progress > 0) {
            decreaseProgress();
        } else {
            progress = 100; 
            image.style.pointerEvents = 'auto'; 
            updateProgressBar(); 
            localStorage.setItem('100/', progress); 
        }
    });

    
    updateProgressBar(); 

   
    interval = setInterval(updateProgress, 1000);



    //progress tugashi


    let timeout; 


aspireImage.addEventListener('click', function() {
    
    let currentTotal = parseInt(total.value);
    
    currentTotal += 1;
   
    total.value = currentTotal;

    
    if (timeout) {
        clearTimeout(timeout);
    }
    
    
    timeout = setTimeout(() => {
        document.getElementById('coinForm').submit(); 
    }, 3000); 
});


    