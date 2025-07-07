const jumlahInput = document.getElementById("jumlah");
const kategoriSelect = document.getElementById("kategori");
const totalField = document.getElementById("total");

function hitungTotal() {
  const jumlah = parseInt(jumlahInput.value) || 0;
  const kategori = kategoriSelect.value;
  const harga = kategori === "dewasa" ? 35000 : 15000;
  const total = jumlah * harga;
  totalField.value = "Rp " + total.toLocaleString("id-ID");
}

jumlahInput.addEventListener("input", hitungTotal);
kategoriSelect.addEventListener("change", hitungTotal);

window.addEventListener("load", hitungTotal);

window.onload = () => {
    alert("Haiii! Terima kasih telah mengunjungi pemesanan tiket online");
};
