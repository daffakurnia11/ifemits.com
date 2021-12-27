const flashdata = $('#flash-data').data('flashdata');
const notif = $('#notification').data('flashdata');

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

if (notif) {
  if (notif == "Link created") {
    Lobibox.notify('success', {
      pauseDelayOnHover: true,
      continueDelayOnInactiveTab: false,
      position: 'top right',
      icon: 'bx bx-check-circle',
      msg: 'Short link berhasil dibuat!'
    });
  }
  if (notif == "Link updated") {
    Lobibox.notify('success', {
      pauseDelayOnHover: true,
      continueDelayOnInactiveTab: false,
      position: 'top right',
      icon: 'bx bx-check-circle',
      msg: 'Short link berhasil diubah!'
    });
  }
  if (notif == "Link deleted") {
    Lobibox.notify('success', {
      pauseDelayOnHover: true,
      continueDelayOnInactiveTab: false,
      position: 'top right',
      icon: 'bx bx-check-circle',
      msg: 'Short link berhasil dihapus!'
    });
  }
  if (notif == "Data deleted") {
    Lobibox.notify('success', {
      pauseDelayOnHover: true,
      continueDelayOnInactiveTab: false,
      position: 'top right',
      icon: 'bx bx-check-circle',
      msg: 'Data berhasil dihapus!'
    });
  }
}