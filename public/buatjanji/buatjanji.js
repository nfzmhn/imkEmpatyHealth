const buttonSubmit = document.getElementById("btn-submit");
const popup = document.getElementById("popup");
const closePopup = document.getElementById("close-popup");

function showPopup() {
    popup.style.display = "flex";
    popup.style.opacity = 0;
    setTimeout(() => {
      popup.style.opacity = 1;
    }, 10);
  
    setTimeout(() => {
      popup.style.opacity = 0;
      setTimeout(() => {
        popup.style.display = "none";
      }, 500); 
    }, 3000);
}

buttonSubmit.addEventListener("click", showPopup);

// Close pop-up when clicking on the close button
closePopup.addEventListener("click", () => {
    popup.style.display = "none";
  });

document.getElementById('spesialis').addEventListener('change', function () {
    const spesialisId = this.value;

    fetch(`/get-dokters?spesialis_id=${spesialisId}`)
        .then(response => response.json())
        .then(data => {
            const dokterSelect = document.getElementById('dokter');
            dokterSelect.innerHTML = '<option>Pilih Dokter</option>';
            data.forEach(dokter => {
                dokterSelect.innerHTML += `<option value="${dokter.id}">${dokter.nama}</option>`;
            });
        });
});