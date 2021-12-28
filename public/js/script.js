const flashdata = $('#flash-data').data('flashdata');
const notif = $('#notification').data('flashdata');

$(function () {
  $('#scrollToTop').on('click', function () {
    $(window).scrollTop(0);
  })
  // chart 3
  var options = {
    series: [],
    chart: {
      foreColor: '#9ba7b2',
      height: 360,
      type: 'area',
      zoom: {
        enabled: false
      },
      toolbar: {
        show: true
      },
    },
    colors: ['#0c971a'],
    title: {
      text: 'Web Visitor',
      align: 'left',
      style: {
        fontSize: "16px",
        color: '#666'
      }
    },
    dataLabels: {
      enabled: true
    },
    stroke: {
      curve: 'smooth'
    },
    xaxis: {
      // type: 'datetime',
      categories: ['Desember', 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juli', 'Juni', 'Agustus', 'September', 'Oktober', 'November']
    },
    tooltip: {
      x: {
        format: 'dd/MM/yy HH:mm'
      },
    },
  };
  var chart = new ApexCharts(document.querySelector("#visitorChart"), options);
  chart.render();

  var updateChart = function () {
    $.ajax({
      url: window.location.origin + '/visitor_data',
      type: 'GET',
      dataType: 'json',
      success: function (value) {
        chart.updateSeries([{
          name: 'Visitor',
          data: value
        }])
        $('#DecCounter').html(value[0]);
        $('#JanCounter').html(value[1]);
        $('#FebCounter').html(value[2]);
        $('#MarCounter').html(value[3]);
        $('#AprCounter').html(value[4]);
        $('#MayCounter').html(value[5]);
        $('#JunCounter').html(value[6]);
        $('#JulCounter').html(value[7]);
        $('#AugCounter').html(value[8]);
        $('#SepCounter').html(value[9]);
        $('#OctCounter').html(value[10]);
        $('#NovCounter').html(value[11]);
      },
      error: function (data) {
        console.log(data)
      }
    });
  }

  updateChart();
  // setInterval(() => {
  //   updateChart();
  // }, 2000);
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
  // Login Failed
  if (flashdata == 'Login Failed') {
    Swal.fire({
      icon: 'error',
      title: 'Access Ditolak!',
      text: 'Username / Password tidak cocok. Ulangi kembali!',
      confirmButtonColor: '#7d1417',
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