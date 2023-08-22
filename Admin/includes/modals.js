var farmModal = document.getElementById('farmModal');
var fieldModal = document.getElementById('fieldModal');

function openFarmModal(){
    farmModal.classList.remove('hidden');
}
function closeFarmModal(){
    farmModal.classList.add('hidden');
}
function openFieldModal(){
    fieldModal.classList.remove('hidden');
}
function closeFieldModal(){
    fieldModal.classList.add('hidden');
}