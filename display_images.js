// Event listener for cards
document.querySelectorAll('.card').forEach(card => {
    card.addEventListener('click', () => {
        const petType = card.querySelector('.card-title').textContent.replace('Pet Type: ', '');
        const petSex = card.querySelector('.card-text:nth-of-type(1)').textContent.replace('Sex: ', '');
        const petColor = card.querySelector('.card-text:nth-of-type(3)').textContent.replace('Color: ', '');
        const petBreed = card.querySelector('.card-text:nth-of-type(2)').textContent.replace('Breed: ', '');

        // Set values in hidden form
        document.getElementById('pet_type').value = petType;
        document.getElementById('pet_sex').value = petSex;
        document.getElementById('pet_color').value = petColor;
        document.getElementById('pet_breed').value = petBreed;

        // Submit the hidden form
        document.getElementById('submit-form').click();
    });
});
