let inputs = document.querySelectorAll('input')
let selects = document.querySelectorAll('select')


function save(el) {
    if(el.type === 'checkbox') {
        localStorage.setItem(el.id, el.checked);
    } else {
        localStorage.setItem(el.id, el.value);
    }
}
function select(el) {
    localStorage.setItem(el.id, el.value);
}
for (const inp in inputs) {
    inputs[inp].value = localStorage.getItem(inputs[inp].id);
    if(inputs[inp].type === 'checkbox') {
        inputs[inp].checked = localStorage.getItem(inputs[inp].id) === 'true';
    }
}
for (const sel in selects) {
    selects[sel].value = localStorage.getItem(selects[sel].id);
    
}
document.getElementById("personal").value = localStorage.getItem('personal')
document.getElementById("professional").value = localStorage.getItem('professional')
document.getElementById("exp_resp_and_ach1").value = localStorage.getItem('exp_resp_and_ach1')