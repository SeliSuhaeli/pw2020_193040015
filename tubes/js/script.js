const tombolCari = document.querySelector('.tombol-cari');
const keyword = document.querySelector('.keyword');
const container = document.querySelector('.container');

// hilangkan tombol cari
tombolCari.style.display = 'none';

// event ketika kita menuliskan keyword
keyword.addEventListener('keyup', function () {

  // fetch()
  fetch(('ajax/ajax_cari.php?keyword=' + keyword.value))
    .then((response) => response.text())
    .then((response) => (container.innerHTML = response));

});

// preview Image untuk Tambah dan Ubah
function previewImage() {
  const foto = document.querySelector('.foto');
  const imgPreview = document.querySelector('.img-preview');

  const oFReader = new FileReader();
  oFReader.readAsDataURL(gambar.file[0]);

  oFReader.onload = function (oFREvent) {
    imgPreview.src = oFREvent.target.result;
  };
}