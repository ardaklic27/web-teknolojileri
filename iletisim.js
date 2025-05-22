new Vue({
  el: '#iletisimForm',
  methods: {
    onSubmit(event) {
      const adSoyad = document.getElementById("adSoyad").value.trim();
      const email = document.getElementById("email").value.trim();
      const telefon = document.getElementById("telefon").value.trim();
      const mesaj = document.getElementById("mesaj").value.trim();

      const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      const telefonRegex = /^[0-9]+$/;

      if (!adSoyad || !email || !telefon || !mesaj) {
        alert("Lütfen tüm alanları doldurunuz.");
        event.preventDefault();
        return;
      }

      if (!emailRegex.test(email)) {
        alert("Geçerli bir e-posta adresi giriniz.");
        event.preventDefault();
        return;
      }

      if (!telefonRegex.test(telefon)) {
        alert("Telefon numarası sadece rakamlardan oluşmalıdır.");
        event.preventDefault();
        return;
      }

      // Geçtiyse form gönderilir
    }
  },
  mounted() {
    document.getElementById("iletisimForm").addEventListener("submit", this.onSubmit);
  }
});
