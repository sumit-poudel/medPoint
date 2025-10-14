
const button= document.getElementById('user-menu-button');
const dropdown= document.getElementById('user-dropdown');

button.addEventListener('click',()=>{
    button.classList.toggle('ring-gray-300');
  dropdown.classList.toggle('hidden');
})   