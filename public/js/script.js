const flashdata = $('#flash-data').data('flashdata');
const notif = $('#notification').data('flashdata');

$(function () {
  "use strict";
  $('#datetimeOpen').bootstrapMaterialDatePicker({
    format: 'YYYY-MM-DD HH:mm'
  });
  $('#datetimeClosed').bootstrapMaterialDatePicker({
    format: 'YYYY-MM-DD HH:mm'
  });
});

$(function () {
  $('#scrollToTop').on('click', function () {
    $(window).scrollTop(0);
  })

  $('.team-container').hover(function () {
    $(this).children('.team-bg').addClass('hovered');
    $(this).find('.team-desc').addClass('hovered');
  }, function () {
    $(this).children('.team-bg').removeClass('hovered');
    $(this).find('.team-desc').removeClass('hovered');
  });

  $('.one-two').on('click', function () {
    $('#firstForm').fadeOut("3000", function () {
      $(this).css({ display: "none" });
      $('#secondForm').fadeIn("3000", function () {
        $(this).css({ display: "block" });
      });
    });
  })
  $('.two-one').on('click', function () {
    $('#secondForm').fadeOut("3000", function () {
      $(this).css({ display: "none" });
      $('#firstForm').fadeIn("3000", function () {
        $(this).css({ display: "block" });
      });
    })
  });
  $('.two-three').on('click', function () {
    $('#secondForm').fadeOut("3000", function () {
      $(this).css({ display: "none" });
      $('#thirdForm').fadeIn("3000", function () {
        $(this).css({ display: "block" });
      });
    });
  })
  $('.three-two').on('click', function () {
    $('#thirdForm').fadeOut("3000", function () {
      $(this).css({ display: "none" });
      $('#secondForm').fadeIn("3000", function () {
        $(this).css({ display: "block" });
      });
    })
  });
  $('.three-four').on('click', function () {
    $('#thirdForm').fadeOut("3000", function () {
      $(this).css({ display: "none" });
      $('#fourthForm').fadeIn("3000", function () {
        $(this).css({ display: "block" });
      });
    });
  })
  $('.four-three').on('click', function () {
    $('#fourthForm').fadeOut("3000", function () {
      $(this).css({ display: "none" });
      $('#thirdForm').fadeIn("3000", function () {
        $(this).css({ display: "block" });
      });
    })
  });

  const meaning = ['Adaptif', 'Bentuk Isometri', 'Gear', '6 Gerigi', 'Lubang di tengah'];
  const desc = [
    'Mudah menyesuaikan (diri) dengan keadaan',
    'Menggambarkan kesolidan, kesetaraan, dan kesatuan dalam KMM',
    'Teknologi yang berkesinambungan. Menggambarkan sisi mechanical dari Big Event IFEM Teknik Mesin FT-IRS ITS',
    '6 organisasi mahasiswa di Teknik Mesin FT-IRS ITS',
    'keberlangsungan IFEM yang tetap pada tujuannya dan tidak melenceng'
  ];
  let logoIndex = 1;

  $('.logo-next').on('click', function () {
    if (logoIndex < 5) {
      $('#logoMeaning').html(meaning[logoIndex]);
      $('#logoDesc').html(desc[logoIndex]);
      logoIndex++;
    } else {
      logoIndex = 0;
      $('#logoMeaning').html(meaning[logoIndex]);
      $('#logoDesc').html(desc[logoIndex]);
      logoIndex++;
    }
  });

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
  if (notif == "Settings applied") {
    Lobibox.notify('success', {
      pauseDelayOnHover: true,
      continueDelayOnInactiveTab: false,
      position: 'top right',
      icon: 'bx bx-check-circle',
      msg: 'Pengaturan berhasil diubah!'
    });
  }
  if (notif == "Settings not applied") {
    Lobibox.notify('warning', {
      pauseDelayOnHover: true,
      continueDelayOnInactiveTab: false,
      position: 'top right',
      icon: 'bx bx-check-circle',
      msg: 'Pengaturan gagal diubah!'
    });
  }
}