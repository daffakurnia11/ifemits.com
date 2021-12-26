const flashdata = $('#flash-data').data('flashdata');

$(function () {
  $('#scrollToTop').on('click', function () {
    $(window).scrollTop(0);
  })
});

if (flashdata) {
  // No File Uploaded
  if (flashdata == 'No File Uploaded') {
    Swal.fire({
      icon: 'error',
      title: 'Registrasi Gagal!',
      text: 'Silakan upload file kembali untuk registrasi!',
      confirmButtonColor: '#7d1417',
    })
  }
  // Registration Success
  if (flashdata == 'Registration Success') {
    Swal.fire({
      icon: 'success',
      title: 'Registrasi Berhasil!',
      text: 'Terima kasih sudah mendaftar. Tunggu info selanjutnya!',
      confirmButtonColor: '#000c30',
    })
  }
}