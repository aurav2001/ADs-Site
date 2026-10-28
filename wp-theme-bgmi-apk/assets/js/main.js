/**
 * BGMI APK Pro - Main Interactive Script
 */

document.addEventListener('DOMContentLoaded', function () {
    // 1. Mobile Menu Toggle
    const mobileMenuToggle = document.getElementById('mobileMenuToggle');
    const mainNav = document.getElementById('site-navigation');

    if (mobileMenuToggle && mainNav) {
        mobileMenuToggle.addEventListener('click', function () {
            mainNav.classList.toggle('is-open');
        });
    }

    // 2. Search Modal Popup
    const searchToggle = document.getElementById('searchToggle');
    const searchModal = document.getElementById('searchModal');
    const closeSearchModal = document.getElementById('closeSearchModal');

    if (searchToggle && searchModal) {
        searchToggle.addEventListener('click', function () {
            searchModal.style.display = 'flex';
        });

        if (closeSearchModal) {
            closeSearchModal.addEventListener('click', function () {
                searchModal.style.display = 'none';
            });
        }

        searchModal.addEventListener('click', function (e) {
            if (e.target === searchModal) {
                searchModal.style.display = 'none';
            }
        });
    }

    // 3. Interactive Download Countdown Timer (High CTR & User Engagement)
    const startTimerBtn = document.getElementById('startTimerBtn');
    const timerBox = document.getElementById('timerBox');
    const countdownNumber = document.getElementById('countdownNumber');
    const finalLinks = document.getElementById('finalLinks');

    if (startTimerBtn && timerBox && countdownNumber && finalLinks) {
        startTimerBtn.addEventListener('click', function () {
            // Show timer box
            timerBox.style.display = 'block';
            timerBox.scrollIntoView({ behavior: 'smooth', block: 'center' });
            startTimerBtn.disabled = true;
            startTimerBtn.style.opacity = '0.6';
            startTimerBtn.style.cursor = 'not-allowed';

            let timeLeft = (typeof bgmiData !== 'undefined' && bgmiData.timerSeconds) ? parseInt(bgmiData.timerSeconds) : 10;
            countdownNumber.textContent = timeLeft;

            const countdownInterval = setInterval(function () {
                timeLeft--;
                countdownNumber.textContent = timeLeft;

                if (timeLeft <= 0) {
                    clearInterval(countdownInterval);
                    countdownNumber.style.display = 'none';
                    const timerMessage = timerBox.querySelector('.timer-message');
                    if (timerMessage) timerMessage.style.display = 'none';
                    const timerSub = timerBox.querySelector('.timer-submessage');
                    if (timerSub) timerSub.style.display = 'none';

                    finalLinks.style.display = 'block';
                }
            }, 1000);
        });
    }

    // 4. FAQ Accordion Toggle
    const faqQuestions = document.querySelectorAll('.faq-question');
    faqQuestions.forEach(function (button) {
        button.addEventListener('click', function () {
            const faqItem = this.parentElement;
            const isActive = faqItem.classList.contains('active');

            // Close other items
            document.querySelectorAll('.faq-item').forEach(function (item) {
                item.classList.remove('active');
            });

            // Toggle current
            if (!isActive) {
                faqItem.classList.add('active');
            }
        });
    });

    // 5. Back to Top Floating Button
    const backToTopBtn = document.getElementById('backToTop');
    if (backToTopBtn) {
        window.addEventListener('scroll', function () {
            if (window.scrollY > 350) {
                backToTopBtn.classList.add('visible');
            } else {
                backToTopBtn.classList.remove('visible');
            }
        });

        backToTopBtn.addEventListener('click', function () {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    }
});
