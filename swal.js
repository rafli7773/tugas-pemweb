const passwordTidakSama = document.querySelector(".passwordTidakSama"),
  berhasilDaftar = document.querySelector(".berhasilDaftar"),
  berhasilTambah = document.querySelector(".berhasilTambah"),
  berhasilUbah = document.querySelector(".berhasilUbah"),
  berhasilHapus = document.querySelector(".berhasilHapus");
salahLogin = document.querySelector(".salahLogin");
dipake = document.querySelector(".dipake");
document.querySelectorAll(".hapus").forEach((a) => {
  a.addEventListener("click", (a) => {
    a.preventDefault();
    const e = a.target.dataset.id;
    Swal.fire({
      title: "Yakin",
      text: "Menghapus Data",
      icon: "warning",
      showCancelButton: !0,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      confirmButtonText: "Yakin",
    }).then((a) => {
      a.isConfirmed &&
        (document.location.href = `http://localhost/tugas/hapus.php?id=${e}`);
    });
  });
}),
  passwordTidakSama && Swal.fire("Salah", "Password Tidak Sama", "error"),
  berhasilDaftar && Swal.fire("Berhasil", "Mendaftar akun", "success"),
  berhasilTambah && Swal.fire("Data", "Berhasil di simpan", "success"),
  berhasilUbah && Swal.fire("Data", "Berhasil di edit", "success"),
  berhasilHapus && Swal.fire("Data", "Berhasil di hapus", "success");
dipake && Swal.fire("Salah", "Username sudah di pakai", "error");
salahLogin && Swal.fire("Salah", "Username atau password salah", "error");
