document.addEventListener("DOMContentLoaded", function() {
    var currentDate = new Date();
  
    function updateDate(date) {
      document.getElementById("date").innerText = date.toDateString();
    }
  
    function getNextDate() {
      currentDate.setDate(currentDate.getDate() + 1);
      updateDate(currentDate);
    }
  
    function getPreviousDate() {
      currentDate.setDate(currentDate.getDate() - 1);
      updateDate(currentDate);
    }
  
    // Tampilkan tanggal saat halaman dimuat
    updateDate(currentDate);
  
    // Event listener untuk tombol "Next"
    document.getElementById("nextBtn").addEventListener("click", function() {
      getNextDate();
    });
  
    // Event listener untuk tombol "Previous"
    document.getElementById("prevBtn").addEventListener("click", function() {
      getPreviousDate();
    });
  });