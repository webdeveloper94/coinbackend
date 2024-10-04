    const spinButton = document.getElementById("spinButton");
    const wheel = document.getElementById("wheel");
    const resultDisplay = document.getElementById("result");
    const coins = document.getElementById('coins');

    const modal = document.getElementById("myModal");
    const modalText = document.getElementById("modalText");
    const closeModalButton = document.getElementById("closeModal");

    const prizes = [50, 100, 150, 200, 250, 300, 350, 400];  // Sovrinlar
    const degrees = [0, 45, 90, 135, 180, 225, 270, 315]; // Barabaning sektoral burchaklari

    spinButton.addEventListener("click", function() {
      // Tasodifiy sovrin tanlash
      const prizeIndex = Math.floor(Math.random() * prizes.length);
      const prize = prizes[prizeIndex];

      // Tasodifiy burchakni tanlash
      const rotationDegrees = degrees[prizeIndex] + (Math.floor(Math.random() * 10) + 5) * 360;  // tasodifiy aylanish

      // Barabanni aylantirish
      wheel.style.transition = "transform 4s ease-out";
      wheel.style.transform = `rotate(${rotationDegrees}deg)`;

      // Modal oynada sovrinni ko'rsatish
      setTimeout(() => {
        modalText.textContent = `Sovrin: ${prize} tanga`;
        modal.style.display = "block"; // Modalni ko'rsatish
        coins.value = prize;

      }, 4000); // 4 soniya o’tgach sovrinni ko’rsatish
    });

    closeModalButton.addEventListener("click", function() {
      modal.style.display = "none"; // Modalni yopish
    });
