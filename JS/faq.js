document.querySelectorAll('.faq-question').forEach(button => {
    button.addEventListener('click', () => {
        const faqItem = button.parentElement;

        // Toggle active class for the clicked item
        faqItem.classList.toggle('active');

        // Toggle display for the answer section
        const answer = faqItem.querySelector('.faq-answer');
        answer.style.display = faqItem.classList.contains('active') ? 'block' : 'none';

        // Rotate icon only for active item
        const icon = button.querySelector('.icon');
        icon.style.transform = faqItem.classList.contains('active') ? 'rotate(180deg)' : 'rotate(0deg)';

        // Close other open items for a clean UI
        document.querySelectorAll('.faq-item').forEach(item => {
            if (item !== faqItem) {
                item.classList.remove('active');
                item.querySelector('.faq-answer').style.display = 'none';
                item.querySelector('.icon').style.transform = 'rotate(0deg)';
            }
        });
    });
});