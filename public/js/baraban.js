      document.addEventListener("DOMContentLoaded", function () {
        // HTML elementidan 'updated_up' vaqtini olish
        const updatedUp = document.getElementById('updated')?.getAttribute('data-updated');

        // JavaScript uchun 'updatedUp' ni 'Date' obyekti sifatida ishlatish
        if (updatedUp) {
            const lastUpdatedUp = new Date(updatedUp); // 'updated_up' vaqtini Date formatida saqlaymiz
        
            // Hozirgi vaqtni olish
            const now = new Date();
        
            // 3 soatni millisekundlarda hisoblash
            const threeHours = 3 * 60 * 60 * 1000;
        
            // Oxirgi yangilanish vaqti bilan hozirgi vaqt o'rtasidagi farqni hisoblash
            const timeDifference = now - lastUpdatedUp;
        
            const spinButton = document.getElementById('spinButton');
            const wheel = document.getElementById('wheel');
            const resultDisplay = document.getElementById('result');
            const coins = document.getElementById('coins');
            const modal = document.getElementById('myModal');
            const modalText = document.getElementById('modalText');
            const closeModalButton = document.getElementById('closeModal');
        
            // Baraban uchun sovrinlar va burchaklar
            const prizes = [50, 100, 150, 200, 250, 300, 350, 400];  // Sovrinlar
            const degrees = [0, 45, 90, 135, 180, 225, 270, 315]; // Barabaning sektoral burchaklari
        
            // Agar 3 soat o'tgan bo'lsa, tugmani yoqish, aks holda o'chirish
            if (timeDifference >= threeHours) {
                spinButton.disabled = false; // Tugmani faollashtirish
            } else {
                // Tugmani faollashtirishga qancha vaqt qolganini hisoblash
                const remainingTime = threeHours - timeDifference;
                const remainingHours = Math.floor(remainingTime / (60 * 60 * 1000));
                const remainingMinutes = Math.floor((remainingTime % (60 * 60 * 1000)) / (60 * 1000));
                const remainingSeconds = Math.floor((remainingTime % (60 * 1000)) / 1000);
        
                // Foydalanuvchiga qolgan vaqtni bildirish
                resultDisplay.innerText = `Tugma faqat ${remainingHours} soat, ${remainingMinutes} daqiqa, ${remainingSeconds} sekunddan keyin bosilishi mumkin.`;
                spinButton.disabled = true; // Tugmani o'chirish
            }
        
            // Tugma bosilganda ishlaydigan funksiya
            spinButton.addEventListener('click', function () {
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
        
            // Modalni yopish
            closeModalButton.addEventListener("click", function () {
                modal.style.display = "none"; // Modalni yopish
            });
        } else {
            console.error('Updated time not found.');
        }
    });

