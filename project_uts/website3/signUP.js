// memanggil
var modal = document.getElementById('id01');

// Saat pengguna mengklik di mana saja di luar modal, tutup
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}